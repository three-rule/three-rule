<template>
    <div>
        <div class="sticky-header">
            <p>チーム方針</p>
        </div>
        <div class="club-rules">
            <div class="club-rules-container">
                <h3 class="club-rules-heading">チーム方針</h3>
                <div class="club-strategy">
                    <div class="club-strategy">
                        <div class="main-strategy">
                            誰かの真似をするな。あたりまえを疑え。0か100か振り切らないと、新しいものはつくれない。どうせやるなら、狂ったように振り切っていけ。
                        </div>
                    </div>
                </div>
            </div>
            <div class="club-rules-container">
                <h3 class="club-rules-heading">ルール</h3>
                <div class="club-3rule">
                    <div class="square-wrapper">
                        <div class="spacer"></div>
                        <div class="content">
                            <div class="rule-number">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="rule-text">
                        敬語禁止。でも、リスペクトは大事
                    </div>
                </div>
                <div class="club-3rule">
                    <div class="square-wrapper">
                        <div class="spacer"></div>
                        <div class="content">
                            <div class="rule-number">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="rule-text">
                        批判禁止。できない理由を探さず、できる方法を考える！
                    </div>
                </div>
                <div class="club-3rule">
                    <div class="square-wrapper">
                        <div class="spacer"></div>
                        <div class="content">
                            <div class="rule-number">
                                3
                            </div>
                        </div>
                    </div>
                    <div class="rule-text">
                        とにかく考えて行動する！
                    </div>
                </div>
            </div>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
        }
    }
};
</script>

<style scoped>
.club-rules-heading
{
    position: relative;
    display: inline-block;
    padding-bottom: 8px;
    letter-spacing: 2px;
    font-weight: bold;
    font-size: 14px;
    
}
.club-rules-heading::before,
.club-rules-heading::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  border-bottom: 1px solid #999;
}
.club-rules-heading::before {
  bottom: 5px;
}
.club-rules {
    margin: 64px 0px 64px;
    overflow: auto;
}
.club-rules-container {
    margin: 16px 16px;
}
.club-strategy {
    margin: 16px 0px 16px;
}
.club-strategy {
    width: 100%;
}
.main-strategy {
    width: 100%;
}

.club-3rule {
    display: flex;
    width: 100%;
    margin: 16px 0px 16px;
}
.rule-text {
    display: inline-block;
    vertical-align: middle;
    width: 100%;
}
.square-wrapper {
    position: relative;
    width: 10%;
    height: 10%;
    margin-right: 16px;
}
.spacer {
    width: 100%;
    padding-bottom: 100%;
}
.content {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #08B6FF;
    border-radius: 50%;
}
.rule-number {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    color: white;
    font-size: 14px;
}

.sticky-header {
    width: 100%;
    height: 50px;
    line-height: 16px;
    position: fixed;
    top: 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    background-color: #FCFCFC;
    z-index: 999;
}
.sticky-header p {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    font-weight: bold;
    font-size: 16px;
}


@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>
