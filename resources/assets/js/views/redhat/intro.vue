<template>
	<div class="flex-grow">
		
		<div class="container mx-auto flex flex-wrap items-center mb-4 py-4 sm:py-10">
			<div class="flex-1 text-blackblack p-8">
				<h1 class="font-normal leading-tight text-3xl" v-html="$t('redhat.title')"></h1>
				<div class="my-8 text-lg leading-snug" v-html="$t('redhat.intro')"></div>
				<router-link class="inline-block font-bold text-lg text-center text-white bg-redhat mt-8 py-3 px-6 rounded no-underline hover:bg-redhat-dark" :to="'/questions/1'">{{ $t('redhat.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
			</div>
			<div class="sm:w-1/2">
				<img :src="`/images/tools/${assessment.tool.id}/undraw_finance_0bdk.svg`" alt="">
			</div>
			<div class="hidden sm:block flex w-full sm:w-auto mt-2 sm:mt-0" v-show="assessment.languages.length>1">
				<span class="inline-block mr-2 text-grey-dark text-sm"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> {{ $t('redhat.change-langauge') }}:</span>
				<span v-for="(lang, index) in assessment.languages">
					<span v-if="(lang.abbreviation != 'en' && lang.abbreviation != assessment.locale) || (lang.abbreviation == 'en' && assessment.locale!='')">
						<a :href="getLangURL(lang.abbreviation) + '/restart'" class="text-redhat-blue" :title="lang.name">{{ lang.abbreviation.toUpperCase() }}</a>
						<span class="inline-block mx-1" v-if="Object.keys(assessment.languages).length != index+1 ">|</span>
					</span>
				</span>
			</div>
		</div>
		<div class="bg-redhat-gray-light py-10">
			<div class="container mx-auto text-lg" v-html="$t('redhat.landing-1')"></div>
		</div>
		<div class="container mx-auto py-5">
			<div class="flex flex-col sm:flex-row sm:items-center">
	            <div class="sm:w-2/5">
	                <img src="/images/tools/19/intro_graph.svg" alt="" class="w-full" />
	            </div>
	            <div class="w-full sm:w-1/2 p-4">
	                <p class="">
	                    {{ $t('redhat.landing-2')}}
	                </p>
	                <p class="my-4 font-bold italic">
	                    {{ $t('redhat.landing-3')}}
	                </p>
	                <router-link class="inline-block font-bold text-lg text-center text-white bg-blackblack mt-8 py-3 px-6 rounded no-underline hover:bg-black" :to="'/questions/1'">{{ $t('redhat.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
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