<template>
<main>
    <!--<the-header></the-header>-->
    <three-rule-brand></three-rule-brand>
    <!--<download-logo></download-logo>-->
    <register-login-logo></register-login-logo>
    <section class="top">
        <router-link to="/club">Clubページへ</router-link>
    </section>
    <the-footer></the-footer>
</main>
</template>


<script>
import TheHeader from '../../components/TheHeader';
import ThreeRuleBrand from '../../components/top/ThreeRuleBrand';
// import DownloadLogo from '../../components/top/DownloadLogo';
import RegisterLoginLogo from '../../components/top/RegisterLoginLogo';
import TheFooter from '../../components/TheFooter';
export default {
    components: {
        TheHeader,
        ThreeRuleBrand,
        // DownloadLogo,
        RegisterLoginLogo,
        TheFooter
    },
    data () {
        return {
        }
    }
};
</script>

<style scoped>
</style>