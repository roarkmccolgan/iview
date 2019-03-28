<template>
	<div class="flex-grow">
		<div class="container mx-auto flex flex-wrap items-center mb-4 py-4">
			<div class="flex-1 px-2">
				<h1 class="font-light leading-tight">{{ $t('nttdatadx.title') }}</h1>
				<h3 class="font-light leading-tight text-grey-dark">{{ $t('nttdatadx.sub-title') }}</h3>
			</div>
			<div class="hidden sm:block flex w-full sm:w-auto mt-2 sm:mt-0" v-show="assessment.languages.length>1">
				<span class="inline-block mr-2 text-grey-dark text-sm"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> {{ $t('nttdatadx.change-langauge') }}:</span>
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
				<div class="w-full sm:w-1/2 relative">
					<img class="max-w-full" :src="'/images/tools/' + assessment.tool.id + '/891021854.jpg'" alt="">
					<div class="absolute pin sm:hidden flex flex-col items-center justify-center">
						<router-link class="bg-ntt-data-yellow text-black hover:bg-white shadow-lg py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('nttdatadx.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
					</div>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="px-8 py-2 sm:flex sm:flex-col sm:h-full sm:mr-4">
						<div class="text-grey-light" v-html="$t('nttdatadx.landing')"></div>
						<div class="mt-8">
							<router-link class="hidden sm:block text-center bg-ntt-data-yellow text-black hover:bg-white shadow-md py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('nttdatadx.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
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