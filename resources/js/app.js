require('./bootstrap');

import Vue from 'vue';

Vue.component('example', require('./components/Example.vue').default);

const app = new Vue({
    el: '#app'
});