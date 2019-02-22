<template>
    <div>
        <figure class="image">
            <progressive-img
                src="http://placehold.jp/1280x320.png"
                placeholder="http://placehold.jp/1280x320.png"
                :blur="30"
            />
            <!--<img :src="storage/app/public/upload/{{ individualClubData.image }}">-->
        </figure>
        <div class="club-heading">
            <h1 class="club-name">
                {{ individualClubData.school_name }}
                <span v-if="individualClubData.school_calling_id == 1">小学校</span>
                <span v-else-if="individualClubData.school_calling_id == 2">中学校</span>
                <span v-else-if="individualClubData.school_calling_id == 3">高校</span>
                <span v-else-if="individualClubData.school_calling_id == 4">高専</span>
                <span v-else-if="individualClubData.school_calling_id == 5">専門学校</span>
                <span v-else-if="individualClubData.school_calling_id == 6">短期大学</span>
                <span v-else-if="individualClubData.school_calling_id == 7">大学</span>

                {{ individualClubData.club_name }}
                <span v-if="individualClubData.club_calling_id == 1">部</span>
                <span v-else-if="individualClubData.club_calling_id == 2">クラブ</span>
                <span v-else-if="individualClubData.club_calling_id == 3">サークル</span>
                <span v-else-if="individualClubData.club_calling_id == 4">同好会</span>
            </h1>
            <router-link :to="{ name: 'ClubMember', params: { id: $route.params.id } }">
                <h2 class="club-member">
                    部員数
                    <span>{{ individualClubData.user.length }}</span>
                    人
                </h2>
            </router-link>
            <!--<span>-->
            <!--    <router-link :to="{ name: 'Information', params: { id: $route.params.id } }">-->
            <!--        <i class="fas fa-bell"></i>-->
            <!--    </router-link>-->
            <!--    <div class="info-tags">-->
            <!--        1-->
            <!--    </div>-->
            <!--</span>-->

            <div class="club-strategy">
                <div class="main-strategy" v-if="isEdit">
                    {{ individualClubData.policy }}
                </div>

                <div class="club-strategy" v-else>
                    <input class="main-strategy" v-model="individualClubData.policy">
                </div>
            </div>
        </div>

        <div class="club-rules">
            <button type="button" @click="toggleEdit" v-if="isEdit">Edit</button>
            <button type="button" @click="onSubmit" v-else>Save</button>
            <!--<div class="club-rules-container">-->
                <!--<h3 class="club-rules-heading">チーム方針</h3>-->
            <!--    <button type="button" @click="toggleEdit" v-if="isEdit">Edit</button>-->
            <!--    <button type="button" @click="onSubmit" v-else>Save</button>-->
                <!--<router-link :to="{ name: 'Club', params: { id: $route.params.id } }">Cancel</router-link>-->

                <!--<div class="club-strategy">-->
                <!--    <div class="main-strategy" v-if="isEdit">-->
                <!--        {{ individualClubData.policy }}-->
                <!--    </div>-->

                <!--    <div class="club-strategy" v-else>-->
                <!--        <input class="main-strategy" v-model="individualClubData.policy">-->
                <!--    </div>-->
                <!--</div>-->
            <!--</div>-->

            <div class="club-rules-container">
                <h3 class="club-rules-heading">3ルール</h3>
                <!--<button type="button" @click="toggleRuleEdit" v-if="ruleEdit">Edit</button>-->
                <!--<button type="button" @click="ruleUpdate" v-else>Save</button>-->
                <div class="club-3rule">
                    <div class="square-wrapper">
                        <div class="spacer"></div>
                        <div class="content">
                            <div class="rule-number">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="rule-text" v-if="isEdit">
                        {{ individualClubData.rule_one }}
                    </div>
                    <div class="rule-text" v-else>
                        <input class="main-strategy" v-model="individualClubData.rule_one">
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
                    <div class="rule-text" v-if="isEdit">
                        {{ individualClubData.rule_two }}
                    </div>
                    <div class="rule-text" v-else>
                        <input class="main-strategy" v-model="individualClubData.rule_two">
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
                    <div class="rule-text" v-if="isEdit">
                        {{ individualClubData.rule_three }}
                    </div>
                    <div class="rule-text" v-else>
                        <input class="main-strategy" v-model="individualClubData.rule_three">
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-side-bar">
            <ul>
                <!--<li>-->
                <!--    <router-link to="/strategy">-->
                <!--        <i class="fas fa-align-justify"></i>-->
                <!--    </router-link>-->
                <!--</li>-->
                <li>
                    <router-link :to="{ name: 'Discussion', params: { id: $route.params.id } }">
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
                    <!--<router-link to="/journal">-->
                    <router-link :to="{ name: 'Journal', params: { id: $route.params.id } }">
                        <i class="fas fa-blog"></i>
                    </router-link>
                </li>
            </ul>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../../components/presentations/common/footer/club/StickyFooter';
import { mapActions, mapGetters } from 'vuex';
import axios  from 'axios'
import swal from 'sweetalert';

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
            individualClubData: 'club/fetchIndividualClubData',
        }),

        // policy: {
        //     set(value) {
        //         this.$store.commit('updatePolicy',value)
        //         console.log('aaa')
        //     }
        // }
    },
    methods: {
        ...mapActions({
            start: 'club/getClub'
        }),

        toggleEdit() {
          this.isEdit = !this.isEdit
        },

        onSubmit() {
            const params = {
                policy: this.individualClubData.policy,
                rule_one: this.individualClubData.rule_one,
                rule_two: this.individualClubData.rule_two,
                rule_three: this.individualClubData.rule_three
            };

            axios.post('/club/update/'+ this.$route.params.id, params)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.isEdit = !this.isEdit
                })
        },
        // ruleUpdate() {
        //     const paramRules = {
        //         rule_one: this.individualClubData.rule_one,
        //         rule_two: this.individualClubData.rule_two,
        //         rule_three: this.individualClubData.rule_three
        //     };
        //     axios.post('/club/update/'+ this.$route.params.id, paramRules)
        //         .then(response => {
        //             swal("Updated!", "Your product has been opsated!", "success")
        //             console.log(params)
        //             this.ruleEdit = !this.ruleEdit
        //         })

        // }
    }
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