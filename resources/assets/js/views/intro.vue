<template>
	<div class="flex-grow">
		<div class="container mx-auto flex items-center mt-6 mb-4 py-4 px-4 text-grey-darker">
			<div class="flex-1">
				<h1 class="font-light leading-tight">{{assessment.tool.title}}</h1>
				<h3 class="font-light leading-tight">{{assessment.tool.sub_title}}</h3>
			</div>
			<div class="hidden sm:block flex">
				<span class="inline-block mr-2 text-grey-dark text-sm flex-grow"><font-awesome-icon class="ml-2" :icon="icons.faGlobe" /> Change language:</span>
				
				<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="French">FR</a> |</span>
				<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="German">DE</a> |</span>
				<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="Spanish">ES</a></span>
			</div>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="sm:hidden mb-2 text-right">
					<span class="inline-block mr-2 text-grey-dark text-sm">Change language:</span>
					<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="French">FR</a> |</span>
					<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="German">DE</a> |</span>
					<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="Spanish">ES</a></span>
				</div>
				<div class="w-full sm:w-1/2 relative">
					<img class="max-w-full" :src="'/images/tools/' + assessment.tool.id + '/nttsdwan.jpg'" alt="">
					<div class="absolute pin sm:hidden flex flex-col items-center justify-center">
						<router-link class="bg-ntt-gold hover:bg-ntt-blue text-ntt-blue hover:text-white shadow py-4 px-6 rounded no-underline" :to="'/questions/1'">Start Assessment <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
					</div>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<div v-html="$t('ntt-sdwan.landing')">
						</div>
						<div class="mt-8 text-center">
							<router-link class="hidden sm:inline-block bg-ntt-blue hover:text-ntt-gold shadow-md text-white py-4 px-6 rounded no-underline" :to="'/questions/1'">{{ $t('ntt-sdwan.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>

							<div class="hidden sm:block mt-4">
								<span class="inline-block mr-2 text-grey-dark text-sm">Change language:</span>
								<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="French">FR</a> |</span>
								<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="German">DE</a> |</span>
								<span><a href="#" class="cursor-not-allowed text-ntt-blue" title="Spanish">ES</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mt-6 py-4 px-4 text-grey-darker">
			<h2 class="font-light leading-tight">Further Insight</h2>
		</div>
		<div class="container mx-auto text-grey-darker">
			<div class="flex flex-wrap -mx-3">
				<div class="sm:w-1/2 px-3 mb-6">
					<div class="sm:flex bg-white border-t border-b p-6 sm:border sm:rounded shadow">
						<div class="sm:w-1/2 mr-4 mb-2 sm:mb-0">
							<img class="block mx-auto" :src="'/images/tools/' + assessment.tool.id + '/infobrief_'+$i18n.locale+'.png'" alt="">
						</div>
						<div class="sm:flex sm:flex-col sm:w-1/2 text-sm">
							<h3 class="leading-tight mb-2">How the WAN is Driving Digital Transformation</h3>
							<p class="mb-2 flex-grow">
								An Infobrief by IDC
							</p>
							<a href="/downloads/NTT_IDC_WAN_Infobrief_2018.pdf" target="_blank" class="block text-center border text-ntt-blue border-ntt-blue hover:bg-ntt-blue hover:text-ntt-gold shadow py-2 px-4 rounded no-underline">Download Now</a>
						</div>
					</div>
				</div>
				<div class="sm:w-1/2 px-3">
					<div class="sm:flex bg-white border-t border-b p-6 sm:border sm:rounded shadow">
						<div class="sm:w-1/2 mr-4 mb-2 sm:mb-0">
							<img class="block mx-auto" :src="'/images/tools/' + assessment.tool.id + '/infographic_'+$i18n.locale+'.png'" alt="">
						</div>
						<div class="sm:flex sm:flex-col sm:w-1/2 text-sm">
							<h3 class="leading-tight mb-2">SD-WAN: A Driver of Digital Transformation</h3>
							<p class="mb-2 flex-grow">
								An Infographic by IDC
							</p>
							<a href="/downloads/NTT_IDC_WAN_Infographic_2018.pdf" target="_blank" class="block text-center border text-ntt-blue border-ntt-blue hover:bg-ntt-blue hover:text-ntt-gold shadow py-2 px-4 rounded no-underline">Download Now</a>
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
	created: function(){
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				delete this.questions[q].selected;
			}
		}
	}
}
</script>