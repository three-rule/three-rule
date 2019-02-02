import Vue from 'vue';
import Vuex from 'vuex';

import club from "./modules/club";
import mypage from "./modules/mypage";
 
Vue.use(Vuex);
 
export default new Vuex.Store({
    modules: {
        
        club: club,
        mypage: mypage
    }
});