<template>
	<div class="flex-grow">
		<div class="container mx-auto bg-contain sm:bg-cover bg-top bg-no-repeat pt-36 sm:pt-16 pb-4" :style="`background-image: url('/images/tools/${assessment.tool.id}/homepage.jpg?id=1')`">
				<div class="w-full sm:w-1/2 sm:mb-24 p-5 sm:p-10 sm:bg-white-transparent">
					<h1 class="text-blackblack font-light font-vmware text-3xl sm:text-5xl leading-none mb-2">{{ $t('vmware.title') }}</h1>
					<h3 class="text-blackblack font-vmware leading-tight">{{ $t('vmware.sub-title') }}</h3>
				</div>
		</div>
		<div class="hrcolor p-1"></div>
		<div class="container mx-auto">
			<div class="flex flex-wrap flex-row-reverse sm:flex-no-wrap sm:flex-row items-center bg-white p-5 sm:p-10 sm:pb-16 sm:shadow-lg">
					<div class="w-full sm:w-3/5">
						<div v-html="$t('vmware.landing')"></div>
					</div>
					<div class="w-full mt-5 sm:w-2/5 sm:m-0 text-center">
						<router-link class="inline-block text-xl mx-auto bg-vmware-green hover:bg-vmware-green-light shadow-md text-white py-4 px-6 rounded no-underline" :to="'/questions/1'">{{ $t('vmware.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
					</div>
				</div>
		</div>
		<div class="container mx-auto">
			<div class="bg-white p-5 sm:p-10 sm:pb-16 sm:shadow-lg">
				<h3 class="text-blackblack font-vmware leading-tight mb-2">Don't miss this event</h3>
				<a href="https://www.vmware.com/content/microsites/en/modern-network-events.html" target="_blank" class="block mx-auto"><img src="/images/tools/14/emea-modern-network-header.jpg" alt=""></a>
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