<template>
	<div class="flex-grow">
		<div class="container mx-auto bg-white border-t border-b mt-6 mb-4 py-4 px-4 sm:border sm:rounded shadow text-grey-darker">
			<h1 class="font-light leading-tight">{{assessment.tool.title}}</h1>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative"> 
					<!-- ntt-sdwan.finishtxt -->
					<h2 class="font-light leading-tight mb-4">Thank you for completing the network maturity assessment.</h2>
					<h4 class="font-light leading-tight mb-2">How you scored</h4>
					<img class="max-w-full" :src="'/images/tools/' + assessment.tool.id + '/graph' + result.overall.rating + '.png'" alt="">
					<p class="font-semibold mb-4 mt-4">Please tell us a little about yourself and immediately receive your personalized report including:</p>
					<ul class="mb-4">
						<li>How you compare against your peers based on industry, organizational size, and geographic region</li>
						<li>Where to focus your network readiness efforts with essential guidance</li>
						<li>Why the associated business benefits will make this a business priority today</li>
					</ul>
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" action="/pdf" method="get" v-on:submit.prevent="checkForErrors">
							<h2 class="flex justify-start p-2 bg-ntt-blue text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div>Register now to receive your personalized report</div>
							</h2>
							<div class="flex flex-wrap bg-white shadow-md rounded rounded-t-none px-8 py-8 pb-2 mb-4">
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="fname">
											First Name
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3" :class="[errors.fname ? 'border-red' : '']" type="text" id="fname" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.fname">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sname">
											Last Name
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4" :class="[errors.sname ? 'border-red' : '']" id="sname" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.sname">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
											Email
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4" :class="[errors.email ? 'border-red' : '']" id="email" type="email" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.email">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="tel">
											Phone
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4" :class="[errors.tel ? 'border-red' : '']" id="tel" type="tel" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.tel">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="company">
											Company
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4" :class="[errors.company ? 'border-red' : '']" id="company" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.company">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="position">
											Job Title
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4" :class="[errors.position ? 'border-red' : '']" id="position" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.position">Please fill out this field.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="business">
											Company Business
										</label>
										<div class="inline-block relative w-full">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.business ? 'border-red' : '']" id="business" @blur="hasError">
												<option value="">Please Select</option>
												<option value="Banking and other financial services">Banking and other financial services</option>
												<option value="Insurance">Insurance</option>
												<option value="Retail Trade">Retail Trade</option>
												<option value="Wholesale Trade">Wholesale Trade</option>
												<option value="Business or professional">Business or professional Services </option>
												<option value="Software and IT Services">Software and IT Services</option>
												<option value="Telecommunications">Telecommunications services</option>
												<option value="Media">Media: Broadcast, printing and publishing &amp; other comm.</option>
												<option value="Manufacturing">Manufacturing</option>
												<option value="Transportation">Transportation</option>
												<option value="Utilities">Utilities</option>
												<option value="Oil and Gas">Oil and Gas</option>
												<option value="Government">Government</option>
												<option value="Private Education">Private Education</option>
												<option value="Private Health">Private Health Care Services providers</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.business">Please select an option.</p>
									</div>
								</div>
								<div class="mb-6 sm:w-1/2">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="size">
											Company Size
										</label>
										<div class="inline-block relative w-full">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.size ? 'border-red' : '']" id="size" @blur="hasError">
												<option value="">Please Select</option>
												<option value="Fewer than 500">Fewer than 500 </option>
												<option value="500 to 999">500 to 999</option>
												<option value="1,000 to 4,999">1,000 to 4,999</option>
												<option value="5,000 or more">5,000 or more</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.size">Please select an option.</p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<div class="mr-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="country">
											Country
										</label>
										<div class="inline-block relative w-full">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.country ? 'border-red' : '']" id="country" @blur="hasError">
												<option v-for="(item, key) in assessment.fields.country.options" :value="key">{{ item }}</option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.country">Please select an option.</p>
									</div>
								</div>
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
													<font-awesome-icon :icon="icons.faSquare" v-if="!terms" />
													<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow">
												By registering with IDC, you accept our Privacy Policy and NTT Communications Privacy Policy.
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms">Please accept terms and conditions.</p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button class="text-center block bg-ntt-blue hover:text-ntt-gold shadow-md text-white py-4 px-6 rounded no-underline"><font-awesome-icon class="ml-2" :icon="icons.faEnvelope"></font-awesome-icon> Send</button>
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
export default{
	props: ['result'],
	data() {
		return {
			assessment: laravel,
			icons: {
				faEnvelope: faEnvelope,
				faSquare: faSquare,
				faCheckSquare: faCheckSquare,
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
				size: false,
				country: false,
				terms: false
			}
		}
	},
	computed: {

	},
	methods: {
		hasError: function(event){
			if(event.target.type == "text" || event.target.type == "tel" || event.target.type == "email"){
				if(event.target.value == ''){
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