import VueRouter from 'vue-router';
var locale = laravel.localeUrl;
var utm = laravel.utm == null ? '' : '?utm='+laravel.utm;
let routes = [
{
	path: '/',
	component: require('../views/redhat/intro.vue').default,
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
	component: require('../views/redhat/question.vue').default,
	props: true,
},
{
	path: '/complete',
	name: 'complete',
	component: require('../views/redhat/complete.vue').default,
	props: true,
},
{
	path: '/download/:uuid/',
	name: 'download',
	component: require('../views/redhat/download.vue').default,
	props: true,
}


];

export default new VueRouter({
	mode: 'history',
	routes
});