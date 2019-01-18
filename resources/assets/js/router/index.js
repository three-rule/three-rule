import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/TheTop';
import Login from '../pages/Login';
import Register from '../pages/Register';
import About from '../pages/top/About';
import News from '../pages/top/News';
import Recruit from '../pages/top/Recruit';
import Service from '../pages/top/Service';
import Contact from '../pages/top/Contact';
 
Vue.use(VueRouter);
 
const routes = [
    {
        path:'/',
        component: Top
    },
    {
        path:'/login',
        component: Login,

    },
    {
        path:'/register',
        component: Register,

    },
    {
        path:'/about',
        component: About,

    },
    {
        path:'/news',
        component: News,

    },
    {
        path:'/recruit',
        component: Recruit,

    },
    {
        path:'/service',
        component: Service,

    },
    {
        path:'/contact',
        component: Contact,

    }
];
 
const router = new VueRouter({
    mode: 'history',
    routes,
    // Established tactic
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
          return savedPosition
        } else {
          return { x: 0, y: 0 }
        }
      }
});
 
export default router;