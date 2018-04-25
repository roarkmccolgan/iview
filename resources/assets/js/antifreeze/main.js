require('./bootstrap');
require('../vendor/fontawesome.js');
require('../vendor/fa-light.js');

import router from './routes';
import VueAnalytics from 'vue-analytics';

import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faUndo from '@fortawesome/fontawesome-pro-regular/faUndo';

Vue.use(VueAnalytics, {
  id: 'UA-156016-34',
  router,
  debug: {
    enabled: process.env.NODE_ENV!=='production'
  }
})

console.log(process.env.NODE_ENV);

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