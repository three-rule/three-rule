<template>
<main>
    <three-rule-brand></three-rule-brand>
    <section class="top">
        <h1 class="heading">RECRUIT</h1>
        <div class="recruit-container">
            <div class="recruit-heading-wrapper">
                <h1 class="recruit-heading">見たことのないサービスで新しい市場をつくる</h1>
                <p class="important-think">私たちが仕事をするうえで、大切にしている3つのことをお伝えします。ご興味を持っていただけましたら、ぜひご応募ください！</p>
            </div>
            <div class="recruit-vision-wrapper">
                <div class="vision-list">
                    <div class="vision-label">
                        VALUE.1
                    </div>
                    <div class="vision-title">
                        <span>狂ったようなことをしよう</span>
                    </div>
                    <div class="vision-text">
                        <p>誰かの真似をするな。あたりまえを疑え。</p>
                        <p>0か100か振り切らないと、新しいものはつくれない。</p>
                        <p>どうせやるなら、狂ったように振り切っていけ。</p>
                    </div>
                </div>
                <div class="vision-list">
                    <div class="vision-label">
                        VALUE.2
                    </div>
                    <div class="vision-title">
                        <span>すべては実験</span>
                    </div>
                    <div class="vision-text">
                        <p>やってみないとわからない。最初から完璧じゃなくていい。</p>
                        <p>ずっと机の上で考えているくらいなら、今すぐやろう。</p>
                        <p>やり切った先には、きっとまた別の景色が見えてくる。</p>
                    </div>
                </div>
                <div class="vision-list">
                    <div class="vision-label">
                        VALUE.3
                    </div>
                    <div class="vision-title">
                        <span>全力で働く</span>
                    </div>
                    <div class="vision-text">
                        <p>仕事に誇りを持ち、全力で働こう。</p>
                        <p>たとえ小さなことでも妥協せず、</p>
                        <p>一人ひとりが全力で取り組むことで、</p>
                        <p>やがて世の中に大きなインパクトを与えることができる。</p>
                    </div>
                </div>
            </div>
            <div class="recruit-job-wrapper">
                <h2 class="recruit-job-title">募集中の職種はこちら！</h2>
                <div class="columns is-multiline recruit-job">
                    <div class="column is-one-third-desktop recruit-list">
                        <a>
                            サーバーサイドエンジニア
                            <span><i class="fas fa-sign-in-alt"></i></span>
                        </a>
                    </div>
                    <div class="column is-one-third-desktop recruit-list">
                        <a>
                            iOSエンジニア
                            <span><i class="fas fa-sign-in-alt"></i></span>
                        </a>
                    </div>
                    <div class="column is-one-third-desktop recruit-list">
                        <a>
                            Androidエンジニア
                            <span><i class="fas fa-sign-in-alt"></i></span>
                        </a>
                    </div>
                    <div class="column is-one-third-desktop recruit-list">
                        <a>
                            マーケター
                            <span><i class="fas fa-sign-in-alt"></i></span>
                        </a>
                    </div>
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
.recruit-container {
}
.recruit-heading-wrapper{
}
.recruit-heading {
    margin-bottom: 20px;
    font-size: 50px;
    font-weight: bold;
    line-height: 1.5;
}
.important-think {
    margin-bottom: 60px;
    font-size: 22px;
    font-weight: bold;
    line-height: 2;
    letter-spacing: 0.05em;
}
.recruit-vision-wrapper {
    margin-bottom: 80px;
}
.vision-list:first-child {
    border-top: solid 1px #ddd;
}
.vision-list {
    border-bottom: solid 1px #ddd;
    padding: 30px 0;   
}
.vision-label {
    margin-bottom: 15px;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.05em;
}
.vision-title {
    margin-bottom: 15px;
    font-size: 34px;
    font-weight: bold;
    letter-spacing: 0.03em;
}
.vision-title span {
    border-bottom: solid 7px #fff500;
}
.vision-text {
    font-size: 18px;
    font-weight: bold;
    line-height: 2;
    letter-spacing: 0.03em;
}
.recruit-job-title {
    margin: 0 0 40px 0;
    font-size: 34px;
    letter-spacing: 0.03em;
    font-weight: bold;
}
.recruit-job {
    margin: 0px 8px;
}
.recruit-list {
    margin: 8px;
    border: solid 2px #000;
}
.recruit-list a {
    color: black;
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
    .recruit-heading {
        margin: 30px 0 15px 0;
        font-size: 24px;
    }
    .important-think {
        margin-bottom: 30px;
        font-size: 14px;
    }
    .vision-title {
        font-size: 22px;
    }
    .vision-text {
        font-size: 12px;
    }
    .recruit-job-title {
        font-size: 24px;
    }
    .recruit-list {
        margin: 8px auto;
    }
}

@media screen and (min-width: 1024px) {
    .top {
        width: 800px;
        margin: 48px auto 180px auto;
    }
}
</style>