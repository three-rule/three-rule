<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
import TheHeader from './components/presentations/common/header/top/TheHeader.vue';
import TheFooter from './components/presentations/common/footer/top/TheFooter.vue';
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

<style lang="scss" scoped>
</style>