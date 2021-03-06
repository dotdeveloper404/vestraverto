/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

// window.pusher = new Pusher("c1cbf8607a27105debdf", {
//     cluster: "eu"
// });

// window.Pusher = require("pusher-js");

// window.Echo = new Echo({
//     broadcaster: "pusher",
//     key: "c1cbf8607a27105debdf",
//     cluster: "eu",
//     encrypted: false
// });

// window.pusher = new Pusher("c1cbf8607a27105debdf", {
//     cluster: "eu",
//     authEndpoint: `${process.env.VUE_APP_API_URL}/authorize`,
//     auth: {
//         headers: {
//             Authorization: `Bearer ${store.state.token}`
//         }
//     }
// });

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            .split(".")[0],
        files(key).default
    )
);
// Vue.component("mainchat", require("./components/MainChat.vue"));
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
