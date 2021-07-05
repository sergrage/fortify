window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue'
import store from './store'


Vue.component('menubtn-component', require('./components/header/MenuButtonComponent.vue').default);
Vue.component('menu-component', require('./components/header/MenuComponent.vue').default);


let app = new Vue ({
    el: '#app',
    store,
    created() {
        this.$store.dispatch("checkAuth")
        this.$store.dispatch("closeMobileMenu")
	},
    mounted(){
    	
    }
});
