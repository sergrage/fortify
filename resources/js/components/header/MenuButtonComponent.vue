<template>
<div>
    <div @click="openMenu()" :class="'header__menuIcon lg:hidden block ' + (!this.$store.state.mobileMenuOpen ? '' : 'header__menuIcon--close')">
        <div class="header__menuIcon__middle"></div>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return {
            toggleBtn: true,
        }
    },
    computed: {

    },
    methods: {
        openMenu() {
            // this.toggleBtn =! this.toggleBtn;
            this.$store.commit('SET_MOBILE_BUTTON', !this.$store.state.mobileMenuOpen);
            console.log(this.$store.state.mobileMenuOpen);
        }
    }
}
</script>

<style scoped>

</style>
