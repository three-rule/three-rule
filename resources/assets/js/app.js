require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import axios  from 'axios';
import VueAxios  from 'vue-axios';
import VueProgressiveImage from 'vue-progressive-image';
import { sync } from 'vuex-router-sync';
import store from './store/index';
import router from './router/index';

Vue.use(VueAxios, axios); 
sync(store, router);

Vue.use(VueProgressiveImage, {
  blur: 30
});

const app = new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');
