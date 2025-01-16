document.addEventListener('alpine:init', () => {
  Alpine.data('formHandler', () => ({
    groups: JSON.parse(
      document.querySelector('[data-groups]').getAttribute('data-groups')
    ),
    selectedGroup: '',
    services: [],
    getIdUrl: '',
    updateUrl: '',
    itemId: null,
    errors: {},
    initialState: {
      cups: '',
      diag: '',
      causa: '',
      finalidad: '',
      grupo: '',
      servicio: '',
      tipoCita: '',
      tipoDiag: '',
    },
    show: true,
    updateServices() {
      this.services = this.selectedGroup
        ? this.groups[this.selectedGroup].items
        : [];
    },
    handleExample(event) {
      this.itemId = event.detail.id ? event.detail?.id : null;
    },
    init() {
      const updateUrl = this.$el.getAttribute('data-update');
      const getIdUrl = this.$el.getAttribute('data-getid');
      this.updateUrl = updateUrl.replace('/id', '');
      this.getIdUrl = getIdUrl.replace('/id', '');

      this.$watch('itemId', () => {
        this.loadChoicesData();
      });
    },
    loadChoicesData() {
      if (this.getIdUrl && this.itemId) {
        fetch(`${this.getIdUrl}/${this.itemId}`)
          .then((response) => response.json())
          .then((data) => {
            this.initialState = {
              ...this.initialState,
              cups: data.cups,
              diag: data.diag,
              causa: data.causa_externa,
              finalidad: data.finalidad,
              tipoCita: data.tipo_cita,
              tipoDiag: data.tipo_diag,
              grupo: data.grupo,
            };
            this.selectedGroup = data.grupo;
            this.updateServices();
            this.initialState.servicio = data.servicio;
            this.show = data.informe;
            this.errors = {};
          })
          .catch((error) =>
            console.error('Error al cargar opciones iniciales:', error)
          );
      } else {
        this.cleanState();
      }
    },
    cleanState() {
      this.initialState = {
        cups: null,
        diag: null,
        causa: null,
        finalidad: null,
        servicio: '',
        tipoCita: '',
        tipoDiag: '',
      };
      this.show = true;
      this.selectedGroup = '';
      this.updateServices();
    },
    async submitForm() {
      try {
        const form = this.$root; // El elemento `<form>`
        const formData = new FormData(form); // Recopila todos los datos del formulario

        // No borrar, este permite ver los que retorna el formulario
        // const formDataObject = Object.fromEntries(formData.entries());

        const response = await fetch(form.action, {
          method: form.method,
          body: formData,
        });

        if (!response.ok) {
          throw new Error('Error al enviar el formulario');
        }

        const result = await response.json();

        if (result.errors) {
          this.errors = result.errors;
        } else {
          this.errors = {}; // Limpia los errores si no hay ninguno
          this.cleanState();
          this.$dispatch('modal-close');
          this.$dispatch('alert');
          this.$dispatch('reload');
        }
      } catch (error) {
        console.error('Error al enviar el formulario:', error);
        alert('Error al enviar el formulario.');
      }
    },
    async updateData() {
      if (!this.itemId) {
        console.error('El ID del elemento no está definido.');
        return;
      }

      try {
        const form = this.$root; // El elemento `<form>`
        const formData = new FormData(form); // Recopila todos los datos del formulario
        // console.log([...formData.entries()]);

        const url = `${this.updateUrl}/${this.itemId}`; // Ruta para la solicitud PATCH
        const response = await fetch(url, {
          method: 'POST',
          body: formData,
        });

        if (!response.ok) {
          throw new Error(`Error: ${response.statusText}`);
        }

        const result = await response.json();

        if (result.errors) {
          this.errors = result.errors; // Manejar errores de validación
        } else {
          this.errors = {}; // Limpiar errores si no hay
          // alert('Datos actualizados con éxito.');
          // this.cleanState();
          this.$dispatch('modal-close');
          this.$dispatch('alert');
          this.$dispatch('reload');
        }
      } catch (error) {
        console.error('Error al actualizar los datos:', error);
        alert('Error al actualizar los datos. Por favor, inténtelo de nuevo.');
      }
    },
  }));
});
