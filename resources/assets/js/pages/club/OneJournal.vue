<template>
    <main>
        <div class="sticky-header">
            <p>journal_id: {{ $route.params.id }}</p>
        </div>
        <figure class="image top-image">
            <progressive-img
                src="https://placehold.jp/1280x320.png"
                placeholder="https://placehold.jp/1280x320.png"
                :blur="30"
            />
        </figure>
        <div class="journal-container"
              v-for="journal in oneJournalData.journal" :key="journal.id"
              v-if="journal.id == $route.params.id">
            <div class="title-container">
                <h1 class="heading">{{ journal.title }}</h1>
            </div>
            
            <!--<div class="go-comment">-->
            <!--    <div class="go">-->
            <!--        <i class="far fa-heart"></i>-->
            <!--        <span>4</span>-->
            <!--    </div>-->
            <!--    <div class="comment">-->
            <!--        <i class="far fa-comment-dots"></i>-->
            <!--        <span>4</span>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="writter">
                <figure class="image">
                    <progressive-img
                        src="https://placehold.jp/48x48.png"
                        placeholder="https://placehold.jp/48x48.png"
                        :blur="30"
                    />
                </figure>
                <div class="name-date">
                    <div class="writter-name">
                        {{ journal.user_id }}
                    </div>
                    <div class="post-date">
                        {{ journal.activity_date }}
                    </div>
                </div>
            </div>
            <div class="content-point">
                <div class="strengths">
                    <span class="box-title">自慢ポイント</span>
                    <span>{{ journal.appeal }}</span>
                </div>
                <div class="next-actions">
                    <span class="box-title">改善ポイント</span>
                    <span>{{ journal.improvement }}</span>
                </div>
                <div class="next-actions">
                    <span class="box-title">ネクストアクション</span>
                    <span>{{ journal.nextaction }}</span>
                </div>
            </div>
            <div class="next-actions">
                <span class="box-title">フリー</span>
                <span>{{ journal.free }}</span>
                
                <!--<p>キャリアサマリ</p>-->
                <!--<p>・2013年 筑波大学卒業</p>-->
                <!--<p>・2013-2018年 ソフトバンク（株）で法人ソリューション営業に従事</p>-->
                <!--<p>・2018年6月退職後, 2ヶ月のアジア旅を経て, 現在GsAcademyにてプログラミング習得中.</p>-->
                <!--<br />-->
                <!--<p>▼ 2013年4月 ～ 2018年6月</p>-->
                <!--<p>ソフトバンク株式会社</p>-->
                <!--<p>法人事業統括　法人営業</p>-->
                <!--<br />-->
                
                <!--<p>■事業内容</p>-->
                <!--<p>ソフトバンクグループ内の法人事業</p>-->
                <!--<br />-->
                
                <!--<p>■担当業務</p>-->
                <!--<p>法人直販ソリューション営業 （中小～大企業まで・新規開拓/既存拡大）</p>-->
                <!--<br />-->
                
                <!--<p>■実績</p>-->
                <!--<p>・売上1000億超企業を中心とした法人顧客の課題解決に熱中</p>-->
                <!--<p>・IBM Watson表彰で,リリース時より2年連続アメリカ研修へ</p>-->
            </div>
            <!--<div class="comments">-->
            <!--    <div class="comment-container">-->
            <!--        <figure class="image">-->
            <!--            <progressive-img-->
            <!--                src="https://placehold.jp/48x48.png"-->
            <!--                placeholder="https://placehold.jp/48x48.png"-->
            <!--                :blur="30"-->
            <!--            />-->
            <!--        </figure>-->
            <!--        <div class="comment-warraper">-->
            <!--            <div class="commenter">-->
            <!--                黒澤信伍-->
            <!--            </div>-->
            <!--            <div class="comment-content">-->
            <!--                こめんと-->
            <!--            </div>-->
            <!--            <div class="comment-date">-->
            <!--                1ヶ月前-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="comment-container">-->
            <!--        <figure class="image">-->
            <!--            <progressive-img-->
            <!--                src="https://placehold.jp/48x48.png"-->
            <!--                placeholder="https://placehold.jp/48x48.png"-->
            <!--                :blur="30"-->
            <!--            />-->
            <!--        </figure>-->
            <!--        <div class="comment-wrapper">-->
            <!--            <div class="commenter">-->
            <!--                上のゆま-->
            <!--            </div>-->
            <!--            <div class="comment-content">-->
            <!--                こめんとこめんとこめんとこめんとこめんとこめんとこめんとこめんとこめんとこめんとこめんとこめんとこめんと-->
            <!--            </div>-->
            <!--            <div class="comment-date">-->
            <!--                1ヶ月前-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
        <sticky-footer></sticky-footer>
    </main>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
import { mapGetters } from 'vuex';

export default {
    name: 'OneJournal',
    components: {
        StickyFooter
    },
    data () {
        return {
        }
    },
    computed: {
        ...mapGetters({
            oneJournalData: 'club/fetchIndividualClubData',
        })
    },
};
</script>

<style scoped>
.image.top-image {
    margin-top: 50px;
}
.journal-container {
    margin: 16px 16px 64px;
}
.title-container {
    margin-bottom: 8px;
}
.go-comment {
    display: flex;
    margin-bottom: 8px;
}
.go {
    margin-right: 16px;
    color: #FF5A5F;
}
.comment {
    margin-bottom: 8px;
    color: #A9A9A9;
}
.heading {
    font-size: 36px;
    text-align: left;
    font-weight: bold;
    margin: 0;
}
.writter .image {
    width: 48px;
    height: 48px;
    margin-right: 16px;
}
.writter {
    display: flex;
    margin-bottom: 16px;
}
.writter-name,
.post-date
{
    color: #A9A9A9;
}
.strengths,
.next-actions
{
    position: relative;
    margin: 2em 0;
    padding: 0.5em 1em;
    border: solid 3px #5BCDFF;
    border-radius: 8px;
}
.strengths .box-title,
.next-actions .box-title
{
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 8px;
    line-height: 1;
    font-size: 16px;
    background: #FFF;
    color: #5BCDFF;
    font-weight: bold;
}
.strengths p,
.next-actions p {
    margin: 0; 
    padding: 0;
}
.content {
    margin: 16px 0;
    padding-bottom: 16px;
    border-bottom: 1px solid #DCDCDC;
}

.comment-container .image {
    width: 48px;
    height: 48px;
    margin-right: 16px;
}
.comment-container {
    display: flex;
    margin-bottom: 16px;
    font-size: 12px;
}
.comment-wrapper {
    width: 100%;
}
.comment-container .commenter {
    font-weight: bold;
}
.comment-date
{
    color: #A9A9A9;
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
    width: 50%;
    font-weight: bold;
    font-size: 12px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}


@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>