<template>
    <div>
        <div class="sticky-header">
            <p>マイページ</p>
        </div>
        <div class="profile">
            <div class="image-container">
                <figure class="image">
                    <progressive-img
                        src="http://placehold.jp/100x100.png"
                        placeholder="http://placehold.jp/100x100.png"
                        :blur="30"
                    />
                </figure>
            </div>
            <div class="main-profile">
                <div class="heading">
                    黒澤信五
                </div>
                <div class="favorite-motto">
                    開発は新薬創出のごとくすべし
                </div>
            </div>
            <div class="goal-container">
                <div class="heading">
                    目標
                </div>
                <div class="long-term-goal">
                    <div class="left-item">
                        長期目標
                    </div>
                    <div class="right-item">
                        開発は新薬創出のごとくすべし開発は新薬創出のごとくすべし
                    </div>
                </div>
                <div class="medium-term-goal">
                    <div class="left-item">
                        中期目標
                    </div>
                    <div class="right-item">
                        開発は新薬創出のごとくすべし開発は新薬創出のごとくすべし
                    </div>
                </div>
                <div class="short-term-goal">
                    <div class="left-item">
                        短期目標
                    </div>
                    <div class="right-item">
                        開発は新薬創出のごとくすべし開発は新薬創出のごとくすべし
                    </div>
                </div>
                <a to="/" class="is-block btn-edit-goal">
                    <span>目標を修正する</span>
                </a>
            </div>
            <div class="journal-container">
                <div class="heading">
                    日誌
                </div>
                <div class="journals">
                    <router-link :to="{ name: 'OneJournal', params: { id: 1 } }" class="journal">
                        <p>
                            <span>2019.01.20</span><br />
                            <span>title</span>
                        </p>
                    </router-link>
                    <router-link :to="{ name: 'OneJournal', params: { id: 2 } }" class="journal">
                        <p>
                            <span>2019.01.20</span><br />
                            <span>title</span>
                        </p>
                    </router-link>
                    <router-link :to="{ name: 'OneJournal', params: { id: 3 } }" class="journal">
                        <p>
                            <span>2019.01.20</span><br />
                            <span>title</span>
                        </p>
                    </router-link>
                    <router-link :to="{ name: 'OneJournal', params: { id: 4 } }" class="journal">
                        <p>
                            <span>2019.01.20</span><br />
                            <span>title</span>
                        </p>
                    </router-link>
                </div>
            </div>
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
            id: 3
        }
    },
    created() {
      this.start()
    },
    computed: {
        ...mapGetters({
            mypageData: 'mypage/mypageData',
            doneMypageDataCount: 'mypage/doneMypageDataCount',
            // fetchIndividualMypageData: 'mypage/fetchIndividualMypageData',
            filterMypage: 'mypage/filterMypage'
        }),
    },
    methods: {
        ...mapActions({
            start: 'mypage/getMypage'
        }),
    }
};
</script>

<style scoped>
.profile {
    margin: 64px 16px 64px;
}
.image-container {
    padding: 16px;
    text-align: center;
}
.main-profile {
    padding: 32px;
    text-align: center;
}
.goal-container {
    width: 100%;
    margin-bottom: 32px;
}
.heading
{
    text-align: center;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 16px;
}
.long-term-goal,
.medium-term-goal,
.short-term-goal
{
    display: flex;
    width: 100%;
    margin: 16px 0px 16px;
}
.left-item {
    width: 25%;
}
.right-item {
    width: 75%;
}
.left-item
{
  position: relative;
  display: inline-block;
  padding-bottom: 4px;
  letter-spacing: 2px;
  color: black;
}
.left-item::after {
  content: '';
  display: block;
  height: 4px;
  width: 85%;
  border-bottom: 2px solid #08B6FF;
}
.btn-edit-goal {
    width: 100%;
    text-align: center;
    margin-top: 24px;
    padding: 8px;
    color: white;
    background-color: #08B6FF;
    border: 2px solid #08B6FF;
    border-radius: 4px;
}
.journal-container {
    width: 100%;
    margin-bottom: 32px;
}
.journals {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
}
.journal {
    position: relative;
    width: 30%;
    height: 100px;
    padding: 8px;
    text-align: center;
    font-size: 12px;
    border: 2px solid #08B6FF;
    border-radius: 4px;
    margin: 8px 0;
}
.journal p {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    color: #08B6FF;
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