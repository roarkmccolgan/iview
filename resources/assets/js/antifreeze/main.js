require('./bootstrap');
require('../vendor/fontawesome.js');
require('../vendor/fa-light.js');


import router from './routes';
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faUndo from '@fortawesome/fontawesome-pro-regular/faUndo';

new Vue({
	el: '#app',
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
	}
});