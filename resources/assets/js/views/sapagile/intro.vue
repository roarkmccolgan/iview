<template>
	<div class="flex-grow">
		<div class="mx-auto bg-contain sm:bg-cover bg-top bg-no-repeat pt-32 sm:pt-12 sm:pb-4" :style="`background-image: url('/images/tools/${assessment.tool.id}/homepage.jpg')`">
				<div class="container mx-auto">
					<div class="w-full sm:w-1/2 sm:mb-18 p-5">
						<h1 class="text-blackblack sm:text-white text-3xl sm:text-5xl font-sapagile font-bold leading-none mb-2">{{ $t('sapagile.title') }}</h1>
						<h3 class="text-blackblack sm:text-white text-lg font-sapagile font-normal leading-tight mb-8">{{ $t('sapagile.sub-title') }}</h3>
						<router-link class="block mx-auto text-center sm:inline-block w-2/3 bg-sap-blue hover:bg-sap-orange shadow-md text-white py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('sapagile.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
					</div>					
				</div>
		</div>
		<div class="container mx-auto">
			<div class="flex flex-wrap flex-row-reverse sm:flex-no-wrap sm:flex-row bg-white p-5 sm:p-10">
					<div class="w-full sm:w-3/5">
						<div v-html="$t('sapagile.landing')"></div>
					</div>
					<div class="w-full sm:w-2/5 text-center sm:m-0">
						<img class="w-3/4 mx-auto mb-6" src="/images/tools/15/stat.svg" alt="">
						<router-link class="block mx-auto text-center sm:inline-block w-2/3 bg-sap-blue hover:bg-sap-orange shadow-md text-white py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('sapagile.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
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
			},
			showVideo: false
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
	watch: {
		showVideo: {
			immediate: true,
			handler: showVideo => {
				if (showVideo) {
					document.body.style.setProperty('overflow', 'hidden')
				} else {
					document.body.style.removeProperty('overflow')
				}
			}
		}
	},
	created: function(){
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				delete this.questions[q].selected;
			}
		}
		const listener = document.addEventListener('keydown', e => {
			if (this.showVideo && e.keyCode === 27) {
				this.showVideo = false
			}
		})
		this.$once('hook:beforeDestroy', () => {
			document.removeEventListener('keydown', listener)
			document.body.style.removeProperty('overflow')
		})
	}
}
</script>
<style scoped type="text/css">
	.aspect-16x9 {
	  padding-bottom: 56.25%;
	}
</style>