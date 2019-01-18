<template>
    <div class="download-container">
        <div class="download">
            <p class="download-text">まずはアプリを無料ダウンロード！</p>
            <div class="download-banner">
                <div class="ios">
                    <a href="https://itunes.apple.com/jp/app/id1247917096?l=ja&amp;mt=8" target="_blank"><img src="/images/banner_ios.png" alt="Download on the App Store"></a>
                </div>
                <div class="android">
                    <a href="https://play.google.com/store/apps/details?id=jp.co.bank.cash&amp;hl=ja" target="_blank"><img src="/images/banner_android.png" alt="GET IT ON Google Play"></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style scoped>
.download-container {
    position: relative;
}
.download {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
}
.download-text {
    text-align: center;
    margin-bottom: 8px;
}
.download-banner {
    display: flex;
}
.ios,
.android
{
    width: 200px;
    margin: 0px 4px;
}
</style>