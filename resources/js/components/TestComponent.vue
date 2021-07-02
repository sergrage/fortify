<template>
<div>
    <div @click="toggleBtn =! toggleBtn" :class="'header__menuIcon lg:hidden block ' + (toggleBtn ? '' : 'header__menuIcon--close')">
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
        // toggleBtnClass(){
        //     console.log(this.toggleBtn);
        //     if(this.toggleBtn) {
        //         return 'header__menuIcon--close lg:hidden block';
        //     } 
        //     return  'header__menuIcon lg:hidden block';
        // }
    },
    methods: {

    }
}
</script>

<style scoped>

</style>