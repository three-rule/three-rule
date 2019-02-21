<template>
    <main>
        <div class="sticky-header">
            <p>日誌を書く</p>
        </div>
        <!--<figure class="image top-image">-->
        <!--    <progressive-img-->
        <!--        src="https://placehold.jp/1280x320.png"-->
        <!--        placeholder="https://placehold.jp/1280x320.png"-->
        <!--        :blur="30"-->
        <!--    />-->
        <!--</figure>-->
        <br />
        <br />
        <br />
        <br />
        
        <div class="journal-container">
            <div class="writter">
                <!--<figure class="image">-->
                <!--    <progressive-img-->
                <!--        src="https://placehold.jp/48x48.png"-->
                <!--        placeholder="https://placehold.jp/48x48.png"-->
                <!--        :blur="30"-->
                <!--    />-->
                <!--</figure>-->
                <div class="name-date">
                    <div class="writter-name">
                        <input type="hidden" >
                    </div>
                    <div class="post-date">
                        <span>活動日</span>
                        <input type="date" v-model="activity_date">
                    </div>
                </div>
            </div>
            <div class="content-point">
                <div class="strengths">
                    <span class="box-title">タイトル</span>
                    <input type="text" v-model="title">
                </div>
                <div class="strengths">
                    <span class="box-title">自慢ポイント</span>
                    <input type="text" v-model="appeal">
                </div>
                <div class="next-actions">
                    <span class="box-title">改善ポイント</span>
                    <input type="text" v-model="improvement">
                </div>
                <div class="next-actions">
                    <span class="box-title">ネクストアクション</span>
                    <input type="text" v-model="nextaction">
                </div>
            </div>
            <div class="next-actions">
                <span class="box-title">フリー</span>
                <input type="text" v-model="free">
            </div>
            <button type="button" @click="onSubmit">Go!!!</button>
        </div>
        <sticky-footer></sticky-footer>
    </main>
</template>

<script>
import StickyFooter from '../../../components/presentations/common/footer/club/StickyFooter';
import { mapGetters } from 'vuex';
import swal from 'sweetalert';

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
            activity_date: '',
            title:         '',
            appeal:        '',
            improvement:   '',
            nextaction:    '',
            free:          ''
        }
    },
    computed: {
        ...mapGetters({
            ClubJournalData: 'club/fetchIndividualClubData',
        })
    },
    methods: {
        onSubmit() {
            const params = {
                club_id:       this.$route.params.id,
                activity_date: this.activity_date,
                title:         this.title,
                appeal:        this.appeal,
                improvement:   this.improvement,
                nextaction:    this.nextaction,
                free:          this.free
            };
            
            axios.post('/journal/create', params)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.$router.push('/club/1')
                })
        },
    }
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