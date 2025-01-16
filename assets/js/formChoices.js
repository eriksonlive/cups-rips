document.addEventListener('DOMContentLoaded', () => {
  function initializeChoicesAutocomplete(selector) {
    const elements = document.querySelectorAll(selector);

    elements.forEach((selectElement) => {
      if (!selectElement) return;

      const url = selectElement.dataset.url; // URL del backend
      const placeholder = selectElement.dataset.placeholder || 'Buscar...';

      // Inicializa Choices.js
      let choicesInstance = new Choices(selectElement, {
        searchEnabled: true,
        searchPlaceholderValue: placeholder,
        shouldSort: false,
        removeItemButton: true, // Si es necesario permitir remover elementos
      });

      selectElement._choicesInstance = choicesInstance; // Guardar la instancia en el elemento

      // Función para actualizar las opciones basándose en el valor predeterminado
      const updateChoicesWithDefault = (defaultValue) => {
        if (!defaultValue || !url) return;

        query = selector !== '.choices-autocomplete' ? 'id': 'q';

        fetch(`${url}?${query}=${defaultValue}`)
          .then((response) => response.json())
          .then((data) => {
            choicesInstance.clearChoices();

            choicesInstance.setChoices(
              data.map((item) => {
                return {
                  value: item?.id.toString(),
                  label:
                    selector !== '.choices-autocomplete'
                      ? item?.codigo + ': ' + item.text
                      : item.text,
                };
              }),
              'value',
              'label',
              true
            );

            // Selecciona automáticamente el valor predeterminado si coincide
            if (data.some((item) => item.id.toString() == defaultValue)) {
              choicesInstance.setChoiceByValue(defaultValue);
            }
          })
          .catch((error) =>
            console.error('Error al cargar opciones iniciales:', error)
          );
      };

      // Observar cambios en el atributo data-default
      const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          if (mutation.attributeName === 'data-default') {
            const newDefaultValue = selectElement.dataset.default;

            if (!newDefaultValue) {
              choicesInstance.removeActiveItems(); // Elimina la selección actual
              choicesInstance.setChoiceByValue(''); // Asegura que el valor seleccionado sea vacío
            } else {
              updateChoicesWithDefault(newDefaultValue); // Actualizar las opciones
            }
          }
        });
      });

      observer.observe(selectElement, { attributes: true }); // Observar atributos del elemento

      // Inicializar con el valor actual de data-default si existe
      const defaultValue = selectElement.dataset.default;
      if (defaultValue) {
        updateChoicesWithDefault(defaultValue);
      }

      // Gestionar la búsqueda dinámica en el evento input
      selectElement.addEventListener('search', async (event) => {
        const query = event.detail.value; // Lo que el usuario escribe
        const url = selectElement.dataset.url;

        if (query.length < 2) {
          choicesInstance.clearChoices();
          return;
        }

        try {
          const response = await fetch(`${url}?q=${encodeURIComponent(query)}`);
          const data = await response.json();
          // Limpiar y añadir las nuevas opciones
          choicesInstance.clearChoices();
          choicesInstance.setChoices(
            data.map((item) => ({
              value: item.id,
              label:
                selector !== '.choices-autocomplete'
                  ? item?.codigo + ': ' + item.text + ''
                  : item.text,
            })),
            'value',
            'label',
            true
          );

          // Seleccionar el valor predeterminado si existe
          if (defaultValue && data.some((item) => item.id == defaultValue)) {
            choicesInstance.setChoiceByValue(defaultValue);
          }
        } catch (error) {
          console.error('Error al cargar los datos:', error);
        }
      });
    });
  }

  // Inicializar Choices.js para selectores específicos
  initializeChoicesAutocomplete('.choices-autocomplete');
  initializeChoicesAutocomplete('.codigo-autocomplete');
});
