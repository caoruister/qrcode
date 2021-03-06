/*
 |-------------------------------------------------------------------------------
 | routes.js
 |-------------------------------------------------------------------------------
 | Contains all of the routes for the application
 */

/**
 * Imports Vue and VueRouter to extend with the routes.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

/**
 * Extends Vue to use Vue Router
 */
Vue.use( VueRouter )

/**
 * Makes a new VueRouter that we will use to run all of the routes for the app.
 */
export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'app',
            component: Vue.component( 'App', require( './pages/App.vue' ).default )
        },
        {
            path: '/create',
            name: 'create',
            component: Vue.component( 'Create', require( './pages/Create.vue' ).default )
        },
    ]
});