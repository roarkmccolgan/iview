import VueRouter from 'vue-router';
var locale = laravel.localeUrl;
var utm = laravel.utm == null ? '' : '?utm='+laravel.utm;
let routes = [
{
	path: '/',
	component: require('../views/hitachi/intro.vue').default,
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
	component: require('../views/hitachi/question.vue').default,
	props: true,
},
{
	path: '/complete',
	name: 'complete',
	component: require('../views/hitachi/complete.vue').default,
	props: true,
},

];

export default new VueRouter({
	routes
});