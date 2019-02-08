import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import HomeComponent from './components/home/HomeComponent';
import EditComponent from './components/edit/EditTheme'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', name: 'home', component: HomeComponent},
        {path: '/edit/:id', name: 'edit', component: EditComponent},
        //{path: '/products/:id', name: 'products', component: Products}
        {path: '*', redirect: '/'},
    ]
});

export default router;
