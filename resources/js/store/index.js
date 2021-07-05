import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
    	mobileMenuOpen: false,
        isAuth: false,
        menuLinks: {
            main: {
                url : "",
                text: "Главная"
            },
            page1: {
                url : "test",
                text: "Страница 1"
            },
            page2 : {
                url : "/b",
                text: "Страница 2"
            },
            page3: {
                url : "/c",
                text: "Страница 3"
            }
        }
    },
    actions: {
        checkAuth(context, payload) {
            axios.get('/user-is-auth').then((response) =>{
                console.log('Ответ сервера', !!response.data);
                context.commit('SET_IS_AUTH', !!response.data);
                console.log('Юзер вошел?', context.state.isAuth);
            });
        },
        closeMobileMenu(context, payload){
            window.addEventListener('resize', function(event) {
                if(document.body.clientWidth >= 1024) {
                    console.log('экран больше 1024 пикселя')
                    context.commit('SET_MOBILE_BUTTON', false);
                }
            }, true);
        },
    },
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
