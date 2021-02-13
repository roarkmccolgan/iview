<template>
	<div class="container mx-auto mt-4">
		<h3 class="text-white font-light text-xl sm:text-2xl leading-tight mb-4">{{ section }}</h3>
		<transition-group
			name="staggered-appear"
			appear
			v-bind:css="false"
			v-on:before-enter="beforeEnter"
			v-on:enter="enter"
			v-on:leave="leave"
			class="flex flex-wrap items-center justify-center -mx-2"
			tag="div"
		>
		<div class="block px-2" v-for="(nugget, nugKey) in nuggets" :key="nugKey" :data-index="nugKey" :style="'width: '+ minWidth +'px'">
			<img :src="'/images/tools/9/nuggets/'+nugget" alt="">
		</div>
	</transition-group>
</div>
</template>
<script>

export default{
	props: ['nuggets','section','minWidth'],
	data: function() {
		return {
			images: this.nuggets,
			showOther: false,
			
		};
	},
	computed: {
		
	},
	components: {
	},
	methods:{
		beforeEnter: function (el) {
			el.style.opacity = 0;
		},
		enter: function (el, done) {
			//var delay = el.dataset.index * (1200/this.nuggets.length);
			var delay = el.dataset.index == 0 ? 600+400 : 1000+(400*el.dataset.index);
			setTimeout(function () {
				Velocity(
					el,
					{
						opacity: 1
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