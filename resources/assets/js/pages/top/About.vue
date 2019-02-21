<template>
<main>
    <three-rule-brand></three-rule-brand>
    <section class="top">
        <h1 class="heading">ABOUT</h1>
        <div class="about-container">
            <div class="about-heading-wrapper">
                <p class="about-text">
                    お金ってなんだろう。<br/>
                    お金があるからできることもあれば、<br/>
                    今ちょっとだけお金が足りなくて、<br/>
                    あきらめてしまうこともある。<br/>
                    
                    私たちは、お金に関する問題を<br/>
                    今までにない新しい方法で解決し、<br/>
                    すべての人の可能性を広げる<br/>
                    お手伝いがしたいと考えています。<br/>
                </p>
            </div>
            <div class="about-content-wrapper">
                <div class="about-list">
                    <p class="left-item">社名</p>
                    <p class="right-item">株式会社3rules</p>
                </div>
                <div class="about-list">
                    <p class="left-item">英文社名</p>
                    <p class="right-item">3rules, inc</p>
                </div>
                <div class="about-list">
                    <p class="left-item">代表者名</p>
                    <p class="right-item">代表取り締まられ役兼CEO 黒澤信伍</p>
                </div>
                <div class="about-list">
                    <p class="left-item">設立</p>
                    <p class="right-item">2019年4月20日</p>
                </div>
                <div class="about-list">
                    <p class="left-item">事業内容</p>
                    <p class="right-item">
                        インターネットビジネスの企画・開発・運営
                    </p>
                </div>
                <div class="about-list">
                    <p class="left-item">所在地</p>
                    <p class="right-item">
                        107-0061 東京都港区北青山3丁目-5-6 青朋ビル2F 
                    </p>
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
.about-container {
}
.about-heading-wrapper{
}
.about-text {
    margin-bottom: 60px;
    font-size: 22px;
    font-weight: bold;
    line-height: 2;
    letter-spacing: 0.05em;
}
.about-list:first-child {
    border-top: solid 1px #ddd;
}
.about-list {
    display: flex;
    width: 100%;
    font-size: 18px;
    font-weight: bold;
    line-height: 2;
    letter-spacing: 0.03em;
    border-bottom: solid 1px #ddd;
    padding: 16px 0;   
}
.left-item {
    width: 30%;
}
.right-item {
    width: 70%;
}
.about-list-btn a {
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
    .about-text {
        margin-bottom: 30px;
        font-size: 16px;
        font-weight: bold;
    }
    .about-list {
        font-size: 14px;
        line-height: 1.5;   
    }
}

@media screen and (min-width: 1024px) {
    .top {
        width: 800px;
        margin: 48px auto 180px auto;
    }
}
</style>