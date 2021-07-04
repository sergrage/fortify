import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
    	mobileMenuOpen: false,
        isAuth: false
    },
    actions: {
        checkAuth(context, payload) {
            axios.get('/user-is-auth').then((response) =>{
                console.log('Ответ сервера', !!response.data);
                context.commit('SET_IS_AUTH', !!response.data);
                console.log('Юзер вошел?', context.state.isAuth);
            });
    }},
    getters: {

    },
    mutations: {
        SET_MOBILE_BUTTON(state, payload) {
            state.mobileMenuOpen = payload;
        },
        SET_IS_AUTH(state, payload) {
            state.isAuth = payload;
        },

    }
})
