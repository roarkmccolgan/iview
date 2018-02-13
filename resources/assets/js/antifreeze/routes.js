import VueRouter from 'vue-router';

let routes = [
	{
		path: '/',
		component: require('../views/intro.vue').default,
		name: 'home',
		props: true,
	},
	{
		path: '/questions/:question',
		name: 'question',
		component: require('../views/question.vue').default,
		props: true,
	},
	{
		path: '/complete',
		name: 'complete',
		component: require('../views/complete.vue').default,
		props: true,
	},

];

export default new VueRouter({
	routes
});