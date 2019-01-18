<template>
<main>
    <!--<the-header></the-header>-->
    <three-rule-brand></three-rule-brand>
    <!--<download-logo></download-logo>-->
    <register-login-logo></register-login-logo>
    <section class="top">
    </section>
    <the-footer></the-footer>
</main>
</template>


<script>
import TheHeader from '../components/TheHeader';
import ThreeRuleBrand from '../components/top/ThreeRuleBrand';
// import DownloadLogo from '../components/top/DownloadLogo';
import RegisterLoginLogo from '../components/top/RegisterLoginLogo';
import TheFooter from '../components/TheFooter';
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
.download_banner{
    width: 160px;
    height: auto;
    border-radius: 5px;
}
</style>