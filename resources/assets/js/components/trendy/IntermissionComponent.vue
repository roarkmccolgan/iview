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
		<div class="p-4 bg-blackblack sm:w-3/4">
			<slot>
				<div class="text-lg">
					<p class="mb-2">
						<div class="flex items-center">
							<img src="images/tools/9/icons/bullet.svg" alt="" class="w-4">
							<p>Selling managed services effectively requires new approaches and new compensation models.</p>
						</div>
					</p>
					<p class="mb-2">
						<div class="flex items-center">
							<img src="images/tools/9/icons/bullet.svg" alt="" class="w-4">
							<p>The economics of recurring revenue is very different, so much so that 71% of partners are currently or considering building a “Customer for Life” program to focus on retention and renewal of subscription contracts.</p>
						</div>
					</p>
					<p class="mb-2">
						<div class="flex items-center">
							<img src="images/tools/9/icons/bullet.svg" alt="" class="w-4">
							<p>On completing the tool, you'll get a personalised report which will give you some key pointers on how you can make this transition.</p>
						</div>
					</p>
				</div>
				<p class="my-4">It also has implications for how you go to market&hellip;</p>
			</slot>
		</div>
		<a href="#" class="inline-block bg-trend-red hover:bg-white text-white hover:text-trend-red mt-6 py-4 px-6 no-underline" @click="$emit('next-step')">Continue</a>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faCheckCircle from '@fortawesome/fontawesome-pro-regular/faCheckCircle';

export default{
	props: ['section','left'],
	data: function() {
		return {
			showOther: false,
			icons:{
				check: faCheckCircle,
			}
		};
	},
	computed: {
		
	},
	components: {
		FontAwesomeIcon,
		faCheckCircle
	},
	methods:{
		
	},
	events:{}
}
</script>