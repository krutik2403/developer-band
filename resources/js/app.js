/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import { router } from './router.js'

//Toast Notification
import toast from 'vue-toast-notification';
import 'vue-toast-notification/dist/index.css';
Vue.use(toast);

import Header from './components/layout/Header.vue'
import Footer from './components/layout/Footer.vue'
Vue.component('component-header', Header)
Vue.component('component-footer', Footer)

Vue.component('app-component', require('./components/layout/App.vue').default);

const app = new Vue({
    router,
    toast,
    el: '#app',
});
