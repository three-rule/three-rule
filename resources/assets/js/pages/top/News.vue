<template>
<main>
    <three-rule-brand></three-rule-brand>
    <section class="top">
        <h1 class="heading">NEWS</h1>
        <div class="news-container">
            <div class="news-list-wrapper">
                <div class="news-list">
                    <div class="news-heading">
                        <div class="news-list-title">
                            2019.01.17
                        </div>
                        <div class="news-list-label">
                            3 rule
                        </div>
                    </div>

                    <div class="news-list-text">
                        <a href="" target="_blank" class="news_link">株式会社3 rule登記完了。正式に黒澤信伍が、代表取り締まられ役兼CEOに就任。</a>
                    </div>
                </div>
                <div class="news-list">
                    <div class="news-heading">
                        <div class="news-list-title">
                            2018.12.21
                        </div>
                        <div class="news-list-label">
                            3 rule
                        </div>
                    </div>

                    <div class="news-list-text">
                        <a href="https://cash.jp/media_kit/cash_press_release_181221.pdf" target="_blank" class="news_link">平成最後の大掃除キャンペーンを開催</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <sticky-footer></sticky-footer>
</main>
</template>


<script>
import ThreeRuleBrand from '../../components/presentations/common/logo/ThreeRuleBrand';
import StickyFooter from '../../components/presentations/common/footer/top/StickyFooter';
export default {
    components: {
        ThreeRuleBrand,
        StickyFooter
    },
    data () {
        return {
        }
    }
};
</script>

<style scoped>
.heading
{
  position: relative;
  display: inline-block;
  margin: 30px auto 30px;
  padding-bottom: 15px;
  letter-spacing: 2px;
  font-size: 48px;
  font-weight: bold;
  color: black;
}
.heading::after {
  content: '';
  display: block;
  height: 4px;
  width: 120%;
  border-bottom: 2px solid black;
}

.news-heading {
    margin-bottom: 8px;
}
.news-list-wrapper {
    display: block;
    width: 100%;
    margin-bottom: 36px;
    margin-right: 16px;
}
.news-list:first-child {
    border-top: solid 1px #ddd;
}
.news-list {
    width: 100%;
    border-bottom: solid 1px #ddd;
    padding: 16px 0px 14px;
    text-align: left;
}
.news-list-title {
    padding: 4px 0px;
    font-weight: bold;
    display: inline-block;
    vertical-align: middle;
    margin-right: 16px;
}
.news-list-label {
    display: inline-block;
    vertical-align: middle;
    padding: 4px 12px;
    background-color: #5BCDFF;
    font-size: 12px;
    border-radius: 2px;
    color: white;
}
.news-list-text a {
    color: black;
    font-weight: bold;
}

.news-list-btn a {
    display: inline-block;
    padding: 5px 15px;
    background-color: #5BCDFF;
    font-size: 16px;
    line-height: 1.7;
    letter-spacing: 0.05em;
    margin-bottom: 8px;
    border-radius: 2px;
    color: white;
}

@media screen and (max-width: 767px) {
    .top {
        margin: 80px 15px 140px 15px;
    }
    .heading {
        font-size: 30px;
    }
    .news-list-wrapper {
        max-width: 340px;
    }
    .news-list {
        height: 140px;
    }
}

@media screen and (min-width: 1024px) {
    .top {
        width: 800px;
        margin: 48px auto 180px auto;
    }
}
</style>