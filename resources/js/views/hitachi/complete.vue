
<template>
	<div class="flex-grow ieflex1 mt-8">
		<div class="container mx-auto mt-2">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<div class="" v-html="$t('hitachi.finishtxt', { stage: $t('hitachi.'+rating)})"></div>
					<!-- <div v-for="sec, key in theResult">
						<div class="font-bold">{{ key }}</div>
						<div class="">score: {{ sec.score }}</div>
						<div class="mb-4">rating: {{ sec.rating }}</div>
					</div> -->
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start p-2 bg-trend-red text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('hitachi.register')"></div>
							</h2>
							<div class="flex flex-wrap bg-black px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="fname">
											{{ $t('hitachi.leadgen.fname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" name="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname" v-html="$t('hitachi.leadgen.errorFname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="sname">
											{{ $t('hitachi.leadgen.sname') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.sname ? 'border-red' : '']" id="sname" name="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname" v-html="$t('hitachi.leadgen.errorSname')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="email">
											{{ $t('hitachi.leadgen.email') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.email ? 'border-red' : '']" id="email" name="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email" v-html="$t('hitachi.leadgen.errorEmail')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="position">
											{{ $t('hitachi.leadgen.title') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.position ? 'border-red' : '']" id="position" name="title" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.position" v-html="$t('hitachi.leadgen.errorTitle')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:mr-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="company">
											{{ $t('hitachi.leadgen.company') }}
										</label>
										<input class="appearance-none block w-full bg-grey-dark text-black border py-3 px-4 mb-2" :class="[errors.position ? 'border-red' : '']" id="position" name="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.position" v-html="$t('hitachi.leadgen.errorCompany')"></p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="sm:ml-2">
										<label class="block uppercase tracking-wide text-grey-light text-xs font-bold mb-2" for="country">
											{{ $t('hitachi.leadgen.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none rounded-none w-full bg-grey-dark border text-grey-light py-3 px-4 pr-8" :class="[errors.country ? 'border-red' : '']" id="country" name="country" @blur="hasError">
												<option value="" v-html="$t('hitachi.leadgen.pleaseselect')"></option>
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-light">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country" v-html="$t('hitachi.leadgen.errorCountry')"></p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" name="terms" black value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon key="A" :icon="icons.faSquare" v-if="!terms" />
												<font-awesome-icon key="B" :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('hitachi.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('hitachi.leadgen.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center block bg-trend-red hover:bg-white text-white hover:text-trend-red py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('hitachi.leadgen.send') }}</button>
									<!-- <a href="#" disabled class="text-center block bg-trend-red hover:bg-white text-white hover:text-trend-red py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent=""><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('hitachi.leadgen.send') }}</a> -->
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
				title: false,
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
	created: function(){}
}
</script>