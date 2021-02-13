import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueCookies from 'vue-cookies';
import VueInternalization from 'vue-i18n';
import Locales from '../vue-i18n-locales.generated.js';
//import FlagIcon from 'vue-flag-icon';


window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueCookies);
Vue.use(VueInternalization);

window.i18n =new VueInternalization({locale: 'en', messages: Locales})

window.axios = axios;

window.axios.defaults.headers.common ={
	'X-requested-With': 'XMLHttpRequest'
};