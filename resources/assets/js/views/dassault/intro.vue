<template>
	<div class="flex-grow">
		<div class="w-full bg-cover bg-center bg-no-repeat pt-12 sm:pt-24 pb-4" :style="`background-image: url('/images/tools/${assessment.tool.id}/homepage.jpg')`">
			<div class="container mx-auto items-center mb-4 px-4 text-dassault-blue">
				<div class="hidden sm:block flex w-full sm:w-auto mt-2 sm:mt-0" v-if="assessment.languages.length > 1">
					<span class="inline-block mr-2 text-grey-dark text-sm"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> {{ $t('dassault.change-langauge') }}:</span>
					<span v-for="(lang, index) in assessment.languages">
						<span v-if="(lang.abbreviation != 'en' && lang.abbreviation != assessment.locale) || (lang.abbreviation == 'en' && assessment.locale!='')">
							<a :href="getLangURL(lang.abbreviation) + '/restart'" class="text-dassault-blue" :title="lang.name">{{ lang.abbreviation.toUpperCase() }}</a>
							<span class="inline-block mx-1" v-if="Object.keys(assessment.languages).length != index+1 ">|</span>
						</span>
					</span>
				</div>
				<div class="w-full sm:w-1/2 sm:mb-24">
					<h1 class="text-dassault-blue font-light leading-tight">{{ $t('dassault.title') }}</h1>
					<h3 class="text-dassault-blue font-light leading-tight">{{ $t('dassault.sub-title') }}</h3>
				</div>
				<div class="flex flex-wrap flex-row-reverse sm:flex-no-wrap sm:flex-row items-center bg-white my-4 p-4 shadow-lg">
					<div class="w-full sm:w-3/5">
						<div v-html="$t('dassault.landing')"></div>
					</div>
					<div class="w-full sm:w-2/5 text-center my-16 sm:m-0">
						<router-link class="sm:inline-block mx-auto bg-dassault-blue hover:text-dassault-blue-light shadow-md text-white py-4 px-6 rounded no-underline" :to="'/questions/1'">{{ $t('dassault.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
					</div>
				</div>
			</div>
		</div>
			
		<div class="container mx-auto mt-6 py-4 px-4 text-dassault-blue">
			<h2 class="font-light leading-tight">{{ $t('dassault.further-insight') }}</h2>
		</div>
		<div class="container mx-auto text-white">
			<div class="flex flex-wrap -mx-3">
				<div class="sm:w-1/2 px-3 mb-6">
					<div class="sm:flex bg-dassault-purple p-4">
						<div class="sm:w-1/2 mr-4 mb-2 sm:mb-0">
							<img class="block" :src="'/images/tools/' + assessment.tool.id + '/infobrief.png'" alt="">
						</div>
						<div class="sm:flex sm:flex-col sm:w-1/2 text-sm">
							<h3 class="leading-tight mb-2">{{ $t('dassault.how-the-wan') }}</h3>
							<p class="mb-2 flex-grow">
								{{ $t('dassault.an-infbrief') }}
							</p>
							<a :href="'/downloads/IDC_EUR145478719_Dassault_Digital_Fitness_infobrief'+ assessment.locale +'.pdf'" target="_blank" class="block bg-white text-center border text-dassault-blue border-white hover:bg-white shadow py-2 px-4 rounded no-underline" @click="trackEvent('asset', 'download', 'Infobrief_'+$i18n.locale)">{{ $t('dassault.download-now') }}</a>
						</div>
					</div>
				</div>
				<div class="sm:w-1/2 px-3">
					<div class="sm:flex bg-dassault-purple p-4">
						<div class="sm:w-1/2 mr-4 mb-2 sm:mb-0">
							<img class="block shadow" :src="'/images/tools/' + assessment.tool.id + '/infobites.png'" alt="">
						</div>
						<div class="sm:flex sm:flex-col sm:w-1/2 text-sm">
							<h3 class="leading-tight mb-2">{{ $t('dassault.driver-of') }}</h3>
							<p class="mb-2 flex-grow">
								{{ $t('dassault.an-infographic') }}
							</p>
							<a :href="'/downloads/IDC_EUR145449199_Dassault_infobites'+ assessment.locale +'.pdf'" target="_blank" class="block bg-white text-center border text-dassault-blue border-white hover:bg-white shadow py-2 px-4 rounded no-underline" @click="trackEvent('asset', 'download', 'Infographic_'+$i18n.locale)">{{ $t('dassault.download-now') }}</a>
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
	}
}
</script>