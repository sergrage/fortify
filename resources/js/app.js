window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue'
import store from './store'


Vue.component('test-component', require('./components/TestComponent.vue').default);


let app = new Vue ({
    el: '#app',
    store,
    created() {

	},
    mounted(){

    }
});