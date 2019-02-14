<template>
    <div>
        <router-view></router-view>
    </div>
</template>
<script>
import TheHeader from './components/TheHeader.vue';
import TheFooter from './components/TheFooter.vue';
import http from './services/http'

// import RadiusMenu from './components/RadiusMenu.vue';
// import { mapActions } from 'vuex';
// import http from './services/http';

export default {
    components: {
        TheHeader,
        TheFooter,
    },
    created() {
        http.init()
    }
}
</script>

<style scoped>
body {
    font-family: "Rubik", "Helvetica", "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック体", "游ゴシック", "Yu Gothic", YuGothic, "a-otf-midashi-go-mb31-pr6n", "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
    color: #484848;
    box-sizing:  border-box;
    overflow: auto;
    height: 100%;
}
body.open {
    overflow: hidden;
}
</style>