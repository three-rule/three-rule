<template>
    <div>
        <div class="sticky-header">
            <p>メニューを創る</p>
        </div>
        <br>
        <br>

        <div class="journal-container">
            <div class="content-point">
                <div class="strengths">
                    <span class="box-title">タグ</span>
                    <!--<input type="text" v-model="tag">-->
                </div>
                <select v-model="tag">
                  <option disabled value="">Please select one</option>
                  <option value="1">{{ clubData[0].tag_one }}</option>
                  <option value="2">{{ clubData[0].tag_two }}</option>
                  <option value="3">{{ clubData[0].tag_three }}</option>
                  <option value="4">{{ clubData[0].tag_four }}</option>
                  <option value="5">{{ clubData[0].tag_five }}</option>
                </select>
                
                <div class="strengths">
                    <span class="box-title">タイトル</span>
                    <input type="text" v-model="title">
                </div>
                <div class="next-actions">
                    <span class="box-title">URL</span>
                    <input type="text" v-model="url">
                </div>
                <div class="next-actions">
                    <span class="box-title">説明</span>
                    <input type="text" v-model="description">
                </div>
            </div>
            <button type="button" @click="onSubmit">作成</button>
        </div>

        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
import axios  from 'axios'
import swal from 'sweetalert';
import { mapGetters } from 'vuex';

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
            tag:     '',
            title:         '',
            url:        '',
            description:   '',
        }
    },
    computed: {
        ...mapGetters({
            clubData: 'club/clubData',
            // myClubMenu: 'menu/myClubMenu'
            clubData: 'club/clubData'
        }),
    },
    methods: {
        onSubmit() {
            const params = {
                tag:         this.tag,
                title:       this.title,
                url:         this.url,
                description: this.description
            };
            
            axios.post('club/'+ this.$route.params.id +'/menu', params)
            // axios.post('club/1/menu', params)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.$router.push('/club/'+ this.$route.params.id +'/menu')
                })
        },
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


@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>