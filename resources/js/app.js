import 'bootstrap';

// Import navbar scripts
import './navbar.js';

// Import section scripts
import './sections/about.js';
import { initContactForm } from './sections/contact.js';
import './sections/home.js';
import './sections/productlayanan.js';

document.addEventListener('DOMContentLoaded', () => {
    initContactForm();
});