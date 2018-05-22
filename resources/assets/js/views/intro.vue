<template>
	<div class="flex-grow">
		<div class="container flex mx-auto px-4">
			<div class="mt-4">
				<a href="http://www.eu.ntt.com" target="_blank"><img src="/images/tools/8/ntt.svg" class="w-48" alt=""></a>
			</div>
		</div>
		<div class="container mx-auto flex flex-wrap items-center mb-4 py-4 px-4 text-grey-darker">
			<div class="flex-1">
				<h1 class="font-light leading-tight">{{ $t('ntt-sdwan.title') }}</h1>
				<h3 class="font-light leading-tight">{{ $t('ntt-sdwan.sub-title') }}</h3>
			</div>
			<div class="hidden sm:block flex w-full sm:w-auto mt-2 sm:mt-0">
				<span class="inline-block mr-2 text-grey-dark text-sm"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> {{ $t('ntt-sdwan.change-langauge') }}:</span>
				<span v-for="(lang, index) in assessment.languages">
					<span v-if="(lang.abbreviation != 'en' && lang.abbreviation != assessment.locale) || (lang.abbreviation == 'en' && assessment.locale!='')">
						<a :href="getLangURL(lang.abbreviation) + '/restart'" class="text-ntt-blue" :title="lang.name">{{ lang.abbreviation.toUpperCase() }}</a>
						<span class="inline-block mx-1" v-if="Object.keys(assessment.languages).length != index+1 ">|</span>
					</span>
				</span>
			</div>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<img class="max-w-full" :src="'/images/tools/' + assessment.tool.id + '/nttsdwan.jpg'" alt="">
					<div class="absolute pin sm:hidden flex flex-col items-center justify-center">
						<router-link class="bg-ntt-gold hover:bg-ntt-blue text-ntt-blue hover:text-white shadow py-4 px-6 rounded no-underline" :to="'/questions/1'">{{ $t('ntt-sdwan.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
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
		<div class="container mx-auto mt-6 py-4 px-4 text-grey-darker">
			<h2 class="font-light leading-tight">{{ $t('ntt-sdwan.further-insight') }}</h2>
		</div>
		<div class="container mx-auto text-grey-darker">
			<div class="flex flex-wrap -mx-3">
				<div class="sm:w-1/2 px-3 mb-6">
					<div class="sm:flex bg-white border-t border-b p-6 sm:border sm:rounded shadow">
						<div class="sm:w-1/2 mr-4 mb-2 sm:mb-0">
							<img class="block mx-auto" :src="'/images/tools/' + assessment.tool.id + '/infobrief_'+$i18n.locale+'.png'" alt="">
						</div>
						<div class="sm:flex sm:flex-col sm:w-1/2 text-sm">
							<h3 class="leading-tight mb-2">{{ $t('ntt-sdwan.how-the-wan') }}</h3>
							<p class="mb-2 flex-grow">
								{{ $t('ntt-sdwan.an-infbrief') }}
							</p>
							<a :href="'/downloads/NTT_IDC_WAN_Infobrief_2018'+ assessment.locale +'.pdf'" target="_blank" class="block text-center border text-ntt-blue border-ntt-blue hover:bg-ntt-blue hover:text-ntt-gold shadow py-2 px-4 rounded no-underline" @click="trackEvent('asset', 'download', 'Infobrief_'+$i18n.locale)">{{ $t('ntt-sdwan.download-now') }}</a>
						</div>
					</div>
				</div>
				<div class="sm:w-1/2 px-3">
					<div class="sm:flex bg-white border-t border-b p-6 sm:border sm:rounded shadow">
						<div class="sm:w-1/2 mr-4 mb-2 sm:mb-0">
							<img class="block mx-auto" :src="'/images/tools/' + assessment.tool.id + '/infographic_'+$i18n.locale+'.png'" alt="">
						</div>
						<div class="sm:flex sm:flex-col sm:w-1/2 text-sm">
							<h3 class="leading-tight mb-2">{{ $t('ntt-sdwan.driver-of') }}</h3>
							<p class="mb-2 flex-grow">
								{{ $t('ntt-sdwan.an-infographic') }}
							</p>
							<a :href="'/downloads/NTT_IDC_WAN_Infographic_2018'+ assessment.locale +'.pdf'" target="_blank" class="block text-center border text-ntt-blue border-ntt-blue hover:bg-ntt-blue hover:text-ntt-gold shadow py-2 px-4 rounded no-underline" @click="trackEvent('asset', 'download', 'Infographic_'+$i18n.locale)">{{ $t('ntt-sdwan.download-now') }}</a>
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