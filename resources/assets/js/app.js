/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('layout', require('./layouts/main').default);
Vue.component('login-form', require('./components/LoginForm').default);
Vue.component('global-errors', require('./components/GlobalErrors').default);

import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'babel-polyfill'

import Vuetify from 'vuetify'
import {VAlert} from 'vuetify/es5/directives'

import VueRouter from 'vue-router'
import store from './store'
import {sync} from 'vuex-router-sync'
import * as mutationTypes from './store/modules/mutation_types'

Vue.use(Vuetify)
Vue.use(VueRouter)

let httpStatus = require('http-status-codes');
window.axios.interceptors.response.use(response => response, e => {
    store.commit('http_errors/' + mutationTypes.UN_SET_RESPONSE)
    // do not handle validation error
    if (e.response.status === httpStatus.UNPROCESSABLE_ENTITY) {
        return Promise.reject(e.response);
    }

    store.commit('http_errors/' + mutationTypes.SET_RESPONSE, e.response)
});

// 0. If using a module system (e.g. via vue-cli), import Vue and VueRouter
// and then call `Vue.use(VueRouter)`.


// 1. Define route components.
// These can be imported from other files
const Foo = {template: '<div>foo</div>'}
const Bar = {template: '<div>bar</div>'}

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
    {path: '/foo', component: Foo},
    {path: '/bar', component: Bar}
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

const unsync = sync(store, router, {moduleName: 'RouteModule'})

const app = new Vue({
    router,
    store
}).$mount('#app');
