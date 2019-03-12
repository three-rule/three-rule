<template>
    <div>
        <div class="sticky-header">
            <p>メニュー</p>
        </div>
        <br>
        <br>
        
        
        <router-link :to="{ name: 'MenuCreate', params: { id: $route.params.id } }">
            +メニューを創る
        </router-link>
        <br />
        
        <button type="button" @click="toggleEdit" v-if="isEdit">タグ編集</button>
        <button type="button" @click="onSubmit" v-else>編集完了</button>
        
        <div v-if="isEdit">
            <p>#{{ clubData[0].tag_one }}</p>
            <p>#{{ clubData[0].tag_two }}</p>
            <p>#{{ clubData[0].tag_three }}</p>
            <p>#{{ clubData[0].tag_four }}</p>
            <p>#{{ clubData[0].tag_five }}</p>
        </div>
        <div v-else="isEdit">
            <input type="text" v-model="clubData[0].tag_one">
            <input type="text" v-model="clubData[0].tag_two">
            <input type="text" v-model="clubData[0].tag_three">
            <input type="text" v-model="clubData[0].tag_four">
            <input type="text" v-model="clubData[0].tag_five">
        </div>
        
        <div v-for="(menu, index) in myClubMenu" :key="menu.id">
            <div v-if="menu.tag == 1">
                <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">
                    {{ menu.title }}
                </router-link> 
                {{ menu.url }}
            </div>
            <div v-if="menu.tag == 2">
                <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">
                    {{ menu.title }}
                </router-link> 
                {{ menu.url }}
            </div>
            <div v-if="menu.tag == 3">
                <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">
                    {{ menu.title }}
                </router-link> 
                {{ menu.url }}
            </div>
            <div v-if="menu.tag == 4">
                <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">
                    {{ menu.title }}
                </router-link> 
                {{ menu.url }}
            </div>
            <div v-if="menu.tag == 5">
                <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">
                    {{ menu.title }}
                </router-link> 
                {{ menu.url }}
            </div>
        </div>
        
        
        <!--<p>#{{ clubData[0].tag_one }}</p>-->
        <!--タイトル 　　　　| URL-->
        <!--<div v-for="(menu, index) in myClubMenu" :key="menu.id">-->
        <!--    <div v-if="menu.tag == 1">-->
        <!--        <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">-->
        <!--            {{ menu.title }}-->
        <!--        </router-link> -->
        <!--        {{ menu.url }}-->
        <!--    </div>-->
        <!--</div>-->
        <!--<br />-->
        
        <!--<p>#{{ clubData[0].tag_two }}</p>-->
        <!--タイトル 　　　　| URL-->
        <!--<div v-for="(menu, index) in myClubMenu" :key="menu.id">-->
        <!--    <div v-if="menu.tag == 2">-->
        <!--        <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">-->
        <!--            {{ menu.title }}-->
        <!--        </router-link> -->
        <!--        {{ menu.url }}-->
        <!--    </div>-->
        <!--</div>-->
        <!--<br />-->
        
        <!--<p>#{{ clubData[0].tag_three }}</p>-->
        <!--タイトル 　　　　| URL-->
        <!--<div v-for="(menu, index) in myClubMenu" :key="menu.id">-->
        <!--    <div v-if="menu.tag == 3">-->
        <!--        <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">-->
        <!--            {{ menu.title }}-->
        <!--        </router-link>-->
        <!--        {{ menu.url }}-->
        <!--    </div>-->
        <!--</div>-->
        <!--<br />-->
        
        <!--<p>#{{ clubData[0].tag_four }}</p>-->
        <!--タイトル 　　　　| URL-->
        <!--<div v-for="(menu, index) in myClubMenu" :key="menu.id">-->
        <!--    <div v-if="menu.tag == 4">-->
        <!--        <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">-->
        <!--            {{ menu.title }}-->
        <!--        </router-link>-->
        <!--        {{ menu.url }}-->
        <!--    </div>-->
        <!--</div>-->
        <!--<br />-->
        
        <!--<p>#{{ clubData[0].tag_five }}</p>-->
        <!--タイトル 　　　　| URL-->
        <!--<div v-for="(menu, index) in myClubMenu" :key="menu.id">-->
        <!--    <div v-if="menu.tag == 5">-->
        <!--        <router-link :to="{ name: 'OneMenu', params: { menu_id: menu.id } }">-->
        <!--            {{ menu.title }}-->
        <!--        </router-link>-->
        <!--        {{ menu.url }}-->
        <!--    </div>-->
        <!--</div>-->
        
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
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
      this.getMenu()
    },
    computed: {
        ...mapGetters({
            clubData: 'club/clubData',
            myClubMenu: 'menu/myClubMenu'
        }),
    },
    methods: {
        toggleEdit() {
          this.isEdit = !this.isEdit
        },
        onSubmit() {
            const params = {
                tag_one:   this.clubData[0].tag_one,
                tag_two:   this.clubData[0].tag_two,
                tag_three: this.clubData[0].tag_three,
                tag_four:  this.clubData[0].tag_four,
                tag_five:  this.clubData[0].tag_five,
            };
            
            axios.put('club/2/menu', params)
                .then(response => {
                    swal("Updated!", "Your product has been opsated!", "success")
                    this.isEdit = !this.isEdit
                })
        },   
        // ...mapActions({
        //     getMenu: 'menu/getMenu'
        // })
        getMenu(club_id) {
          this.$store.dispatch('menu/getMenu', this.$route.params.id)
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