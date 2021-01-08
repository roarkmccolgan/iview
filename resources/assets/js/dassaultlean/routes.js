import VueRouter from 'vue-router';
// var utm = laravel.utm;
var locale = laravel.localeUrl;
var utm = laravel.utm == null ? '' : '?utm='+laravel.utm;
let routes = [
	{
		path: '/',
		component: require('../views/dassaultlean/intro.vue').default,
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
		component: require('../views/dassaultlean/question.vue').default,
		props: true,
	},
	{
		path: '/complete',
		name: 'complete',
		component: require('../views/dassaultlean/complete.vue').default,
		props: true,
	},
	{
		path: '/download/:uuid/',
		name: 'download',
		component: require('../views/dassaultlean/download.vue').default,
		props: true,
	}
];

export default new VueRouter({
	routes
});