require('./bootstrap');
require('../vendor/fontawesome.js');
require('../vendor/fa-light.js');

import router from './routes';
import VueAnalytics from 'vue-analytics';

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faUndo } from '@fortawesome/pro-regular-svg-icons/faUndo';

Vue.use(VueAnalytics, {
  id: 'UA-156016-34',
  router,
  debug: {
    enabled: process.env.NODE_ENV!=='production'
  }
})

new Vue({
	el: '#app',
	i18n,
	router: router,
	data () {
		return {
			message: 'helo',
			icons: {
				faUndo: faUndo
			}
		}
	},
	components:{
		FontAwesomeIcon
	},
	mounted: function(){
		this.$i18n.locale = window.laravel.locale=="" ? "en": window.laravel.locale;
	}
});