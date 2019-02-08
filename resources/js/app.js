import Meta from 'vue-meta';

import router from './router';
import store from './store';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(Meta);

Vue.component('app-component', require('./components/App.vue').default);


const app = new Vue({
    el: '#app',
    store,
    router
});
