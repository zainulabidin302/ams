<<<<<<< HEAD

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
=======
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './../views/App.vue'
import About from './../views/About.vue'
import User from './../views/User.vue'

// import Welcome from './views/Welcome'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/app', component: App, children: [
            {path: 'user', component: User},
        ] }
    ],
});

const app = new Vue({
    el: '#app',
    router,
    
});
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46
