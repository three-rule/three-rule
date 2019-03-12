<template>
    <div>
        <router-link :to="{ name: 'CreateClub', params: { id: $route.params.id } }" >
            +新規クラブ作成
        </router-link>
        
        <p>所属クラブ</p>
        <br>
        <br>
        
        <router-link 
            :to="{ name: 'Club', params: { id: club.club.id } }" 
            v-for="club in selectClubData[0].club_member" :key="club.id">
            <p>   
                <!--{{ club.club.id }}-->
                {{ club.club.school_name }}
                {{ club.club.school_calling }}
                {{ club.club.club_name }}
                {{ club.club.club_calling }}
            </p>
        </router-link>
        
        <br>
        <br>
        <p>ニュース</p>
        <a>https://dot.asahi.com/aera/2018120500010.html</a> <br />
        <a>https://dot.asahi.com/aera/2018120500010.html</a> <br />
        <a>https://dot.asahi.com/aera/2018120500010.html</a> <br />
        <a>https://dot.asahi.com/aera/2018120500010.html</a> <br />
        
        <!--<sticky-footer></sticky-footer>-->
    </div>
</template>

<script>
// import StickyFooter from '../../components/club/StickyFooter';
import { mapActions, mapGetters } from 'vuex';
import axios  from 'axios'
import swal from 'sweetalert';

export default {
    // components: {
    //     StickyFooter
    // },
    data () {
        return {
            
        }
    },
    created() {
      this.selectClub()
    },
    computed: {
        ...mapGetters({
            selectClubData: 'club/selectClubData'
        })
    },
    methods: {
        // ...mapActions({
        //     selectClub: 'club/selectClub'
        // })
        selectClub(uer_id) {
          this.$store.dispatch('club/selectClub', this.$route.params.id)
        }
    }
};
</script>