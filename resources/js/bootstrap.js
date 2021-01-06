window._ = require("lodash");

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Echo from "laravel-echo";

window.Pusher = require("pusher-js");

window.Pusher.logToConsole = true;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "45eb778181b54f8032c2",
    cluster: "eu",
    encrypted: true
    // authEndpoint: "/broadcasting/auth"
});

//import Pusher from "pusher-js";

// window.pusher = new Pusher("c1cbf8607a27105debdf", {
// cluster: "eu"
// authEndpoint: `http://vestraverto.test/authorize_group`,
// auth: {
//     headers: {
//         "X-CSRF-Token": document
//             .querySelector('meta[name="csrf-token"]')
//             .getAttribute("content")
//         //Authorization: `Bearer ${store.state.token}`
//     }
// }
// });

/**
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * Echo exposes an expressive API for subscribing to channels and listening
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
