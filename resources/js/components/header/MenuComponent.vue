<template>
    <div>
        <div class="container mx-auto flex flex-wrap items-center">
            <div class="brand__wrapper">
                <a class="barnd__link" href="#">
                    <span class="text-2xl pl-2"><i class="em em-grinning"></i> Название бренда</span>
                </a>
            </div>
            <div class="hidden lg:flex pt-2 content-center w-1/2 lg:w-5/12">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li v-for="link in menuLinks" class="mr-3 xl:mr-12">
                        <a :href="link.url" :class="menuLinkStyle(link.url)">{{link.text}}</a>
                    </li>
                </ul>
            </div>
            <transition name="slide-fade">
            <div v-if="menuOpen" class="block bg-white fixed top-0 left-0 z-50 w-60 h-full p-0 pt-16 overflow-x-hidden" style="border-right: 3px solid #1f2937;">
                <ul class="w-full p-1.5">
                    <li class="block relative z-10">
                        <a class="uppercase w-full text-black leading-9 h-9 pl-3 bg-gray-200 hover:bg-gray-100 duration-500 ease-in-out mobile-menu-link" href="/">Главная</a>
                    </li>
                    <li class="block relative z-10">
                        <a class="uppercase w-full text-black leading-9 h-9 pl-3 bg-gray-200 hover:bg-gray-100 duration-500 ease-in-out mobile-menu-link" href="#">Страница 1</a>
                    </li>
                    <li class="block relative z-10">
                        <a class="uppercase w-full text-black leading-9 h-9 pl-3 bg-gray-200 hover:bg-gray-100 duration-500 ease-in-out mobile-menu-link" href="#">Страница 2</a>
                    </li>
                    <li class="block relative z-10">
                        <a class="uppercase w-full text-black leading-9 h-9 pl-3 bg-gray-200 hover:bg-gray-100 duration-500 ease-in-out mobile-menu-link" href="#">Страница 3</a>
                    </li>

                    <li v-if="isAuth" class="block relative z-10 bg-gray-800 text-white mt-5">
                        <a class="uppercase w-full leading-9 h-9 pl-3  hover:bg-gray-600 duration-500 ease-in-out mobile-menu-link" href="/register">Зарегстрироваться</a>
                    </li>
                    <li v-if="isAuth" class="block relative z-10 bg-gray-800 text-white">
                        <a class="uppercase w-full leading-9 h-9 pl-3 hover:bg-gray-600 duration-500 ease-in-out mobile-menu-link" href="/login">Войти <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                    <li v-if="!isAuth" class="block relative z-10 bg-gray-800 text-white mt-5">
                        <a class="uppercase w-full leading-9 h-9 pl-3 hover:bg-gray-600 duration-500 ease-in-out mobile-menu-link" href="/logout">Выйти</a>
                    </li>

                </ul>
            </div>
            </transition>
        </div>

    </div>
</template>

<script>
export default {
    props: ['currentUrl'],
    data(){
        return {

        }
    },
    computed: {
        menuLinks(){
            return this.$store.state.menuLinks;
        },
        menuOpen() {
            return this.$store.state.mobileMenuOpen;
        },
        isAuth() {
            return !this.$store.state.isAuth;
        }
    },
    methods: {
        menuLinkStyle($url) {
            // || this.currentUrl === 'login' || this.currentUrl == 'register'
            if(this.currentUrl === $url ) {
                return 'menu-link__active';
            }
            if($url.length > 1) {
                return (this.currentUrl.indexOf($url) !== -1 && this.currentUrl !== '/') ? 'menu-link__active' : 'menu-link';
            }
            return 'menu-link';
        },
    },
    created() {

    }
}
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all .8s ease;
}
.slide-fade-leave-active {
    transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active до версии 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
}

.mobile-menu-link {
    display: block;
    border-bottom: 1px solid #9ca3af;
}
</style>
