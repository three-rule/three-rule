import Vue from 'vue';
import VueRouter from 'vue-router';


/*
 * Top, Corporate
 */
import Top from '../pages/top/TheTop';
import Login from '../pages/Login';
import Register from '../pages/Register';
import About from '../pages/top/About';
import News from '../pages/top/News';
import Recruit from '../pages/top/Recruit';
import Service from '../pages/top/Service';
import Contact from '../pages/top/Contact';

/*
 * Service
 */
import Club from '../pages/club/Club';
import MyPage from '../pages/club/MyPage';
import EditMyPage from '../pages/club/EditMyPage';
import Strategy from '../pages/club/Strategy';
import Discussion from '../pages/club/Discussion';
import OneDiscussion from '../pages/club/OneDiscussion';
import Menu from '../pages/club/Menu';
import Journal from '../pages/club/Journal';
import JournalCreate from '../pages/club/JournalCreate';
import OneJournal from '../pages/club/OneJournal';
import Calendar from '../pages/club/Calendar';
import Information from '../pages/club/Information';
import ClubMember from '../pages/club/ClubMember';
 
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

    },
    {
        path:'/club/:id',
        name: 'Club',
        component: Club,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path:'/mypage/:id',
        name: 'Mypage',
        component: MyPage,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path:'/editmypage/:id',
        name: 'EditMypage',
        component: EditMyPage,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    // {
    //     path:'/strategy',
    //     component: Strategy,

    // },
    {
        path:'/onediscussion/:discuss_id',
        name: 'OneDiscussion',
        component: OneDiscussion,
        props: route => ({
            discuss_id: Number(route.params.id)
        })
    },
    {
        path:'/discussion/:id',
        name: 'Discussion',
        component: Discussion,
        props: route => ({
            id: Number(route.params.id)
        })

    },
    {
        path:'/menu',
        component: Menu,

    },
    {
        path:'/journal/:id',
        name: 'Journal',
        component: Journal,
        props: route => ({
            id: Number(route.params.id)
        })

    },
    {
        path:'/journal/create/:id',
        name: 'JournalCreate',
        component: JournalCreate,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path:'/onejournal/:id',
        name: 'OneJournal',
        component: OneJournal,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path:'/calendar',
        component: Calendar,

    },
    {
        path:'/info/:id',
        name: 'Information',
        component: Information,
        props: route => ({
            id: Number(route.params.id)
        })

    },
    {
        path:'/member/:id',
        name: 'ClubMember',
        component: ClubMember,
        props: route => ({
            id: Number(route.params.id)
        })
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