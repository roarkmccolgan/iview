require('./bootstrap');
require('../vendor/fontawesome.js');
require('../vendor/fa-light.js');

import router from './routes';
import VueAnalytics from 'vue-analytics';

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faUndo } from '@fortawesome/pro-regular-svg-icons/faUndo';
import { ShareNetwork } from '../../../../node_modules/vue-social-sharing/dist/vue-social-sharing'

import { VPopover, VClosePopover } from 'v-tooltip'
Vue.directive('close-popover', VClosePopover)
Vue.component('v-popover', VPopover)

// Vue.use(VueAnalytics, {
// 	id: 'UA-156016-34',
// 	router,
// 	debug: {
// 		enabled: process.env.NODE_ENV!=='production'
//     //enabled: false
// }
// })

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
		FontAwesomeIcon,
		ShareNetwork
	},
	mounted: function(){
		console.log(location.href);
		this.$i18n.locale = window.laravel.locale=="" ? "en": window.laravel.locale;
	}
});