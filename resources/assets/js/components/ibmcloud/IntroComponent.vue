<template>
		<div>
			<div class="bg-blackblack pt-4 sm:pt-8 bg-no-repeat bg-right-top bg-50% sm:bg-contain" style="background-image: url('/images/tools/16/ibm-cloud-products-leadspace.webp')">
				<div class="container mx-auto px-4 sm:px-0 py-20">
					<h2 class="font-light text-white text-xl sm:text-5xl leading-tight">{{ section }}</h2>
				</div>
			</div>
			<div class="container mx-auto px-4 sm:px-0">
				<div class="text-xl leading-tight mt-8">
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
				<a href="#" class="inline-block bg-ibm-blue text-white mt-6 py-4 px-6 no-underline" @click="$emit('next-step')">Now let's assess your '{{ section }}' status</a>
			</div>
			
		</div>
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faCheckCircle } from '@fortawesome/pro-regular-svg-icons/faCheckCircle';

export default{
	props: ['section','info','intro'],
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