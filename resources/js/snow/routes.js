import VueRouter from 'vue-router';
var locale = laravel.localeUrl;
var utm = laravel.utm == null ? '' : '?utm='+laravel.utm;
let routes = [
	{
		path: '/',
		component: require('../views/snow/intro.vue').default,
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
		component: require('../views/snow/question.vue').default,
		props: true,
	},
	{
		path: '/complete',
		name: 'complete',
		component: require('../views/snow/complete.vue').default,
		props: true,
	},
	{
		path: '/download/:uuid/',
		name: 'download',
		component: require('../views/snow/download.vue').default,
		props: true,
	},
	//locales
	{
		path: '/:lang/',
		component: require('../views/snow/intro.vue').default,
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
		component: require('../views/snow/question.vue').default,
		props: true,
	},
	{
		path: '/:lang/complete',
		name: 'completelocale',
		component: require('../views/snow/complete.vue').default,
		props: true,
	},
	{
		path: '/:lang/download/:uuid/',
		name: 'downloadlocale',
		component: require('../views/snow/download.vue').default,
		props: true,
	}
];

const router = new VueRouter({
  mode: 'history',
  routes
});

export default router