import Vue from 'vue';
import Vuex from 'vuex';

import mypage from "./modules/mypage";
import club from "./modules/club";
import user from "./modules/user";
 
Vue.use(Vuex);
 
export default new Vuex.Store({
    modules: {
        
        club: club,
        mypage: mypage,
        user: user
    }
});