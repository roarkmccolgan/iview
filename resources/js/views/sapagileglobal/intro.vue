<template>
	<div class="flex-grow">
		<div class="bg-blackblack">
			<div class="max-w-5xl mx-auto bg-contain sm:bg-cover bg-top bg-no-repeat pt-32 sm:pt-12 sm:pb-4" :style="`background-image: url('/images/tools/${assessment.tool.id}/homepage.jpg')`">
					<div class="container mx-auto">
						<div class="w-full sm:w-1/2 sm:mb-18 px-5">
							<router-link class="flex items-center no-underline text-blackblack sm:text-white hover:text-sap-yellow" :to="'/questions/1'">
								<h1 class="text-blackblack sm:text-white text-3xl sm:text-5xl font-sapagileglobal font-bold leading-none mb-2">{{ $t('sapagileglobal.title') }} </h1>
								<font-awesome-icon class="ml-4" size="2x" :icon="icons.faArrowRight" /></router-link>
							</router-link>
							<!-- <h3 class="text-grey-darkest sm:text-white sm:inline-block text-2xl sm:text-3xl italic font-sapagileglobal font-normal leading-tight mb-2 sm:mb-8">{{ $t('sapagileglobal.sub-title') }}</h3> -->
						</div>					
					</div>
			</div>			
		</div>
		<div class="container mx-auto">
			<div class="p-5 sm:p-10">
				<div class="w-full text-grey-darkest" ref="holder">
					<transition-group
						name="staggered-slide"
						appear
						v-bind:css="false"
						v-on:before-enter="beforeEnter"
						v-on:enter="enter"
						v-on:leave="leave"
						class=""
						tag="div"
					>
					<div v-html="$t('sapagileglobal.landing1')" key="1" data-index="1"></div>
					<p class="mb-2" key="2" data-index="2">
						{{ $t('sapagileglobal.landing-inner') }}
						<v-popover
							offset="16"
							:disabled="!isEnabled"
							placement="auto"
							>
							<span class="underline text-sap-blue cursor-pointer">{{ $t('sapagileglobal.strategic-planning.title') }}</span>
							<template slot="popover">
								<p>
									{{ msg['strategic-planning'] }}
								</p>
							</template>
						</v-popover>, 
						<v-popover
							offset="16"
							:disabled="!isEnabled"
							placement="auto"
							>
							<span class="underline text-sap-blue cursor-pointer">{{ $t('sapagileglobal.processes.title') }}</span>
							<template slot="popover">
								<p>
									{{ msg['processes'] }}
								</p>
							</template>
						</v-popover>, 
						<v-popover
							offset="16"
							:disabled="!isEnabled"
							placement="auto"
							>
							<span class="underline text-sap-blue cursor-pointer">{{ $t('sapagileglobal.customer-relationships.title') }}</span>
							<template slot="popover">
								<p>
									{{ msg['customer-relationships'] }}
								</p>
							</template>
						</v-popover>, 
						<v-popover
							offset="16"
							:disabled="!isEnabled"
							placement="auto"
							>
							<span class="underline text-sap-blue cursor-pointer">{{ $t('sapagileglobal.suppliers-distributors.title') }}</span>
							<template slot="popover">
								<p>
									{{ msg['suppliers-distributors'] }}
								</p>
							</template>
						</v-popover>, 
						<v-popover
							offset="16"
							:disabled="!isEnabled"
							placement="auto"
							>
							<span class="underline text-sap-blue cursor-pointer">{{ $t('sapagileglobal.people-experience.title') }}</span>
							<template slot="popover">
								<p>
									{{ msg['people-experience'] }}
								</p>
							</template>
						</v-popover>
					</p>
					<div v-html="$t('sapagileglobal.landing2')" key="3" data-index="3"></div>
					</transition-group>
			</div>
			<div class="w-full mt-4 sm:mt-8">
					<router-link class="block mx-auto text-center sm:inline-block w-2/3 sm:w-1/3 bg-sap-blue hover:bg-sap-yellow shadow-md text-white py-4 px-6 no-underline" :to="'/questions/1'">{{ $t('sapagileglobal.startbut') }} <font-awesome-icon class="ml-2" :icon="icons.faArrowRight" /></router-link>
				</div>
			</div>
		</div>
	</div>
		
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faArrowRight } from '@fortawesome/pro-regular-svg-icons/faArrowRight';
import faGlobe from '@fortawesome/pro-regular-svg-icons/faGlobe';
export default{
	data () {
		return {
			assessment: laravel,
			icons: {
				faArrowRight: faArrowRight,
				faGlobe: faGlobe,
			},
			showVideo: false,
			msg: {
				'strategic-planning': this.$t('sapagileglobal.strategic-planning.popup'),
				'processes': this.$t('sapagileglobal.processes.popup'),
				'customer-relationships': this.$t('sapagileglobal.customer-relationships.popup'),
				'suppliers-distributors': this.$t('sapagileglobal.suppliers-distributors.popup'),
				'people-experience': this.$t('sapagileglobal.people-experience.popup'),
			},
			isEnabled: true
		}
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
		},
		beforeEnter: function (el) {
			el.style.marginLeft = "100%";
			el.style.opacity = 0;
			el.style.width = window.innerWidth-200+'px';
		},
		enter: function (el, done) {
			var delay = el.dataset.index * (400/3);
			setTimeout(() => {
				Velocity(
					el,
					{
						marginLeft: 0, opacity: 1, width: this.$refs.holder.offsetWidth+'px'
					},
					{
						complete: done
					}
				)
			}, delay);
		},
		leave: function (el, done) {
			Velocity(
				el,
				{
					opacity: 0
				},
				{
					complete: done
				}
			);
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
		});
	}
}
</script>
<style scoped type="text/css">
	.aspect-16x9 {
	  padding-bottom: 56.25%;
	}
</style>