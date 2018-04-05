<template>
	<div class="flex-grow ieflex1">
		<div class="container mx-auto mt-6 mb-4 py-4 px-4 text-grey-darker">
			<h1 class="font-light leading-tight">{{assessment.tool.title}}</h1>
			<h3 class="font-light leading-tight">{{assessment.tool.sub_title}}</h3>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative" v-html="$t('ntt-sdwan.finishtxt', { image: '/images/tools/' + assessment.tool.id + '/graph' + rating  + '.png'})">
					
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start p-2 bg-ntt-blue text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('ntt-sdwan.register')"></div>
							</h2>
							<div class="flex flex-wrap bg-white shadow-md rounded rounded-t-none px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="fname">
											{{ $t('general.fname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" name="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname" v-html="$t('general.errorFname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sname">
											{{ $t('general.sname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.sname ? 'border-red' : '']" id="sname" name="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname" v-html="$t('general.errorSname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
											{{ $t('general.email') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.email ? 'border-red' : '']" id="email" name="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email" v-html="$t('general.errorEmail')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="tel">
											{{ $t('general.phone') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.tel ? 'border-red' : '']" id="tel" name="phone" type="tel" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.tel" v-html="$t('general.errorPhone')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="position">
											{{ $t('general.title') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.position ? 'border-red' : '']" id="position" name="title" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.position" v-html="$t('general.errorTitle')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="company">
											{{ $t('general.company') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.company ? 'border-red' : '']" id="company" name="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.company" v-html="$t('general.errorCompany')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="company_size">
											{{ $t('general.employees') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.size ? 'border-red' : '']" id="company_size" name="extra[company_size]" @blur="hasError">
												<option value="" v-html="$t('general.pleaseselect')"></option>
												<option value="Fewer than 500">Fewer than 500 </option>
												<option value="500 to 999">500 to 999</option>
												<option value="1,000 to 4,999">1,000 to 4,999</option>
												<option value="5,000 or more">5,000 or more</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.company_size" v-html="$t('general.errorEmployees')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="turnover">
											{{ $t('general.turnover') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.turnover ? 'border-red' : '']" id="turnover" name="extra[turnover]" @blur="hasError">
												<option value="" v-html="$t('general.pleaseselect')"></option>
												<option value="Less than €100 million">Less than €100 million</option>
												<option value="€100-250 million">€100-250 million</option>
												<option value="€250 million - €1 billion">€250 million - €1 billion</option>
												<option value="More than €1 billion">More than €1 billion</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.turnover" v-html="$t('general.errorTurnover')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="business">
											{{ $t('general.industry') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.business ? 'border-red' : '']" id="business" name="extra[industry]" @blur="hasError">
												<option value="" v-html="$t('general.pleaseselect')"></option>
												<option value="Banking &amp; other financial services" v-html="$t('general.banking')"></option>
												<option value="Insurance" v-html="$t('general.insurance')"></option>
												<option value="Retail trade" v-html="$t('general.retail')"></option>
												<option value="Wholesale trade" v-html="$t('general.wholesale')"></option>
												<option value="Business/Professional services" v-html="$t('general.professional')"></option>
												<option value="Software and IT services" v-html="$t('general.software')"></option>
												<option value="Media" v-html="$t('general.media')"></option>
												<option value="Manufacturing" v-html="$t('general.manufacturing')"></option>
												<option value="Transportation" v-html="$t('general.transportation')"></option>
												<option value="Utilities &amp; Oil/Gas" v-html="$t('general.utilities')"></option>
												<option value="Private education" v-html="$t('general.education')"></option>
												<option value="Private healthcare service providers" v-html="$t('general.healthcare')"></option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.business" v-html="$t('general.errorIndustry')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="country">
											{{ $t('general.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.country ? 'border-red' : '']" id="country" name="country" @blur="hasError">
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country" v-html="$t('general.errorCountry')"></p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" name="terms" value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
													<font-awesome-icon :icon="icons.faSquare" v-if="!terms" />
													<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('ntt-sdwan.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('general.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center block bg-ntt-blue hover:text-ntt-gold shadow-md text-white py-4 px-6 rounded no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('general.send') }}</button>
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
				'hover:bg-grey-lighter': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			activeClass: {
				'block': true,
				'text-ntt-blue': true,
				'bg-yellow-lighter': true,
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
				business: false,
				company_size: false,
				turnover: false,
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