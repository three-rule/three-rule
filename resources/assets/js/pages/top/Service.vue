<template>
<main>
    <three-rule-brand></three-rule-brand>
    <section class="top">
        <h1 class="heading">SERVICE</h1>
        <div class="service-container">
            <div class="service-list-wrapper">
                <div class="service-list">
                    <a href="">
                        img
                        <!--<figure class="image">-->
                        <!--    <progressive-img :src="imageMoney" />-->
                        <!--</figure>-->
                    </a>
                </div>
                <div class="service-list-btn">
                    <a href="">
                        3 rule
                        <span><i class="fas fa-sign-in-alt"></i></span>
                    </a>
                </div>
                <div class="service-list-catchcopy">
                    "没頭"がみつかる部活アプリ「3rules」
                </div>
            </div>
            <div class="service-list-wrapper">
                <div class="service-list">
                    <a href="">
                        img
                        <!--<figure class="image">-->
                        <!--    <progressive-img :src="imageMoney" />-->
                        <!--</figure>-->
                    </a>
                </div>
                <div class="service-list-btn">
                    <a href="">
                        CASH
                        <span><i class="fas fa-sign-in-alt"></i></span>
                    </a>
                </div>
                <div class="service-list-catchcopy">
                    目の前のアイテムが 一瞬でキャッシュに変わるアプリ
                </div>
            </div>
        </div>
    </section>
    <sticky-footer></sticky-footer>
</main>
</template>


<script>
import ThreeRuleBrand from '../../components/top/ThreeRuleBrand';
import StickyFooter from '../../components/top/StickyFooter';
export default {
    components: {
        ThreeRuleBrand,
        StickyFooter
    },
    data () {
        return {
            imageMoney: '/images/money.jpg',
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

.service-list-wrapper {
    display: inline-block;
    vertical-align: middle;
    width: 380px;
    margin-bottom: 36px;
    margin-right: 16px;
}
.service-list {
    width: 100%;
    height: 260px;
    border: solid 1px #ddd;
    margin-bottom: 30px;
    color: transparent;
    text-align: center;
}
.service-list-btn a {
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
.service-list-catchcopy {
    font-size: 14px;
    font-weight: bold;
}

@media screen and (max-width: 767px) {
    .top {
        margin: 80px 15px 140px 15px;
    }
    .heading {
        font-size: 30px;
    }
    .service-list-wrapper {
        max-width: 340px;
    }
    .service-list {
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