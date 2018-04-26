<template>
	<div class="flex-grow ieflex1">
		<div class="container mx-auto flex flex-wrap items-center mb-4 py-4">
			<h1 class="font-light leading-tight">Overall Maturity Rating: {{ $t('trend-micro-mssp.'+rating) }}</h1>
		</div>
		<div class="container mx-auto mt-2">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<div class="flex">
						<div class="mr-4">
							<img :src="'/images/tools/9/'+ rating +'.png'" alt="">
						</div>
						<div class="flex-grow" v-html="$t('trend-micro-mssp.finishtxt', { stage: $t('trend-micro-mssp.'+rating)})"></div>
					</div>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start p-2 bg-trend-red text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('trend-micro-mssp.register')"></div>
							</h2>
							<div class="flex flex-wrap bg-black px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="fname">
											{{ $t('trend-micro-mssp.leadgen.fname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" name="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname" v-html="$t('trend-micro-mssp.leadgen.errorFname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="sname">
											{{ $t('trend-micro-mssp.leadgen.sname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.sname ? 'border-red' : '']" id="sname" name="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname" v-html="$t('trend-micro-mssp.leadgen.errorSname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="email">
											{{ $t('trend-micro-mssp.leadgen.email') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.email ? 'border-red' : '']" id="email" name="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email" v-html="$t('trend-micro-mssp.leadgen.errorEmail')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="tel">
											{{ $t('trend-micro-mssp.leadgen.phone') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.tel ? 'border-red' : '']" id="tel" name="phone" type="tel" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.tel" v-html="$t('trend-micro-mssp.leadgen.errorPhone')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="position">
											{{ $t('trend-micro-mssp.leadgen.title') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.position ? 'border-red' : '']" id="position" name="title" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.position" v-html="$t('trend-micro-mssp.leadgen.errorTitle')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="company">
											{{ $t('trend-micro-mssp.leadgen.company') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.company ? 'border-red' : '']" id="company" name="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.company" v-html="$t('trend-micro-mssp.leadgen.errorCompany')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="location">
											{{ $t('trend-micro-mssp.leadgen.location') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.location ? 'border-red' : '']" id="location" name="extra[location]" @blur="hasError">
												<option value="" v-html="$t('trend-micro-mssp.leadgen.pleaseselect')"></option>
												<option value="UK">UK</option>
												<option value="Ireland">Ireland</option>
												<option value="Germany">Germany</option>
												<option value="Austria">Austria</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Belgium">Belgium</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Netherlands">Netherlands</option>
												<option value="France">France</option>
												<option value="Spain">Spain</option>
												<option value="Italy">Italy</option>
												<option value="Sweden">Sweden</option>
												<option value="Norway">Norway</option>
												<option value="Denmark">Denmark</option>
												<option value="Other">Other:</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.location" v-html="$t('trend-micro-mssp.leadgen.errorLocation')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="locations">
											{{ $t('trend-micro-mssp.leadgen.locations') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.locations ? 'border-red' : '']" id="locations" name="extra[locations]" @blur="hasError">
												<option value="" v-html="$t('trend-micro-mssp.leadgen.pleaseselect')"></option>
												<option value="Only 1">Only 1</option>
												<option value="Between 2 and 10">Between 2 and 10</option>
												<option value="Between 11 and 20">Between 11 and 20</option>
												<option value="Between 21 and 25">Between 21 and 25</option>
												<option value="More than 25">More than 25</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.locations" v-html="$t('trend-micro-mssp.leadgen.errorLocations')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="company_type">
											{{ $t('trend-micro-mssp.leadgen.company_type') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.company_type ? 'border-red' : '']" id="company_type" name="extra[industry]" @blur="hasError">
												<option value="" v-html="$t('trend-micro-mssp.leadgen.pleaseselect')"></option>
												<option value="MSP">MSP</option>
												<option value="Reseller">Reseller</option>
												<option value="Systems integrator">Systems integrator</option>
												<option value="Distributor (end)">Distributor (end)</option>
												<option value="Telco">Telco</option>
												<option value="Digital agency">Digital agency</option>
												<option value="Other">Other</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.company_type" v-html="$t('trend-micro-mssp.leadgen.errorCompanyType')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="partner">
											{{ $t('trend-micro-mssp.leadgen.partner') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.partner ? 'border-red' : '']" id="partner" name="extra[partner]" @blur="hasError">
												<option value="" v-html="$t('trend-micro-mssp.leadgen.pleaseselect')"></option>
												<option value="Yes">Yes</option>
												<option value="No, but we are considering becoming one">No, but we are considering becoming one</option>
												<option value="No, we are not considering becoming one">No, we are not considering becoming one</option>
												<option value="No, we have been one before">No, we have been one before</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.partner" v-html="$t('trend-micro-mssp.leadgen.errorPartner')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="sell">
											{{ $t('trend-micro-mssp.leadgen.sell') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.sell ? 'border-red' : '']" id="sell" name="extra[sell]" @blur="hasError">
												<option value="" v-html="$t('trend-micro-mssp.leadgen.pleaseselect')"></option>
												<option value="Cloud-based productivity suites, e.g., Office 365, Google G-Suite">Cloud-based productivity suites, e.g., Office 365, Google G-Suite</option>
												<option value="Other SaaS/cloud applications, e.g., Salesforce, Sage">Other SaaS/cloud applications, e.g., Salesforce, Sage</option>
												<option value="Managed services, e.g., managed network services, managed support services">Managed services, e.g., managed network services, managed support services</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.sell" v-html="$t('trend-micro-mssp.leadgen.errorSell')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="country">
											{{ $t('trend-micro-mssp.leadgen.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.country ? 'border-red' : '']" id="country" name="country" @blur="hasError">
												<option value="" v-html="$t('trend-micro-mssp.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country" v-html="$t('trend-micro-mssp.leadgen.errorCountry')"></p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" black value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon :icon="icons.faSquare" v-if="!terms" />
												<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('trend-micro-mssp.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('trend-micro-mssp.leadgen.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center block bg-trend-red hover:bg-white text-white hover:text-trend-red py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors" v-show="false"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('trend-micro-mssp.leadgen.send') }}</button>
									<a href="/downloads/trend-output-report.pdf" target="_black" :disabled="isSubmitting" class="text-center inline-block bg-trend-red hover:bg-white text-white hover:text-trend-red py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('trend-micro-mssp.leadgen.send') }}</a>
								</div>
							</div>
						</form>
					</div>
						
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faEnvelope from '@fortawesome/fontawesome-pro-regular/faEnvelope';
import faSquare from '@fortawesome/fontawesome-pro-regular/faSquare';
import faCheckSquare from '@fortawesome/fontawesome-pro-regular/faCheckSquare';
import faSyncAlt from '@fortawesome/fontawesome-pro-regular/faSyncAlt';
export default{
	props: ['result'],
	data () {
		return {
			assessment: laravel,
			icons: {
				faEnvelope: faEnvelope,
				faSquare: faSquare,
				faCheckSquare: faCheckSquare,
				faSyncAlt: faSyncAlt,
			},
			terms: false,
			normalClass: {
				'block': true,
				'font-light': true,
				'text-grey-darker': true,
				'bg-white': true,
				'border': true,
				'shadow': true,
				'hover:bg-grey-dark': true,
				'hover:text-white': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			activeClass: {
				'block': true,
				'text-white': true,
				'bg-grey-dark': true,
				'border': true,
				'shadow': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			errors: {
				fname: false,
				sname: false,
				email: false,
				tel: false,
				company: false,
				position: false,
				company_type: false,
				location: false,
				locations: false,
				partner: false,
				sell: false,
				country: false,
				terms: false
			},
			theResult: this.result ? this.result : laravel.result,
			isSubmitting: false,
		}
	},
	computed: {
		rating: function(){
			return this.theResult ? this.theResult.overall.rating : 'none';
		},
		getToken: function(){
			return this.$cookies.get('XSRF-TOKEN');
		}
	},
	methods: {
		hasError: function(event){
			if(event.target.type == "text" || event.target.type == "email"){
				if(event.target.value == ''){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}
			if(event.target.type == "tel"){
				var numIntegers = event.target.value.replace(/[^0-9]/g,"").length;
				if(event.target.value == '' || numIntegers < 5){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}
			
			if(event.target.type == "select-one"){
				if(event.target.options[event.target.selectedIndex].value == '' || event.target.options[event.target.selectedIndex].value == null || event.target.options[event.target.selectedIndex].value == "null"){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}

			if(event.target.type == "checkbox"){
				console.log(event.target.checked);
				if(event.target.checked === false){
					this.errors[event.target.id] = true;
				}else{
					this.errors[event.target.id] = false;
				}
			}
		},
		checkTerms: function(){
			console.log(document.getElementById('terms').checked);
			this.errors.terms = !document.getElementById('terms').checked;
		},
		checkForErrors: function(){

			var errors = false;
			for (var key in this.errors) {
		        var element = document.getElementById(key);
		        if(element !== null){
		        	var event = {
		        		target: element
		        	}
		        	this.hasError(event);
		        }
			}
			for (var key in this.errors) {
				if(this.errors[key]===true){
					errors = true;
					break;
				}
			}
			if(errors == false){
				this.isSubmitting = true;
				document.getElementById('leadForm').submit();
			}
		}
	},
	components: {
		FontAwesomeIcon,
	},
	created: function(){

	}
}
</script>