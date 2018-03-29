<template>
	<div class="flex-grow">
		<div class="container mx-auto bg-white border-t border-b mt-6 mb-4 py-4 px-4 sm:border sm:rounded shadow text-grey-darker">
			<h1 class="font-light leading-tight">{{assessment.tool.title}}</h1>
			<h3 class="font-light leading-tight">{{assessment.tool.sub_title}}</h3>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<img class="max-w-full" :src="'/images/tools/' + assessment.tool.id + '/nttsdwan.jpg'" alt="">
					<div class="absolute pin sm:hidden flex flex-col items-center justify-center">
						<router-link class="bg-ntt-gold hover:bg-ntt-blue text-ntt-blue shadow py-4 px-6 rounded no-underline" :to="'/questions/1'">Start Assessment <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
					</div>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<div v-html="$t('ntt-sdwan.landing')">
						</div>
						<div class="mt-8 text-center">
							<router-link class="hidden sm:inline-block bg-ntt-blue hover:text-ntt-gold shadow-md text-white py-4 px-6 rounded no-underline" :to="'/questions/1'">{{ $t('ntt-sdwan.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faArrowRight from '@fortawesome/fontawesome-pro-regular/faArrowRight';
export default{
	data () {
		return {
			assessment: laravel,
			icons: {
				faArrowRight: faArrowRight
			}
		}
	},
	computed: {
		
	},
	components: {
		FontAwesomeIcon,
	},
	created: function(){
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				delete this.questions[q].selected;
			}
		}
	}
}
</script>