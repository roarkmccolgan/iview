
<template>
	<div class="flex-grow ieflex1 mt-8">
		<div class="container mx-auto mt-2">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<div class="text-snow-dark" v-html="$t('snow.finishtxt', { stage: $t('snow.'+rating)})"></div>
					<!--div v-for="sec, key in theResult">
						<div class="font-bold">{{ key }}</div>
						<div class="">score: {{ sec.score }}</div>
						<div class="mb-4">rating: {{ sec.rating }}</div>
					</div>
					<div class="flex font-bold">
						<span class="inline-block mr-2">question;</span>
						<span class="inline-block mr-2">section;</span>
						<span class="inline-block mr-2">calc;</span>
						<span class="inline-block mr-2">answers;</span>
						<span class="inline-block mr-2">values;</span>
						<span class="inline-block mr-2">score</span>
					</div>
					<div class="flex mb-8" v-for="(scores, res) in theScores">
						<span class="inline-block mr-2">{{res}};</span>
						<span class="inline-block mr-2" v-html="scores.section+';'"></span>
						<span class="inline-block mr-2">{{ scores.calc }};</span>
						<span class="inline-block mr-2" v-if="scores.answers">{{ scores.answers.join(",\n") }};</span>
						<span class="inline-block mr-2" v-if="scores.ave">{{ scores.ave.join() }};</span>
						<span class="inline-block mr-2" v-else-if="scores.norm">{{ scores.norm.join() }};</span>
						<span class="inline-block mr-2" v-else-if="scores.sum">{{ scores.sum.join() }};</span>
						<span class="inline-block mr-2" v-else>{{ scores.val }};</span>
						<span class="inline-block mr-2">{{ scores.val }}</span>
					</div-->
					<form id="mktoForm_4585" class="hidden"></form>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start text-base p-2 bg-snow-dark text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('snow.register')"></div>
							</h2>
							<div class="flex flex-wrap bg-snow-gray px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="fname">
											{{ $t('snow.leadgen.fname') }}
										</label>
										<input class="appearance-none block w-full bg-white text-black border py-3 px-4 mb-2" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" name="fname" v-model="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname" v-html="$t('snow.leadgen.errorFname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="sname">
											{{ $t('snow.leadgen.sname') }}
										</label>
										<input class="appearance-none block w-full bg-white text-black border py-3 px-4 mb-2" :class="[errors.sname ? 'border-red' : '']" id="sname" name="sname" v-model="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname" v-html="$t('snow.leadgen.errorSname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="email">
											{{ $t('snow.leadgen.email') }}
										</label>
										<input class="appearance-none block w-full bg-white text-black border py-3 px-4 mb-2" :class="[errors.email ? 'border-red' : '']" id="email" name="email" v-model="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email" v-html="$t('snow.leadgen.errorEmail')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="title">
											{{ $t('snow.leadgen.title') }}
										</label>
										<input class="appearance-none block w-full bg-white text-black border py-3 px-4 mb-2" :class="[errors.title ? 'border-red' : '']" id="title" name="title" v-model="title" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.title" v-html="$t('snow.leadgen.errorTitle')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="tel">
											{{ $t('snow.leadgen.phone') }}
										</label>
										<input class="appearance-none block w-full bg-white text-black border py-3 px-4 mb-2" :class="[errors.tel ? 'border-red' : '']" id="tel" name="phone" v-model="phone" type="tel" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.tel" v-html="$t('snow.leadgen.errorPhone')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="company">
											{{ $t('snow.leadgen.company') }}
										</label>
										<input class="appearance-none block w-full bg-white text-black border py-3 px-4 mb-2" :class="[errors.company ? 'border-red' : '']" id="company" v-model="company" name="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.company" v-html="$t('snow.leadgen.errorCompany')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="industry">
											{{ $t('snow.leadgen.industry') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-white border text-snow-dark py-3 px-4 pr-8" :class="[errors.industry ? 'border-red' : '']" id="industry" name="extra[industry]" v-model="industry" @blur="hasError">
												<option value="" v-html="$t('snow.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.industry.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-snow-dark">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.industry" v-html="$t('snow.leadgen.errorIndustry')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="interested_in">
											{{ $t('snow.leadgen.interested_in') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-white border text-snow-dark py-3 px-4 pr-8" :class="[errors.interested_in ? 'border-red' : '']" id="interested_in" name="extra[interested_in]" v-model="interested_in" @blur="hasError">
												<option value="" v-html="$t('snow.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.interested_in.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-snow-dark">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.interested_in" v-html="$t('snow.leadgen.errorinterested_in')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="country">
											{{ $t('snow.leadgen.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-white border text-snow-dark py-3 px-4 pr-8" :class="[errors.country ? 'border-red' : '']" id="country" name="country" v-model="country" @blur="hasError">
												<option value="" v-html="$t('snow.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-snow-dark">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country" v-html="$t('snow.leadgen.errorCountry')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2" v-if="country && assessment.fields.state[country]">
										<label class="block uppercase tracking-wide text-snow-dark text-xs font-bold mb-2" for="state">
											{{ $t('snow.leadgen.state') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-white border text-snow-dark py-3 px-4 pr-8" :class="[errors.state ? 'border-red' : '']" id="state" name="extra[state]" v-model="state" @blur="hasError">
												<option value="" v-html="$t('snow.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.state[country]" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-snow-dark">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.state" v-html="$t('snow.leadgen.errorState')"></p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label class="my-2" :class="[marketing ? activeClass : normalClass, errors.marketing ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkMarketing">
										<input class="hidden" type="checkbox" id="marketing" name="extra[marketing]" v-model="marketing">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon key="A" :icon="icons.faSquare" v-if="!marketing" />
												<font-awesome-icon key="B" :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('snow.marketing')"></div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.marketing" v-html="$t('general.errorMarketing')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" name="terms" black value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon key="C" :icon="icons.faSquare" v-if="!terms" />
												<font-awesome-icon key="D" :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('snow.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('snow.leadgen.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center block bg-snow-dark hover:bg-snow-light text-white hover:text-blackblack py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('snow.leadgen.send') }}</button>
									<!--a href="/quiz/thankyou" class="text-center block bg-snow-dark hover:bg-snow-light text-white hover:text-blackblack py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('snow.leadgen.send') }}</a-->
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
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import faEnvelope from '@fortawesome/pro-regular-svg-icons/faEnvelope';
import { faSquare } from '@fortawesome/pro-regular-svg-icons/faSquare';
import { faCheckSquare } from '@fortawesome/pro-regular-svg-icons/faCheckSquare';
import faSyncAlt from '@fortawesome/pro-regular-svg-icons/faSyncAlt';
export default{
	props: ['result','scores'],
	data () {
		return {
			assessment: laravel,
			icons: {
				faEnvelope: faEnvelope,
				faSquare: faSquare,
				faCheckSquare: faCheckSquare,
				faSyncAlt: faSyncAlt,
			},
			marketing: false,
			marketingPhone: false,
			marketingEmail: false,
			terms: false,
			normalClass: {
				'block': true,
				'font-light': true,
				'text-grey-darker': true,
				'bg-white': true,
				'border': true,
				'shadow': true,
				'hover:bg-snow-light': true,
				'hover:text-white': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			activeClass: {
				'block': true,
				'text-white': true,
				'bg-snow-light': true,
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
				industry: false,
				company: false,
				title: false,
				country: false,
				terms: false,
				marketing: false,
				interested_in: false,
			},
			theResult: this.result ? this.result : laravel.result,
			theScores: this.scores ? this.scores : laravel.scores,
			isSubmitting: false,
			fname: null,
			sname: null,
			email: null,
			title: null,
			phone: null,
			company: null,
			industry: null,
			country: null,
			state: null,
			interested_in: null,
			checkingInterval: null,
			marketoForm: null,
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
				if(event.target.selectedIndex == -1 || event.target.options[event.target.selectedIndex].value == '' || event.target.options[event.target.selectedIndex].value == null || event.target.options[event.target.selectedIndex].value == "null"){
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
		checkMarketing: function(){
			this.errors.marketing = !document.getElementById('marketing').checked;
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
				if(this.marketoForm){
					let theDate = new Date();
					let dateFormat = theDate.toLocaleDateString("en-UK",{ month: '2-digit' }) +"/"+ theDate.toLocaleDateString("en-UK",{ day: '2-digit' }) +"/"+ theDate.toLocaleDateString("en-UK",{ year: 'numeric' });
					let vals = {
						Email: this.email,
						FirstName: this.fname,
						LastName: this.sname,
						Phone: this.phone,
						personCompanyInput: this.company,
						Title: this.title,
						Country: this.country,
						State: this.state,
						pMCFComment: JSON.stringify(this.result),
						pMCFDeliveryCampaignID: 40361,
						pMCFMemberStatus: 'Registered',
						explicitConsentDate: dateFormat,
						explicitConsentSource: "IDC Self-Assessment Campaign",
						pMCFIamInterestedin: this.interested_in,
					};
					console.log(vals);
					this.marketoForm.loadForm("//app-ab44.marketo.com", "489-OJL-092", 4585, form => {
						form.vals(vals);
						form.onSuccess(function(values, followUpUrl) {
							console.log('success');
							console.log('formSuccess');
							return false;
						});
						form.submit();
					});
				}
				document.getElementById('leadForm').submit();
			}
		}
	},
	components: {
		FontAwesomeIcon,
	},
	mounted: function(){
		let marketoFormScript = document.createElement('script')
		marketoFormScript.setAttribute('src', '//app-ab44.marketo.com/js/forms2/js/forms2.min.js')
		document.head.appendChild(marketoFormScript)
	},
	created: function(){
		
		this.checkingInterval = setInterval(() => {
			if(window.MktoForms2){
				this.marketoForm = window.MktoForms2;
				clearInterval(this.checkingInterval);
			}
		}, 500)
	},
}
</script>