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
                <!--{{ mypage[0].mypage[0].icon }}-->
            </div>
            <div class="main-profile">
                <div class="heading">
                <!--<div class="heading" v-if="isEdit">-->
                    {{ mypage[0].name }}
                </div>
                <!--<div class="heading" v-else>-->
                <!--    <input v-model="individualMypageData.name">-->
                <!--</div>-->
                <div class="favorite-motto" v-if="isEdit">
                    {{ mypage[0].mypage[0].oneword }}
                </div>
                <div class="favorite-motto" v-else>
                    <input v-model="mypage[0].mypage[0].oneword">
                </div>
            </div>
            <div class="goal-container">
                <div class="heading">
                    3rule
                </div>
                <div class="long-term-goal">
                    <div class="left-item">
                        ルール①
                    </div>
                    <div class="right-item" v-if="isEdit">
                        {{ mypage[0].mypage[0].rule_one }}
                    </div>
                    <div class="right-item" v-else>
                        <input v-model="mypage[0].mypage[0].rule_one">
                    </div>
                </div>
                <div class="medium-term-goal">
                    <div class="left-item">
                        ルール②
                    </div>
                    <div class="right-item" v-if="isEdit">
                        {{ mypage[0].mypage[0].rule_two }}
                    </div>
                    <div class="right-item" v-else>
                        <input v-model="mypage[0].mypage[0].rule_two">
                    </div>
                </div>
                <div class="short-term-goal">
                    <div class="left-item">
                        ルール③
                    </div>
                    <div class="right-item" v-if="isEdit">
                        {{ mypage[0].mypage[0].rule_three }}
                    </div>
                    <div class="right-item" v-else>
                        <input v-model="mypage[0].mypage[0].rule_three">
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
                <router-link :to="{ name: 'MyJournalCreate', params: { id: $route.params.id } }">
                +
                </router-link>
                <!--<div class="journals">-->
                <div class="journals" 
                     v-for="journal in mypage[0].my_journal" :key="journal.id">
                    <router-link :to="{ name: 'OneJournal', params: { id: journal.id } }" class="journal">
                        <p>
                            <span>{{ journal.activity_at }}</span><br />
                            <span>{{ journal.title }}</span>
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
            isEdit: true
        }
    },
    created() {
      this.getMypage()
    },
    computed: {
        ...mapGetters({
            mypage: 'mypage/mypage'
        }),
    },
    methods: {
        ...mapActions({
            getMypage: 'mypage/getMypage'
        }),
        getMypage(club_id, user_id) {
          this.$store.dispatch('mypage/getMypage', { club_id: this.$route.params.id, user_id: this.$route.params.user_id })
        },
        toggleEdit() {
          this.isEdit = !this.isEdit
        },
        imageChanged(e) {
            console.log(e.target.files[0])
            let fileReader = new FileReader() 
            fileReader.readAsDataURL(e.target.files[0])
            fileReader.onload = (e) => {
                this.mypage[0].mypage[0].icon = e.target.result
            }
        },
        onSubmit() {
            const params = {
                // name:         this.individualMypageData.name,
                oneword:    this.mypage[0].mypage[0].oneword,
                rule_one:   this.mypage[0].mypage[0].rule_one,
                rule_two:   this.mypage[0].mypage[0].rule_two,
                rule_three: this.mypage[0].mypage[0].rule_three
            };
            
            axios.put('/club/'+ this.$route.params.id +'/mypage/'+ this.mypage[0].mypage[0].id, params)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.isEdit = !this.isEdit
                })
        },
        uploadImage() {
            axios.post('/mypage/'+ this.mypage[0].mypage[0].id +'/icon', this.mypage[0].mypage[0].icon)
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