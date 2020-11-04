<template>
	<div class="flex-1 bg-white">
		<div class="bg-snow-gray">
			<div class="max-w-4xl mx-auto flex flex-wrap items-center py-12 pt-32 sm:py-16 sm:pt-16 bg-contain bg-no-repeat bg-top-right sm:bg-right-bottom" :style="`background-image: url('/images/tools/${assessment.tool.id}/servicenow_agility_framework-removebg.png');`">
				<div class="flex-1 text-snow-dark p-8 pt-32 sm:pt-8 mt-12 sm:mt-0 leading-lose">
					<h1 class="font-snow text-3xl sm:text-4xl" v-html="$t('snow.title')"></h1>
					<h2 class="text-base mb-6 text-snow-light" v-html="$t('snow.sub-title')"></h2>
					<p class="sm:w-1/2 sm:text-lg" v-html="$t('snow.landing-intro')"></p>
					<div class="bg-snow-light my-4 p-4 sm:flex items-center text-white font-bold sm:w-1/2">
						<div class="sm:w-3/5">
							IDC Research found that 72% of organizations consider agility to be of strategic importance to their future success.<br>
							So where does your organization sit? And critically, how does this compare to other organizations in your sector?
						</div>
						<div class="flex mt-4 sm:mt-0 flex-row items-center sm:justify-end sm:w-2/5">
							<svg class="w-32 sm:w-32 sm:h-32 sm:ml-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.88 105.88">
								<g>
									<g>
										<path d="M39.62,61.52,45,49.8h-7V47.26H48.18v1.9l-5.4,12.36Z" transform="translate(-3.02 -2.95)" style="fill: #314041"/>
										<path d="M59.54,53.34c0,2.81-.6,4.91-1.78,6.3a6.7,6.7,0,0,1-5.38,2.08,10,10,0,0,1-1.92-.14V59.16a7.35,7.35,0,0,0,1.71.2,6,6,0,0,0,2.49-.44,3.14,3.14,0,0,0,1.5-1.4,6.19,6.19,0,0,0,.59-2.62h-.11a3.42,3.42,0,0,1-1.31,1.29,4.11,4.11,0,0,1-1.86.37,3.76,3.76,0,0,1-2.94-1.2A4.8,4.8,0,0,1,49.46,52a5,5,0,0,1,1.3-3.63,4.74,4.74,0,0,1,3.55-1.33,5.14,5.14,0,0,1,2.77.74A4.72,4.72,0,0,1,58.9,50,8.07,8.07,0,0,1,59.54,53.34ZM54.37,49.5a1.78,1.78,0,0,0-1.46.64A2.88,2.88,0,0,0,52.38,52a2.56,2.56,0,0,0,.48,1.64,1.75,1.75,0,0,0,1.45.61,2.26,2.26,0,0,0,1.58-.6,1.86,1.86,0,0,0,.65-1.39,3.12,3.12,0,0,0-.61-2A1.9,1.9,0,0,0,54.37,49.5Z" transform="translate(-3.02 -2.95)" style="fill: #314041"/>
										<path d="M67.63,51.5a5.5,5.5,0,0,1-.87,3.38A3,3,0,0,1,64.22,56a2.93,2.93,0,0,1-2.49-1.15,5.44,5.44,0,0,1-.88-3.35q0-4.45,3.37-4.46a3,3,0,0,1,2.53,1.16A5.34,5.34,0,0,1,67.63,51.5Zm-4.32,0a5.67,5.67,0,0,0,.22,1.85c.14.41.38.61.71.61q.93,0,.93-2.46c0-1.63-.31-2.44-.93-2.44a.75.75,0,0,0-.71.6A5.61,5.61,0,0,0,63.31,51.52Zm11-4.28L66.43,61.52H64.09L72,47.24Zm3.28,10a5.44,5.44,0,0,1-.87,3.36,3,3,0,0,1-2.54,1.13,2.93,2.93,0,0,1-2.49-1.16,5.39,5.39,0,0,1-.88-3.33q0-4.47,3.37-4.47a3,3,0,0,1,2.53,1.16A5.35,5.35,0,0,1,77.63,57.21Zm-4.32,0a5.79,5.79,0,0,0,.22,1.86c.14.4.38.61.71.61.62,0,.93-.82.93-2.47s-.31-2.44-.93-2.44a.75.75,0,0,0-.71.6A5.65,5.65,0,0,0,73.31,57.22Z" transform="translate(-3.02 -2.95)" style="fill: #314041"/>
									</g>
									<path d="M56,20.48V3A52.5,52.5,0,0,0,4.6,43.08l17,4.24A35.41,35.41,0,0,1,56,20.48Z" transform="translate(-3.02 -2.95)" style="fill: #e3e2e3"/>
									<path d="M56,3V20.48A35.4,35.4,0,1,1,21.61,47.32l-17-4.24A48.56,48.56,0,0,0,3,55.89,52.94,52.94,0,1,0,56,3Z" transform="translate(-3.02 -2.95)" style="fill: #2A3E40"/>
								</g>
							</svg>
							<span class="text-snow-dark text-sm flex-1 leading-tight">79% of organizations are still at the early stages in their agility journey</span>
						</div>
					</div>
					<router-link class="inline-block font-bold uppercase text-center bg-snow-dark border-2 border-snow-dark text-white hover:text-snow-dark hover:bg-white py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('snow.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
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
					<router-link class="block w-full font-bold uppercase text-center border border-snow-dark text-snow-dark mt-8 py-2 px-4 no-underline" :to="'/questions/1'">{{ $t('snow.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>						
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