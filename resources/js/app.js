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