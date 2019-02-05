<template>
<main>
    <div class="sticky-header">
        <p>お知らせ</p>
    </div>
    <section class="top">
        <h1 class="heading">お知らせ</h1>
        <div class="news-container">
            <div class="news-list-wrapper">
                <div class="news-list">
                    <div class="news-heading">
                        <div class="news-list-title">
                            2019.01.17
                        </div>
                    </div>
                    <div class="news-list-text">
                        
                        <div v-for="status in informationData.club_member" :key="status.id">
                            <p>
                                {{ status.join_status }}
                            </p>
                        </div>
                        
                        <p>
                            上野ゆうまさんから参加リクエストがあります。
                        </p>
                        <div class="news-list-btn">
                            <a>
                                承認
                            </a>
                            <a class="btn-delete">
                                削除
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="news-list">-->
                <!--    <div class="news-heading">-->
                <!--        <div class="news-list-title">-->
                <!--            2019.01.17-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="news-list-text">-->
                <!--        <p>-->
                <!--            明日監督から重大発表があります。-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <sticky-footer></sticky-footer>
</main>
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
    computed: {
        ...mapGetters({
            informationData: 'club/fetchIndividualClubData'
        }),
    },
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
  border-bottom: 2px solid #08B6FF;
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
    margin-bottom: 8px;
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
.news-list-text p {
    margin-bottom: 8px;
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
.news-list-btn .btn-delete {
    background-color: #FF5A5F;
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
    .top {
        margin: 30px 16px 120px 16px;
    }
    .heading {
        font-size: 30px;
    }
    .news-list-wrapper {
        max-width: 340px;
    }
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}

@media screen and (min-width: 1024px) {
    .top {
        width: 800px;
        margin: 48px auto 180px auto;
    }
}
</style>