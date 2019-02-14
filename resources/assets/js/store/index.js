import Vue from 'vue';
import Vuex from 'vuex';

import user from "./modules/user";
import club from "./modules/club";
import mypage from "./modules/mypage";
 
Vue.use(Vuex);
 
export default new Vuex.Store({
    modules: {
        user: user,
        club: club,
        mypage: mypage
    }
});