<template>
	<div class="flex-1 bg-white">
		<div class="bg-snow-gray">
			<div class="max-w-4xl mx-auto flex flex-wrap items-center py-12 pt-32 sm:py-16 sm:pt-16 bg-contain bg-no-repeat bg-top-right sm:bg-right-bottom" :style="`background-image: url('/images/tools/${assessment.tool.id}/servicenow_agility_framework-removebg.png');`">
				<div class="flex-1 text-snow-dark p-8 pt-32 sm:pt-8 mt-12 sm:mt-0 leading-lose">
					<h1 class="font-snow text-3xl sm:text-4xl" v-html="$t('snow.title')"></h1>
					<h2 class="text-base mb-6 text-snow-light" v-html="$t('snow.sub-title')"></h2>
					<p class="sm:w-1/2 sm:text-lg" v-html="$t('snow.landing-intro')"></p>
					<router-link class="inline-block font-bold uppercase text-center border border-snow-dark text-snow-dark mt-8 py-2 px-4 no-underline" :to="'/questions/1'">{{ $t('snow.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
				</div>
				<div class="hidden sm:block flex w-full sm:w-auto mt-2 sm:mt-0" v-show="assessment.languages.length>1">
					<span class="inline-block mr-2 text-grey-dark text-sm"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> {{ $t('snow.change-langauge') }}:</span>
					<span v-for="(lang, index) in assessment.languages">
						<span v-if="(lang.abbreviation != 'en' && lang.abbreviation != assessment.locale) || (lang.abbreviation == 'en' && assessment.locale!='')">
							<a :href="getLangURL(lang.abbreviation) + '/restart'" class="text-snow-dark" :title="lang.name">{{ lang.abbreviation.toUpperCase() }}</a>
							<span class="inline-block mx-1" v-if="Object.keys(assessment.languages).length != index+1 ">|</span>
						</span>
					</span>
				</div>
			</div>			
		</div>
		<div class="py-12">
			<div class="max-w-4xl mx-auto sm:my-10 flex flex-col-reverse sm:flex-row">
				<img class="w-full sm:w-1/4" :src="`/images/tools/${assessment.tool.id}/report_sample.png`" alt="">
				<div class="px-8 sm:flex-1 sm:ml-12">
					<div class="mb-8 text-snow-dark" v-html="$t('snow.landing')"></div>
					<router-link class="block font-bold w-full uppercase text-center bg-snow-dark border-2 border-snow-dark text-white hover:text-snow-dark hover:bg-white py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('snow.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>						
				</div>
			</div>			
		</div>
	</div>		
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faArrowRight from '@fortawesome/fontawesome-pro-regular/faArrowRight';
import faGlobe from '@fortawesome/fontawesome-pro-regular/faGlobe';
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