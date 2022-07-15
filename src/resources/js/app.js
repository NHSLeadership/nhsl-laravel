/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Alpine from 'alpinejs'
window.Alpine = Alpine;

require('./quill.js');
window.Quill = require('Quill');

Alpine.start()
