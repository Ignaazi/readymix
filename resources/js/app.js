import 'bootstrap';

// Import navbar scripts
import './navbar.js';

// Import section scripts
import { initContactForm } from './sections/contact.js';
import './sections/home.js';
import './sections/productlayanan.js';

document.addEventListener('DOMContentLoaded', () => {
    initContactForm();
});