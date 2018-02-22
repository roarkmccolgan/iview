import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueCookies from 'vue-cookies';
//import FlagIcon from 'vue-flag-icon';


window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueCookies);

window.axios = axios;

window.axios.defaults.headers.common ={
	'X-requested-With': 'XMLHttpRequest'
};