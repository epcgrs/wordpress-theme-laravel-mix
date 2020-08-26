require('./bootstrap');

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

($ => {
    $(() => {
        // Jquery Functions
    });
})(jQuery);

import Vue from 'vue';

Vue.component('example', require('./components/Example.vue').default);

const app = new Vue({
    el: '#app'
});
