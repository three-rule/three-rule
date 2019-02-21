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
import TheHeader from '../../components/presentations/common/header/top/TheHeader';
import ThreeRuleBrand from '../../components/presentations/common/logo/ThreeRuleBrand';
// import DownloadLogo from '../../components/top/DownloadLogo';
import RegisterLoginLogo from '../../components/presentations/common/logo/RegisterLoginLogo';
import TheFooter from '../../components/presentations/common/footer/top/TheFooter';
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