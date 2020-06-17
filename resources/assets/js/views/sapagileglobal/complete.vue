<template>
	<div class="flex-grow ieflex1">
		<div class="container mx-auto mt-2 py-4 px-4 text-sap-blue">
			<h1 class="font-sapagileglobal font-bold text-4xl leading-tight">{{ $t('sapagileglobal.title') }}</h1>
			<!-- <h3 class="font-light leading-tight">{{ $t('sapagileglobal.sub-title') }}</h3> -->
		</div>
		<div class="container mx-auto px-4">
			<div class="flex flex-wrap justify-center">
				<div class="w-full sm:w-1/2 relative">
					<h2 class="font-light leading-tight mb-4 text-sapagileglobal-blue-bright" v-html="$t('sapagileglobal.finishtxtheading')"></h2>
					<p v-html="$t('sapagileglobal.finishtxt1', {'result':$t('sapagileglobal.'+result.overall.rating)})"></p>
					<p v-html="$t('sapagileglobal.finishtxt2')"></p>
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
					<img class="max-w-full border" :src="'/images/tools/' + assessment.tool.id + '/report'+ assessment.locale +'.png'" alt="">
				</div>
				<div class="w-full sm:w-1/2">
					<div class="sm:ml-8">
						<form id="leadForm" :action="'/'+assessment.localeUrl+'quiz/complete'" method="POST" >
						<!-- <form id="leadForm" :action="'/'+assessment.localeUrl+'pdf'" method="GET" > -->
							<input type="hidden" name="_token" :value="getToken">
							<h2 class="flex justify-start p-2 bg-grey-darker text-white font-light leading-tight">
								<font-awesome-icon class="mr-2" :icon="icons.faEnvelope"></font-awesome-icon>
								<div v-html="$t('sapagileglobal.register')"></div>
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
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="areas_interest">
											{{ $t('sapagileglobal.areas_interest') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.size ? 'border-red' : '']" id="areas_interest" name="extra[areas_interest]" @blur="hasError">
												<option :value="$t('sapagileglobal.interest1')" v-html="$t('sapagileglobal.interest1')"></option>
												<option :value="$t('sapagileglobal.interest2')" v-html="$t('sapagileglobal.interest2')"></option>
												<option :value="$t('sapagileglobal.interest3')" v-html="$t('sapagileglobal.interest3')"></option>
												<option :value="$t('sapagileglobal.interest4')" v-html="$t('sapagileglobal.interest4')"></option>
												<option :value="$t('sapagileglobal.interest5')" v-html="$t('sapagileglobal.interest5')"></option>
												<option :value="$t('sapagileglobal.interest6')" v-html="$t('sapagileglobal.interest6')"></option>
											</select>
											<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
												<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.areas_interest" v-html="$t('general.errorAreasInterest')"></p>
									</div>
								</div>
								
								<div class="mb-6 sm:w-1/2">
									<div class="">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="country">
											{{ $t('general.country') }}
										</label>
										<div class="inline-block relative w-full mb-2">
											<select class="block appearance-none w-full bg-grey-lighter border text-grey-darker py-3 px-4 pr-8 rounded" :class="[errors.country ? 'border-red' : '']" id="country" name="country" @blur="hasError">
												<option value="" v-html="$t('general.pleaseselect')"></option>
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
									<div class="relative">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="software_related_challenges">
											{{ $t('sapagileglobal.software_related_challenges') }}
										</label>
										<div class="w-full mb-2 h-48 overflow-y-scroll p-2 rounded border" :class="[notEnoughChallenges ? 'border-red bg-red-lightest' : '']">
											<template v-for="(challenge, index) in challengesOptions">
											<label :class="[challenges.includes($t(challenge)) ? multiActiveClass : multiNormalClass]" tabindex="0" @keyup.space="$event.target.click()">
												<input class="hidden" type="checkbox" :id="`challenges${index}`" name="extra[software_related_challenges][]" :value="$t(challenge)" v-model="challenges">
												<div class="flex items-baseline">
													<div class="mr-2 text-2xl sm:text-xl">
														<font-awesome-icon :icon="icons.faSquare" v-if="!challenges.includes($t(challenge))" />
														<font-awesome-icon :icon="icons.faCheckSquare" v-else />
													</div>
													<div class="flex-grow" v-html="$t(challenge)">

													</div>
												</div>
											</label>
											</template>
										</div>
										<div class="absolute bottom-0 rounded-b pin-b w-full scrollgrad opacity-25"></div>
									</div>
									<p class="text-red text-xs italic" v-show="notEnoughChallenges" v-html="$t('sapagileglobal.software_related_challenges_error')"></p>
								</div>
								<!-- <div class="mb-6 sm:w-1/2">
									<div class="ml-2">
										<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="city">
											{{ $t('general.city') }}
										</label>
										<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-2" :class="[errors.company ? 'border-red' : '']" id="city" name="extra[city]" type="text" @blur="hasError">
										<p class="text-red text-xs italic" v-show="errors.city" v-html="$t('general.errorCity')"></p>
									</div>
								</div> -->
								<div class="mb-6 w-full">
									<label :class="[terms ? activeClass : normalClass, errors.terms ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" @click="checkTerms">
										<input class="hidden" type="checkbox" id="terms" name="terms" value="terms" v-model="terms">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon :icon="icons.faSquare" v-if="!terms" />
												<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('sapagileglobal.byreg')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.terms" v-html="$t('general.errorAccept')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<label :class="[marketing ? activeClass : normalClass, errors.marketing ? 'border-red bg-red-lightest' : '']" tabindex="0" @keyup.space="$event.target.click()" >
										<input class="hidden" type="checkbox" id="marketing" name="extra[marketing]" v-model="marketing">
										<div class="flex items-baseline">
											<div class="mr-2 text-2xl sm:text-xl">
												<font-awesome-icon :icon="icons.faSquare" v-if="!marketing" />
												<font-awesome-icon :icon="icons.faCheckSquare" v-else />
											</div>
											<div class="flex-grow" v-html="$t('sapagileglobal.marketing')">
												
											</div>
										</div>
										<p class="text-red text-xs italic" v-show="errors.marketing" v-html="$t('general.errorMarketing')"></p>
									</label>
								</div>
								<div class="mb-6 w-full">
									<button type="submit" :disabled="isSubmitting" class="text-center block bg-sap-blue shadow-md text-white py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('general.send') }}</button>
									<!-- <a href="#" :disabled="true" class="text-center block bg-sap-blue shadow-md text-white py-4 px-6 no-underline" :class="[{'cursor-not-allowed':isSubmitting}]" @click.prevent="checkForErrors"><font-awesome-icon class="mr-2" :class="[{'fa-spin': isSubmitting}]" :icon="isSubmitting ? icons.faSyncAlt : icons.faEnvelope"></font-awesome-icon> {{ $t('general.send') }}</a> -->
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
			terms: false,
			marketing: false,
			challengesOptions: [
				'sapagileglobal.software_related_challenges1',
				'sapagileglobal.software_related_challenges2',
				'sapagileglobal.software_related_challenges3',
				'sapagileglobal.software_related_challenges4',
				'sapagileglobal.software_related_challenges5',
				'sapagileglobal.software_related_challenges6',
				'sapagileglobal.software_related_challenges7',
				'sapagileglobal.software_related_challenges8',
				'sapagileglobal.software_related_challenges9',
				'sapagileglobal.software_related_challenges10',
				'sapagileglobal.software_related_challenges11',
				'sapagileglobal.software_related_challenges12',
				'sapagileglobal.software_related_challenges13',
				'sapagileglobal.software_related_challenges14',
				'sapagileglobal.software_related_challenges15',
				'sapagileglobal.software_related_challenges16',
				'sapagileglobal.software_related_challenges17',
				'sapagileglobal.software_related_challenges18',
				'sapagileglobal.software_related_challenges19',
				'sapagileglobal.software_related_challenges20',
				'sapagileglobal.software_related_challenges21',
				'sapagileglobal.software_related_challenges22',
			],
			challenges: [],
			notEnoughChallenges: false,
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
				'text-sap-blue': true,
				'bg-yellow-lighter': true,
				'border': true,
				'shadow': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			multiNormalClass: {
				'block': true,
				'font-light': true,
				'text-grey-darker': true,
				'hover:bg-grey-lighter': true,
				'py-1': true,
				'px-2': true,
				'no-underline': true
			},
			multiActiveClass: {
				'block': true,
				'text-sap-blue': true,
				'bg-yellow-lighter': true,
				'py-1': true,
				'px-2': true,
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
				marketing: false,
				city: false,
				company_size: false,
				areas_interest: false,
				turnover: false,
				country: false,
				terms: false
			},
			theResult: this.result ? this.result : laravel.result,
			theScores: this.scores ? this.scores : laravel.scores,
			stage: laravel.stage,
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
			if(event.target.type == "select-multiple"){
				let selected = [];
				Array.prototype.forEach.call(event.target.options, opt => {
					console.log(opt.selected);
					if(opt.selected){
						selected.push(opt);
					}					
				});
				console.log(selected);
				this.errors[event.target.id] = !selected.length > 0;
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
			this.errors.terms = !document.getElementById('terms').checked;
		},
		checkMarketing: function(){
			this.errors.marketing = !document.getElementById('marketing').checked;
		},
		checkChallenges: function(){
			if(this.challenges.length < 3){
				this.notEnoughChallenges = true;
				return false;
			}
			this.notEnoughChallenges = false;

			return true;
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
			if(!this.checkChallenges()){
				console.log(this.notEnoughChallenges);
				return false;
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