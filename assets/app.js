/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import Alpine from 'alpinejs';
import TomSelect from 'tom-select';

window.Alpine = Alpine;

Alpine.start();

// document.addEventListener('DOMContentLoaded', () => {
//   const select = document.querySelector('#select-state');
//   const url = select.getAttribute('data-url');
//   const selectedValue = select.getAttribute('data-selected-value');

//   let tomSelectInstance;

//   tomSelectInstance = new TomSelect(select, {
//     valueField: 'id',
//     labelField: 'text',
//     searchField: 'text',
//     load: (query, callback) => {
//       if (!query.length) return callback();

//       fetch(`${url}?q=${encodeURIComponent(query)}`)
//         .then((response) => response.json())
//         .then((data) => {
//           console.log(data);

//           return callback(data);
//         })
//         .catch(() => callback());
//     },
//     placeholder: 'Buscar descripción...',
//     maxOptions: 20, // Máximo de opciones a mostrar
//   });

//   if (selectedValue) {
//     fetch(`${url}?q=${encodeURIComponent(selectedValue)}`)
//       .then((response) => response.json())
//       .then((data) => {
//         console.log(data);
//         const selectedOption = data.find((item) => item.id === selectedValue);
//         if (selectedOption) {
//           tomSelectInstance.addOption(selectedOption); // Agregar opción manualmente
//           tomSelectInstance.setValue(selectedValue); // Setear el valor
//         }
//       })
//       .catch((error) =>
//         console.error('Error cargando valor predeterminado:', error)
//       );
//   }
// });
