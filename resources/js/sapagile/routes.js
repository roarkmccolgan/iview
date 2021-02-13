import VueRouter from 'vue-router';
// var utm = laravel.utm;
var locale = laravel.localeUrl;
var utm = laravel.utm == null ? '' : '?utm='+laravel.utm;
let routes = [
	{
		path: '/',
		component: require('../views/sapagile/intro.vue').default,
		name: 'home',
		props: true,
		meta: {
			analytics: {
				pageviewTemplate (route) {
					return {
						title: laravel.tool.title,
						page: route.path+locale+utm,
						location: window.location.href
					}
				}
			}
		}
	},
	{
		path: '/questions/:question',
		name: 'question',
		component: require('../views/sapagile/question.vue').default,
		props: true,
	},
	{
		path: '/complete',
		name: 'complete',
		component: require('../views/sapagile/complete.vue').default,
		props: true,
	},
	//locales
	{
		path: '/:lang/',
		component: require('../views/sapagile/intro.vue').default,
		name: 'homelocale',
		props: true,
		meta: {
			analytics: {
				pageviewTemplate (route) {
					return {
						title: laravel.tool.title,
						page: route.path+locale+utm,
						location: window.location.href
					}
				}
			}
		}
	},
	{
		path: '/:lang/questions/:question',
		name: 'questionlocale',
		component: require('../views/sapagile/question.vue').default,
		props: true,
	},
	{
		path: '/:lang/complete',
		name: 'completelocale',
		component: require('../views/sapagile/complete.vue').default,
		props: true,
	}
];

export default new VueRouter({
	mode: 'history',
	routes
});