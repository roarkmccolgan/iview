<template>
	<div class="flex-grow">
		
		<div class="container mx-auto flex flex-wrap items-start mb-4 py-4 sm:py-10">
			<div class="flex-1 text-blackblack p-8">
				<h1 class="font-normal leading-tight text-4xl" v-html="$t('redhat.intro-title')"></h1>
				<div class="my-8 font-bold text-lg leading-snug" v-html="$t('redhat.intro')"></div>
				<div class="my-4" v-html="$t('redhat.landing-1')"></div>
				<div class="my-4" v-html="$t('redhat.landing-2')"></div>
				<router-link class="inline-block font-bold text-lg text-center text-white bg-redhat mt-8 py-3 px-6 rounded no-underline hover:bg-redhat-dark" :to="'/questions/1'">{{ $t('redhat.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
			</div>
			<div class="sm:w-2/5 sm:pt-10">
				<img :src="`/images/tools/${assessment.tool.id}/intro_graph.svg`" alt="">
			</div>
		</div>
	</div>		
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faArrowRight } from '@fortawesome/pro-regular-svg-icons/faArrowRight';
import faGlobe from '@fortawesome/pro-regular-svg-icons/faGlobe';
export default{
	data () {
		return {
			assessment: laravel,
			bgimage: false,
			icons: {
				faArrowRight: faArrowRight,
				faGlobe: faGlobe,
			}
		}
	},
	computed: {
		
	},
	components: {
		FontAwesomeIcon,
	},
	methods: {
		getLangURL: function(lang){
			if(lang == 'en'){
				return '';
			}
			return '/' + lang;
		},
		trackEvent: function(category, action, label){
			this.$ga.event(category, action, label);
		}
	},
	created: function(){
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				delete this.questions[q].selected;
			}
		}
		if(this.bgimage!==false){
			document.body.style.backgroundSize = "cover";
			document.body.style.backgroundRepeat = "no-repeat";
			document.body.style.backgroundImage = "url('images/tools/"+ laravel.tool.id + '/' + this.bgimage +"?id=1')";
		}else{
			document.body.style.backgroundImage = "none";
		}
	}
}
</script>