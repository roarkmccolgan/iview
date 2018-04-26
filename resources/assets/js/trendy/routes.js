import VueRouter from 'vue-router';

let routes = [
	{
		path: '/',
		component: require('../views/trendy/intro.vue').default,
		name: 'home',
		props: true,
	},
	{
		path: '/questions/:question',
		name: 'question',
		component: require('../views/trendy/question.vue').default,
		props: true,
	},
	{
		path: '/complete',
		name: 'complete',
		component: require('../views/trendy/complete.vue').default,
		props: true,
	},

];

export default new VueRouter({
	routes
});