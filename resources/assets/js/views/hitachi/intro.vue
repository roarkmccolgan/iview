<template>
	<div class="flex-grow">
		<div class="container mx-auto flex flex-wrap items-center mb-4 py-12 sm:py-20 bg-no-repeat bg-cover bg-right-bottom" :style="`background-image: url('/images/tools/${assessment.tool.id}/cloud-ser-hero-banner-desk.jpg');`">
			<div class="flex-1 text-white p-8">
				<h1 class="font-bold leading-tight">{{ $t('hitachi.title') }}</h1>
				<h3 class="font-light leading-tight">{{ $t('hitachi.sub-title') }}</h3>
				<router-link class="inline-block font-bold uppercase text-center border border-white text-white mt-8 py-2 px-4 no-underline" :to="'/questions/1'">{{ $t('hitachi.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
			</div>
			<div class="hidden sm:block flex w-full sm:w-auto mt-2 sm:mt-0" v-show="assessment.languages.length>1">
				<span class="inline-block mr-2 text-grey-dark text-sm"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> {{ $t('hitachi.change-langauge') }}:</span>
				<span v-for="(lang, index) in assessment.languages">
					<span v-if="(lang.abbreviation != 'en' && lang.abbreviation != assessment.locale) || (lang.abbreviation == 'en' && assessment.locale!='')">
						<a :href="getLangURL(lang.abbreviation) + '/restart'" class="text-ntt-blue" :title="lang.name">{{ lang.abbreviation.toUpperCase() }}</a>
						<span class="inline-block mx-1" v-if="Object.keys(assessment.languages).length != index+1 ">|</span>
					</span>
				</span>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/3">
					<div class="p-4 sm:p-8 sm:flex sm:flex-col sm:h-full sm:mr-4">
						<img :src="`/images/tools/${assessment.tool.id}/er-overview.png`" alt="">
					</div>
				</div>
				<div class="w-full sm:w-2/3 flex items-center justify-center">
					<div class="px-8">
						<div class="mb-8" v-html="$t('hitachi.landing')"></div>
						<router-link class="block font-bold w-full uppercase ml-auto text-center bg-hitachi-red border border-hitachi-red text-white hover:text-hitachi-red hover:bg-white py-4 px-6 no-underline sm:w-1/3" :to="'/questions/1'">{{ $t('hitachi.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>						
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
import faGlobe from '@fortawesome/fontawesome-pro-regular/faGlobe';
export default{
	data () {
		return {
			assessment: laravel,
			bgimage: 'landing.png',
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