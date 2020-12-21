
<template>
	<div class="flex-grow ieflex1 mt-8">
		<div class="container mx-auto mt-2">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<div class="" v-html="$t('redhat.finishtxt', { stage: $t('redhat.'+rating)})"></div>
					<!-- <div v-for="sec, key in theResult">
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
					</div> -->
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start p-2 bg-blackblack text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('redhat.register')"></div>
							</h2>
							<div class="flex flex-wrap bg-black px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="fname">
											{{ $t('redhat.leadgen.fname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" name="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname" v-html="$t('redhat.leadgen.errorFname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="sname">
											{{ $t('redhat.leadgen.sname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.sname ? 'border-red' : '']" id="sname" name="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname" v-html="$t('redhat.leadgen.errorSname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="email">
											{{ $t('redhat.leadgen.email') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.email ? 'border-red' : '']" id="email" name="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email" v-html="$t('redhat.leadgen.errorEmail')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="position">
											{{ $t('redhat.leadgen.title') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.title ? 'border-red' : '']" id="title" name="title" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.title" v-html="$t('redhat.leadgen.errorTitle')"></p>
									</div>
								</div>
								
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="phone_number">
											{{ $t('redhat.leadgen.phone') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.phone_number ? 'border-red' : '']" v-model="phone_number" ref="phone_number" id="phone_number" name="phone_number" type="tel" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.phone_number" v-html="$t('redhat.leadgen.errorPhone')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="company">
											{{ $t('redhat.leadgen.company') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.company ? 'border-red' : '']" id="company" name="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.company" v-html="$t('redhat.leadgen.errorCompany')"></p>
									</div>
								</div>
								<div class="mb-6">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="country">
											{{ $t('redhat.leadgen.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-black py-3 px-4 pr-8" :class="[errors.country ? 'border-red' : '']" id="country" name="country" @blur="hasError">
												<option value="" v-html="$t('redhat.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country" v-html="$t('redhat.leadgen.errorCountry')"></p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label :class="[marketing ? activeClass : normalClass, errors.marketing ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()">
										<input class="hidden" type="checkbox" id="marketing" name="marketing" v-model="marketing">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon key="A" :icon="icons.faSquare" v-if="!marketing" />
												<font-awesome-icon key="B" :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('redhat.marketing')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.marketing" v-html="$t('redhat.leadgen.errorAccept')"></p>
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
											<div class="flex-grow" v-html="$t('redhat.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('redhat.leadgen.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center w-full block bg-redhat hover:bg-redhat-dark text-white hover:text-white py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('redhat.leadgen.send') }}</button>
									<!-- <a href="/quiz/thankyou" class="text-center block bg-redhat hover:bg-redhat-dark text-white hover:text-white py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('snow.leadgen.send') }}</a> -->
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
import { faEnvelope } from '@fortawesome/pro-regular-svg-icons/faEnvelope';
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
			phone_code: '',
			phone_number: '',
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
				'py-2': true,
				'px-3': true,
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
				phone_number: false,
				phone_code: false,
				company: false,
				title: false,
				country: false,
				terms: false,
				marketing: false
			},
			theResult: this.result ? this.result : laravel.result,
			theScores: this.scores ? this.scores : laravel.scores,
			isSubmitting: false,
		}
	},
	computed: {
		rating: function(){
			return this.theResult ? this.theResult.overall.rating : 'none';
		},
		getToken: function(){
			return this.$cookies.get('XSRF-TOKEN');
		},
		completeNumber: function(){
			return this.phone_code +' '+this.phone_number;
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
				document.getElementById('leadForm').submit();
			}
		}
	},
	components: {
		FontAwesomeIcon,
	},
	created: function(){}
}
</script>