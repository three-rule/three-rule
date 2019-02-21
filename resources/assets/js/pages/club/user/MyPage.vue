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
                    <!--<input type="file" class="form-control" @change="imageChanged">-->
                    <!--<button type="button" @click="uploadImage">upload</button>-->
                </figure>
            </div>
            <div class="main-profile">
                <div class="heading">
                <!--<div class="heading" v-if="isEdit">-->
                    {{ individualMypageData.name }}
                </div>
                <!--<div class="heading" v-else>-->
                <!--    <input v-model="individualMypageData.name">-->
                <!--</div>-->
                <div class="favorite-motto" v-if="isEdit">
                    {{ individualMypageData.mypage[0].oneword }}
                </div>
                <div class="favorite-motto" v-else>
                    <input v-model="individualMypageData.mypage[0].oneword">
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
                    <div class="right-item" v-if="isEdit">
                        {{ individualMypageData.mypage[0].commit_long }}:{{ individualMypageData.mypage[0].goal_long }}
                    </div>
                    <div class="right-item" v-else>
                        <input v-model="individualMypageData.mypage[0].commit_long">:
                        <input v-model="individualMypageData.mypage[0].goal_long">
                    </div>
                </div>
                <div class="medium-term-goal">
                    <div class="left-item">
                        中期目標
                    </div>
                    <div class="right-item" v-if="isEdit">
                        {{ individualMypageData.mypage[0].commit_mid }}:{{ individualMypageData.mypage[0].goal_mid }}
                    </div>
                    <div class="right-item" v-else>
                        <input v-model="individualMypageData.mypage[0].commit_mid">:
                        <input v-model="individualMypageData.mypage[0].goal_mid">
                    </div>
                </div>
                <div class="short-term-goal">
                    <div class="left-item">
                        短期目標
                    </div>
                    <div class="right-item" v-if="isEdit">
                        {{ individualMypageData.mypage[0].commit_short }}:{{ individualMypageData.mypage[0].goal_short }}
                    </div>
                    <div class="right-item" v-else>
                        <input v-model="individualMypageData.mypage[0].commit_short">:
                        <input v-model="individualMypageData.mypage[0].goal_short">
                    </div>
                </div>
                <!--<router-link :to="{ name: 'EditMypage', params: { id: $route.params.id } }" class="is-block btn-edit-goal">-->
                <div class="is-block btn-edit-goal">
                    <span @click="toggleEdit" v-if="isEdit">Edit</span>
                    <span @click="onSubmit" v-else>Update</span>
                </div>
                <!--</router-link>-->
            </div>
            
            <div class="journal-container">
                <div class="heading">
                    日誌
                </div>
                <!--<div class="journals">-->
                <div class="journals" 
                     v-for="journal in individualMypageData.journal" :key="journal.id">
                    <router-link :to="{ name: 'OneJournal', params: { id: journal.id } }" class="journal">
                        <p>
                            <!--<span>2019.01.20</span><br />-->
                            <span>{{ journal.activity_date }}</span><br />
                            <!--<span>{{ journal.title }}</span>-->
                        </p>
                    </router-link>
                    
                    <!--<router-link :to="{ name: 'OneJournal', params: { id: 2 } }" class="journal">-->
                    <!--    <p>-->
                    <!--        <span>2019.01.20</span><br />-->
                    <!--        <span>title</span>-->
                    <!--    </p>-->
                    <!--</router-link>-->
                    <!--<router-link :to="{ name: 'OneJournal', params: { id: 3 } }" class="journal">-->
                    <!--    <p>-->
                    <!--        <span>2019.01.20</span><br />-->
                    <!--        <span>title</span>-->
                    <!--    </p>-->
                    <!--</router-link>-->
                    <!--<router-link :to="{ name: 'OneJournal', params: { id: 4 } }" class="journal">-->
                    <!--    <p>-->
                    <!--        <span>2019.01.20</span><br />-->
                    <!--        <span>title</span>-->
                    <!--    </p>-->
                    <!--</router-link>-->
                </div>
            </div>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../../components/presentations/common/footer/club/StickyFooter';
import { mapActions, mapGetters } from 'vuex';
import axios  from 'axios'

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
            isEdit: true
        }
    },
    created() {
      this.start()
    },
    computed: {
        ...mapGetters({
            mypage: 'mypage/mypage',
            individualMypageData: 'mypage/fetchIndividualMypageData'
        }),
    },
    methods: {
        ...mapActions({
            start: 'mypage/getMypage'
        }),
        toggleEdit() {
          this.isEdit = !this.isEdit
        },
        imageChanged(e) {
            console.log(e.target.files[0])
            let fileReader = new FileReader() 
            fileReader.readAsDataURL(e.target.files[0])
            fileReader.onload = (e) => {
                this.individualMypageData.mypage[0].icon = e.target.result
            }
        },
        onSubmit() {
            const params = {
                // name:         this.individualMypageData.name,
                oneword:      this.individualMypageData.mypage[0].oneword,
                commit_long:  this.individualMypageData.mypage[0].commit_long,
                goal_long:    this.individualMypageData.mypage[0].goal_long,
                commit_mid:   this.individualMypageData.mypage[0].commit_mid,
                goal_mid:     this.individualMypageData.mypage[0].goal_mid,
                commit_short: this.individualMypageData.mypage[0].commit_short,
                goal_short:   this.individualMypageData.mypage[0].goal_short
            };
            
            axios.post('/mypage/update/'+ this.individualMypageData.mypage[0].id, params)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.isEdit = !this.isEdit
                })
        },
        uploadImage() {
            axios.post('/mypage/upload/'+ this.$route.params.id, this.individualMypageData.mypage[0])
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                })
        }
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