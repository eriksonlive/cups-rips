/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import Alpine from 'alpinejs';
import './js/formHandler.js';
import './js/formChoices.js';
import './js/dataTable.js';
// import TomSelect from 'tom-select';

window.Alpine = Alpine;

Alpine.start();
