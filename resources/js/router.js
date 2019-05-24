import Vue from 'vue';
import Router from 'vue-router';

import Home from './views/Home';
import Edit from './views/Edit';

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/edit/:id',
      name: 'edit',
      component: Edit
    }
  ]
})
