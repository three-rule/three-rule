<template>
    <div>
        <figure class="image">
            <progressive-img
                src="http://placehold.jp/1280x320.png"
                placeholder="http://placehold.jp/1280x320.png"
                :blur="30"
            />
        </figure>
        <div class="club-heading">
            <h1 class="club-name">県立黒澤高校野球部</h1>
            <router-link to="/member">
                <h2 class="club-member">
                    部員数
                    <span>10</span>
                    人
                </h2>
            </router-link>
            <span>
                <router-link to="/info">
                    <i class="fas fa-bell"></i>
                </router-link>
                <div class="info-tags">
                    1
                </div>
            </span>
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
        <div class="sticky-side-bar">
            <ul>
                <li>
                    <router-link to="/strategy">
                        <i class="fas fa-align-justify"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/discussion">
                        <i class="far fa-comments"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/menu">
                        <i class="fas fa-ellipsis-h"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/calendar">
                        <i class="fas fa-calendar-alt"></i>
                    </router-link>
                </li>
                <li>
                    <router-link to="/journal">
                        <i class="fas fa-blog"></i>
                    </router-link>
                </li>
            </ul>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
import { mapActions, mapGetters } from 'vuex';
import axios  from 'axios'

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
        }
    },
    created() {
      this.start()
    },
    computed: {
        ...mapGetters({
            club: 'club/clubData',
            // individualClubData: 'club/fetchIndividualclubData',
            // doneClubMemberCount: 'club/doneClubMemberCount'
        }),
    },
    methods: {
        ...mapActions({
            start: 'club/getClub'
        }),
    }
};
</script>

<style scoped>
.fas.fa-bell {
    color: #FFCE08;
}
.info-tags {
    display: inline-block;
}



.club-heading {
    padding: 8px 8px 16px;
    text-align: center;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.club-name {
    padding: 4px;
    font-weight: bold;
    font-size: 24px;
}
.club-member {
    display: inline-block;
    padding: 4px;
    font-size: 16px;
}

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
    margin: 16px 0px 64px;
    overflow: auto;
}
.club-rules-container {
    margin: 16px 16px;
}
.club-strategy {
    margin: 16px 0px 16px;
}
.club-strategy {
    width: 80%;
}
.main-strategy {
    width: 120%;
}

.club-3rule {
    display: flex;
    width: 100%;
    margin: 16px 0px 16px;
}
.rule-text {
    display: inline-block;
    vertical-align: middle;
    width: 70%;
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

.sticky-side-bar {
    display: flex;
    width: 10%;
    height: 300px;
    line-height: 16px;
    position: fixed;
    right: 0;
    bottom: 50px;
}
.sticky-side-bar ul {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.sticky-side-bar li {
    font-size: 20px;
    color: #5BCDFF;
}
.sticky-side-bar ul li i {
    color: #5BCDFF;
}
</style>