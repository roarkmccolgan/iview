<template>
	<div class="container mx-auto mt-4">
		<div class="sm:flex sm:items-center mb-4">
			<div class="">
				<h2 class="text-white font-light text-xl sm:text-3xl leading-tight">{{ section }} Complete!</h2>
			</div>
			<div class="w-full sm:w-auto mt-4 sm:mt-0 sm:flex-grow sm:px-8">
				<img class="w-full sm:w-1/2" :src="'/images/tools/9/progress_'+ section.toLowerCase() +'_3.svg'" alt="">
			</div>
		</div>
		<div class="sm:w-3/4 text-xl leading-tight mt-8">
			<transition-group
				name="staggered-slide"
				appear
				v-bind:css="false"
				v-on:before-enter="beforeEnter"
				v-on:enter="enter"
				v-on:leave="leave"
				class=""
				tag="div"
			>
			<slot>
				<div v-for="(stat, index) in stats" :key="index" v-html="stat" :data-index="index"></div>
			</slot>
			</transition-group>
		</div>
		<a href="#" class="inline-block bg-trend-red hover:bg-white text-white hover:text-trend-red mt-6 py-4 px-6 no-underline" @click="$emit('next-step')">Continue</a>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faCheckCircle from '@fortawesome/fontawesome-pro-regular/faCheckCircle';

export default{
	props: ['section','left','info'],
	data: function() {
		return {
			showOther: false,
			icons:{
				check: faCheckCircle,
			},
			stats: this.info
		};
	},
	computed: {
		
	},
	components: {
		FontAwesomeIcon,
		faCheckCircle
	},
	methods:{
		beforeEnter: function (el) {
			el.style.marginLeft = "100%";
			el.style.opacity = 0;
			el.style.width = '100%';
		},
		enter: function (el, done) {
			var delay = 400 + el.dataset.index * (400/this.stats.length);
			setTimeout(function () {
				Velocity(
					el,
					{
						marginLeft: 0, opacity: 1
					},
					{
						complete: done 
					}
				)
			}, delay);
		},
		leave: function (el, done) {
			Velocity(
				el,
				{
					opacity: 0
				},
				{
					complete: done
				}
			);
		}
	},
	events:{}
}
</script>