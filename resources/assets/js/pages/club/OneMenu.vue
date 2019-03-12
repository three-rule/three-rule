<template>
    <div>
        <div class="sticky-header">
            <p>詳細メニュー</p>
        </div>
        <br>
        <br>
        <!--<p>menu_id: {{ $route.params.id }}</p>-->
        
        <div>
            <button type="button" @click="toggleEdit" v-if="isEdit">Edit</button>
            <button type="button" @click="onSubmit" v-else>Save</button>
                
            <div v-if="isEdit">
                <div>
                    <p v-if="oneMenuData.tag  == 1">#{{ clubData[0].tag_one }}</p>
                    <p v-if="oneMenuData.tag  == 2">#{{ clubData[0].tag_two }}</p>
                    <p v-if="oneMenuData.tag  == 3">#{{ clubData[0].tag_three }}</p>
                    <p v-if="oneMenuData.tag  == 4">#{{ clubData[0].tag_foue }}</p>
                    <p v-if="oneMenuData.tag  == 5">#{{ clubData[0].tag_five }}</p>
                </div>
                <p>タイトル: {{ oneMenuData.title }}</p>
                <p>URL:  {{ oneMenuData.url }}</p>
                <p>説明: {{ oneMenuData.description }}</p>
            </div>
            <div v-else="isEdit">
                <div>
                    <!--タグ: <input type="text" v-model="oneMenuData.tag">-->
                    タグ: 
                    <select v-model="tag">
                      <option disabled value="">Please select one</option>
                      <option value="1">{{ clubData[0].tag_one }}</option>
                      <option value="2">{{ clubData[0].tag_two }}</option>
                      <option value="3">{{ clubData[0].tag_three }}</option>
                      <option value="4">{{ clubData[0].tag_four }}</option>
                      <option value="5">{{ clubData[0].tag_five }}</option>
                    </select>
                </div>
                <div>
                    タイトル: <input type="text" v-model="oneMenuData.title">
                </div>
                <div>
                    URL: <input type="text" v-model="oneMenuData.url">
                </div>
                <div>
                    説明: <input type="text" v-model="oneMenuData.description">
                </div>
            </div>
        </div>

        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
import { mapGetters } from 'vuex';
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
    computed: {
        ...mapGetters({
            clubData: 'club/clubData',
            oneMenuData: 'menu/oneMenuData',
        })
    },
    methods: {
        toggleEdit() {
          this.isEdit = !this.isEdit
        },
        onSubmit() {
            const params = {
                tag: this.tag,
                title: this.oneMenuData.title,
                url: this.oneMenuData.url,
                description: this.oneMenuData.description
            };
            
            axios.put('club/1/menu/'+ this.$route.params.id, params)
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


@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>