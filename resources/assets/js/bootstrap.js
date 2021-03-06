
window._ = require('lodash');

window.$ = window.jQuery = require('jquery')

window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
  jQuery.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': token.content
      }
  })
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}
