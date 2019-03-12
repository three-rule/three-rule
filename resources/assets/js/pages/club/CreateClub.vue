<template>
    <div>
        <p>新規クラブ作成</p>
        
        <p>所属</p>
        <input type="text" v-model="school_name">
        <select v-model="school_calling">
          <option disabled value="">Please select one</option>
          <option>中学</option>
          <option>高校</option>
        </select>
        
        <p>競技</p>
        <input type="text" v-model="club_name">
        <select v-model="club_calling">
          <option disabled value="">Please select one</option>
          <option>部</option>
          <option>クラブ</option>
          <option>サークル</option>
          <option>同好会</option>
        </select>
        
        <button type="button" @click="createClub">クラブ作成</button>
        
    </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
import axios  from 'axios'
import swal from 'sweetalert';

export default {
    components: {
        // StickyFooter
    },
    data () {
        return {
            school_name: '',
            school_calling: '',
            club_name: '',
            club_calling: ''
        }
    },
    created() {
    //   this.start()
    },
    computed: {
        ...mapGetters({
            // selectClubData: 'club/selectClubData'
        })
    },
    methods: {
        ...mapActions({
            // start: 'club/selectClub'
        }),
        createClub() {
            const params = {
                school_name:    this.school_name,
                school_calling: this.school_calling,
                club_name:      this.club_name,
                club_calling:   this.club_calling
            };
            
            axios.post('/club/create/'+ this.$route.params.id, params)
                .then(response => {
                    swal("Success!", "Your product has been opsated!", "success")
                    this.$router.push('/selectclub/'+ this.$route.params.id)
                })
        }
    }
};
</script>