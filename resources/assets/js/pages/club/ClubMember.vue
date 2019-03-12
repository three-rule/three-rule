<template>
    <div>
        <!--<div v-for="member in memberData[0].club_member" :key="member.id">-->
        <!--    <div v-for="mypage in member.user.mypage" :key="mypage.id">-->
        <!--        {{ mypage.icon }}-->
        <!--    </div>-->
        <!--    {{ member.user.name }} | -->
        <!--    {{ member.role }}-->
        <!--</div>-->
        <!-------------------->
        <!--{{ memberData[0].club_member[0].user.mypage[0].icon }}-->
        <!--{{ memberData[0].club_member[0].user_id }}-->
        <!------------------------------>
        <!--{{ memberData[0].club_member }}-->
        
        <div class="sticky-header">
            <p>メンバー</p>
        </div>
        <div class="member-container">
            
            <button type="button" @click="toggleEdit" v-if="isEdit">Edit</button>
            <button type="button" @click="roleUpdate" v-else>Save</button>
            
            <!--<router-link class="member" :to="{ name: 'Mypage', params: { id: user.id } }" v-for="user in memberData[0].user" :key="user.id">-->
            <!--<router-link class="member" :to="{ name: 'Mypage', params: { id: member.user_id } }" v-for="member in memberData[0].club_member" :key="member.id">-->
            <div v-for="member in memberData[0].club_member" :key="member.id">
                <figure class="image">
                    <progressive-img
                        src="https://placehold.jp/64x64.png"
                        placeholder="https://placehold.jp/64x64.png"
                        :blur="30"
                    />
                    <div v-for="mypage in member.user.mypage" :key="mypage.id">
                        {{ mypage.icon }}
                    </div>
                </figure>
                
                <div class="member-info">
                    <div class="member-heading">
                        <div class="member-title">
                            {{ member.user.name }}
                            {{ member.user_id }}
                        </div>
                        
                        <div class="member-label" v-if="isEdit" @click="toggleEdit">
                            {{ member.role }}
                        </div>
                        <div class="member-label" v-else>
                           <input v-model="member.role">
                        </div>
                    </div>
                </div>
                
                <div class="angle-right">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
            <!--</router-link>-->
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
import { mapActions, mapGetters } from 'vuex';

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
            isEdit: true,
            member: {
                role: ''
            }
        }
    },
    computed: {
        ...mapGetters({
            memberData: 'club/clubData'
        }),
    },
    methods: {
        toggleEdit() {
          this.isEdit = !this.isEdit
        },
        roleUpdate() {
            const params = {
                role: this.member.role
            };
            
            console.log(params)
            axios.patch('/club/'+ this.$route.params.id +'/role', params)
            // axios.post('/club/'+ this.$route.params.id +'/users/'+ this.member.user_id +'/role', member.role)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.isEdit = !this.isEdit
                })
        }
    }
};
</script>

<style scoped>
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
.member-container {
    margin: 64px 16px;
}
.member .image {
    width: 64px;
    height: 64px;
    margin-right: 16px;
}
.progressive-image-wrapper {
    border-radius: 8px;
}
.member {
    display: flex;
    margin-bottom: 16px;
    padding: 8px;
    border-bottom: 1px solid #DCDCDC;
    color: black;
}
.member-motto {
    color: #A9A9A9;
}
.member-info {
    width: 100%;
}
.angle-right {
    display: flex;
    justify-content: center; 
    /*align-items: center;*/
    padding-top: 18px;
    font-size: 18px;
    width: 24px;
}

.member-heading {
    margin-bottom: 8px;
}
.member-title {
    padding: 4px 0px;
    font-weight: bold;
    display: inline-block;
    vertical-align: middle;
    margin-right: 16px;
}
.member-label {
    display: inline-block;
    vertical-align: middle;
    padding: 4px 12px;
    background-color: #5BCDFF;
    font-size: 12px;
    border-radius: 2px;
    color: white;
}

@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>