import Vue from 'vue';
import Vuex from 'vuex';

import user from "./modules/user";
import club from "./modules/club";
import mypage from "./modules/mypage";
import calendar from "./modules/calendar";
import menu from "./modules/menu";
import discussion from "./modules/discussion";
 
Vue.use(Vuex);
 
export default new Vuex.Store({
    modules: {
        user: user,
        club: club,
        mypage: mypage,
        calendar: calendar,
        menu: menu,
        discussion: discussion
    }
});