<template>
	<div class="flex-grow">
		<intro-component :section="currentQuestion.section | toTitle" v-on:next-step="closeIntro()" :info="currentQuestion.sectionintro" v-if="showIntro"></intro-component>
		
		<div class="flex flex-col" v-else>
			<div class="container mx-auto py-2" v-if="showIntermission">
				<intermission-component :section="currentQuestion.section | toTitle" v-on:next-step="closeIntermission()" :info="currentQuestion.intermission" v-if="showIntermission"></intermission-component>
			</div>
			<div class="" v-else>
				<div class="bg-blackblack pt-4 sm:pt-8 bg-no-repeat bg-right-top bg-50% sm:bg-contain" style="background-image: url('/images/tools/16/ibm-cloud-products-leadspace.webp')">
					<div class="container mx-auto px-4 sm:px-0">
						<div class="pt-2 flex items-center">
							<div class="">
								<button class="inline-block border border-grey-light hover:bg-ibmcloud-blue text-white hover:text-white pt-2 pb-1 px-2 rounded no-underline" @click.prevent="back"><font-awesome-icon :icon="faArrowLeft" /></button>
							</div>
							<div class="flex-grow hidden sm:block">
								<!-- Progress indicator -->
								<div class="flex items-center px-4">
									<template v-for="(question, qkey) in questions">
										<div class="w-4 h-4 border-2 border-white rounded-full" :class="{'bg-ibm-blue': (question == currentQuestion || question.selected)}"></div>
										<div class="border-t-2 border-white flex-grow" v-show="qkey !== ('q'+Object.keys(questions).length)"></div>
									</template>
								</div>
								<div class="flex items-center justify-between px-4 my-2 mt-4">
									<template v-for="(section, secKey) in questionsBySection">
										<div class="text-center rounded h-1 overflow-hidden" :class="[section.section == currentQuestion.section ? `bg-yellow-light` : 'bg-grey-light',secKey == 0 ? 'cmr' : (secKey == questionsBySection.length - 1 ? 'cml' : 'cmx')]" :style="`width: ${secKey == 0 || secKey == questionsBySection.length - 1 ? (section.total*8.333333333) - 4.166666666 : section.total*8.333333333}%`">
										</div>
									</template>
								</div>
							</div>
							<div class="w-full block sm:hidden px-4">
								<span class="text-sm text-white leading-tight">{{currentQuestion.title | toTitle}} <br/> {{ $t('general.question') | toTitle}} {{currentQuestion.section_info.number}} {{$t('general.of')}} {{currentQuestion.section_info.total}}</span>
							</div>
						</div>
						<div class="py-4 sm:py-8 text-white flex items-center">
							<h2 class="font-black sm:mt-0 text-yellow-light text-xl sm:text-3xl">{{ currentQuestion.title }}</h2>
							<v-popover
								offset="16"
								placement="right"
								>
								<div class="rounded-full ml-3 w-6 h-6 border leading-none p-1 font-bold overflow-hidden text-center border-white text-white cursor-pointer align-middle">?</div>
								<template slot="popover">
									<a v-close-popover class="block text-right mb-2">Close</a>
									<div class="font-bold" v-html="currentQuestion.description"></div>
								</template>
							</v-popover>
						</div>
					</div>
				</div>
				<div class="container mx-auto py-2 flex-grow px-4 sm:px-0">
					<span class="text-sm hidden sm:block sm:my-2">{{ $t('general.question') | toTitle}} {{currentQuestion.section_info.number}} {{$t('general.of')}} {{currentQuestion.section_info.total}}</span>
					<transition name="fade">
						<div>
							<h1 class="font-bold text-ibm-blue-light text-xl sm:text-3xl leading-tight mb-4" v-show="showDetails" v-html="currentQuestion.question"></h1>
							<div class="relative border p-2 text" :class="error.class" v-if="error">
								{{error.message}}
							</div>							
						</div>
					</transition>
					<template v-if="currentQuestion.type == 'button' || currentQuestion.type == 'checkbox'">
						<question-button :question="currentQuestion" :the-options="currentQuestion.options" v-on:selectOption="selectOption" :showDetails="showDetails" :qname="currentQuestion.qKey" :answer="answer"></question-button>
					</template>
					<template v-else-if="currentQuestion.type == 'slider'">
						<question-slider :question="currentQuestion" :the-options="currentQuestion.options" v-on:selectOption="selectOption" :showDetails="showDetails" :qname="currentQuestion.qKey" :answer="answer"></question-slider>
					</template>
					<template v-else-if="currentQuestion.type == 'groupSlider'">
						<group-slider :answer="answer" :question="currentQuestion" @selectOption="selectOption" :showDetails="showDetails"></group-slider>
					</template>
					<template v-else-if="currentQuestion.type == 'groupopposingslider'">
						<group-opposing-slider :answer="answer" :question="currentQuestion" @selectOption="selectOption" :showDetails="showDetails"></group-opposing-slider>
					</template>
					<template v-else-if="currentQuestion.type == 'groupbutton'">
						<group-button :answer="answer" :question="currentQuestion" @selectOption="selectOption" :showDetails="showDetails"></group-button>
					</template>
				</div>
				<div class="container mx-auto mt-4">
					<transition name="fade">
						<button :class="buttonClass" v-show="showNext" @click="nextQuestion($event)">
							<font-awesome-icon :icon="faSpinnerThird" size="2x" spin v-if="saving" /> <span v-else>{{$t('general.next')}}</span>
						</button>
					</transition>
				</div>
			</div>
		</div>

	</div>
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faArrowLeft } from '@fortawesome/pro-regular-svg-icons/faArrowLeft';
import { faSpinnerThird } from '@fortawesome/pro-regular-svg-icons/faSpinnerThird';

//Question components
import QuestionButton from '../../components/ibmcloud/QuestionButton.vue';
import QuestionSlider from '../../components/ibmcloud/QuestionSlider.vue';
import GroupSlider from '../../components/ibmcloud/GroupSlider.vue';
import GroupButton from '../../components/ibmcloud/GroupButton.vue';
import GroupOpposingSlider from '../../components/ibmcloud/GroupOpposingSlider.vue';

//import NuggetComponent from '../../components/ibmcloud/NuggetComponent.vue';
import IntermissionComponent from '../../components/ibmcloud/IntermissionComponent.vue';
import IntroComponent from '../../components/ibmcloud/IntroComponent.vue';

export default{
	data () {
		return {
			//section: this.$route.params.section,
			questions: laravel.questions,
			faArrowLeft: faArrowLeft,
			faSpinnerThird: faSpinnerThird,
			lang: {
				of: 'of',
				question: 'question',
				next: 'Next',
				multimaxierror: 'Please select a minimum of #number# and maximum of #max# to continue'
			},
			questionInfo: laravel.questionInfo,
			showNext: false,
			showDetails: true,
			showIntermission: false,
			showIntro: false,
			answer: [],
			saving: false,
			normalButton: 'block w-full py-4 px-4 text-center bg-ibm-blue text-white',
			disabledButton: 'block w-full py-4 px-4 text-center bg-ibm-blue text-white opacity-50 cursor-not-allowed',
			error: false,
			errorClass: 'border-red-lighter bg-red-lightest text-red-light',
			noticeClass: 'border-blue-light bg-blue-lighter text-ibm-blue',
			result: [],
		}
	},
	computed: {
		currentQuestion: function(){
			return this.questions['q'+ Number(this.$route.params.question)];
		},
		lastQuestionOfSection: function(){
			return this.questions['q'+ Number(this.$route.params.question)];
		},
		isGroup: function(){
			return this.currentQuestion.type === 'groupbutton' || this.currentQuestion.type === 'groupslider' || this.currentQuestion.type === 'groupopposingslider';
		},
		totalQuestions: function() {
			var total=0;
			for (var q in this.questions) {
				if (this.questions.hasOwnProperty(q)){
					total ++
				}
			}
			return total;
		},
		minimum: function(){
			return this.currentQuestion.min ? this.currentQuestion.min : 1;
		},
		maximum: function(){
			return this.currentQuestion.max ? this.currentQuestion.max : this.currentQuestion.options.length;
		},
		buttonClass: function(){
			return this.saving == true ? this.disabledButton : this.normalButton;
		},
		questionsBySection: function(){
			let questions = Object.values(this.questions);
			let result = [];
			questions.forEach(q => {
				var section = q.section;
				var index = false;
				result.forEach((r,i) =>{
					if(r.section == section){
						index = i;
					}
				});
				if(index !== false){
					result[index].total++
				}else{
					result.push({
						section: section,
						title: q.title,
						total: 1
					});
				}
			});
			return result;
		},
		currentSectionHasIntro: function(){
			if(this.currentQuestion.section_info.is_first && this.currentQuestion.sectionintro.length){
				return true;
			}
			return false;
		}
	},
	methods: {
		nextQuestion: function(event){
			event.target.blur();
			if(this.saving)
				return;
			this.questions['q'+this.$route.params.question].selected = this.answer;
			var nextQ = Number(this.$route.params.question)+1;
			this.showNext = false;
			this.showDetails = false;
			var that = this;
			this.saving = true;
			this.saveAssessment().then(function (response) {
				if(response.data == 'success'){
					if(that.currentQuestion.section_info.is_last && that.currentQuestion.intermission.length){
						that.showIntermission = true;
						return;	
					}
					if(that.questions.hasOwnProperty('q'+nextQ)){
						setTimeout(function () {
							that.showDetails = true;
							that.$router.push({ path: '/questions/'+ nextQ});
							that.answer = [];
							that.saving = that.error = false;
							document.body.scrollTop = 0; // For Safari
	    					document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
						}, 300);
					}else{
						that.getResults().then(function (response) {
							if(response.data.query == 'success'){
								that.$router.push({ name: 'complete', params:{result: response.data.result,scores: response.data.scores}});
								document.body.scrollTop = 0; // For Safari
	    						document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
							}
						});
					}
				}
			});
		},
		closeIntermission: function(){
			var that = this;
			var nextQ = Number(this.$route.params.question)+1;
			that.showIntermission = false;
			if(that.questions.hasOwnProperty('q'+nextQ)){
				setTimeout(function () {
					that.showDetails = true;
					that.$router.push({ path: '/questions/'+ nextQ});
					that.answer = [];
					that.saving = that.error = false;
					document.body.scrollTop = 0; // For Safari
					document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
				}, 300);
			}else{
				that.getResults().then(function (response) {
					if(response.data.query == 'success'){
						that.$router.push({ name: 'complete', params:{result: response.data.result}});
						document.body.scrollTop = 0; // For Safari
						document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
					}
				});
			}
		},
		closeIntro: function(){
			this.showIntro = false;
		},
		selectOption: function(selected){
			console.log('here');
			//q16,16.1,"the label of the answer", true
			if(this.isGroup){
				// if(this.answer.length>0){
				if(this.currentQuestion.type == 'groupcheckbox'){
					console.log('dude');
				}else if(this.currentQuestion.type == 'groupopposingslider'){
					var exists = false;
					for (var i = this.answer.length - 1; i >= 0; i--) {
						if(Array.isArray(this.answer[i])){
							for (var j = this.answer[i].length - 1; j >= 0; j--) {
								if(this.answer[i][j].name == selected[0].name){
									console.log(this.answer[i][j].name);
									exists = i;
								}
							}
						}
					}
					if(exists === false) {
						this.answer.push(selected);
					}else{
						this.answer.splice(exists, 1);
						if(this.answer.length==0) this.showNext = false;
						this.answer.push(selected);
					}
					if(this.answer.length == this.currentQuestion.options.length){
						this.showNext = true;
					}
				}else{
					var exists = false;
					for (var i = this.answer.length - 1; i >= 0; i--) {
						if(this.answer[i].name == selected.name){
							exists = i;
						}
					}
					if(exists === false) {
						this.answer.push(selected);
					}else{
						this.answer.splice(exists, 1);
						if(this.answer.length==0) this.showNext = false;
						this.answer.push(selected);
					}
					if(this.answer.length == this.currentQuestion.options.length){
						this.showNext = true;
					}
				}
			}else{
				if(this.currentQuestion.type !== 'checkbox'){
					var currentLength =this.answer.length;
					var exists = false;
					for (var i = this.answer.length - 1; i >= 0; i--) {
						if(this.answer[i].name == selected.name){
							exists = i;
						}
					}
					console.log(exists);
					if(exists!==false){
						console.log('exists');
						this.answer.splice(exists, 1);
						if(this.answer.length==0) this.showNext = false;
						if(this.answer.length==0) {
							this.answer.push(selected);
							this.showNext = true;
						}
					}else{
						console.log('not exists');
						this.answer = [];
						if(currentLength==0) {
							this.answer.push(selected);
							this.showNext = true;
						}
					}
				}else if(this.currentQuestion.type === 'checkbox'){
					var currentLength = this.answer.length;
					var exists = false;
					for (var i = this.answer.length - 1; i >= 0; i--) {
						if(this.answer[i].name == selected.name && this.answer[i].label == selected.label){
							exists = i;
						}
					}
					if(exists!==false){
						console.log('exists');
						this.answer.splice(exists, 1);
						if(this.answer.length==0){
							this.showNext = false;
						}
						if(currentLength <= this.maximum && currentLength >= this.minimum){
							this.error = false;
						}
					}else{
						console.log('not exists');
						if(currentLength==0 || (currentLength+1 <= this.maximum && currentLength+1 >= this.minimum)) {
							this.answer.push(selected);
							this.showNext = true;
							this.error = false;
						}else{
							this.showError('minmax', this.lang.multimaxierror);
						}
					}
				}
			}
		},
		back: function(){
			var previousQ = Number(this.$route.params.question)+1;
			this.showDetails = false;
			var that = this;
			setTimeout(function () {
				that.showDetails = true;
				that.$router.go(-1);
			}, 300);
		},
		showError: function(type, langString){
			var regX = /\#(.*?)\#/g;
			var repArr = {};
			if(type == 'minmax') {
				repArr.number = this.minimum;
				repArr.max = this.maximum;
			}
			var newStr = langString.replace(regX, function replacer(match, $1){
				return repArr[$1];
			});
			this.error = {message: newStr, class: this.errorClass}
		},
		saveAssessment: function(){
			var that = this;
			return axios.post('/api/tool/save-assessment', {
				question: this.currentQuestion.qKey,
				answer: this.answer,
			});

			/*return new Promise(function(resolve, reject) {
				setTimeout(resolve, 100, {data: 'success'});
			});*/
		},
		getResults: function(){
			var that = this;
			return axios.post('/api/tool/get-results');
		},
		setBackgroundImage: function(image){
			if(image!==false){
				document.body.style.backgroundSize = "cover";
				document.body.style.backgroundRepeat = "no-repeat";
				document.body.style.backgroundImage = "url('images/tools/"+ laravel.tool.id + '/' + image +"?id=1')";
			}else{
				document.body.style.backgroundImage = "none";
			}
		}
	},
	watch: {
		currentSectionHasIntro: function(value){
			console.log(value);
			this.showIntro = value;
		}
	},
	filters: {
		toTitle: function(value){
			return value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		}
	},
	components: {
		FontAwesomeIcon,
		QuestionButton,
		QuestionSlider,
		GroupSlider,
		GroupButton,
		GroupOpposingSlider,
		IntermissionComponent,
		IntroComponent
	},
	beforeRouteUpdate (to, from, next) {
		var nextQ = this.questions['q'+ (Number(this.$route.params.question)+1)];
		if(nextQ){
			if(nextQ.background){
				this.setBackgroundImage(nextQ.background);
			}else{
				this.setBackgroundImage(false);
			}
		}
		next();
	},
	created: function(){
		if(this.currentSectionHasIntro){
			this.showIntro = true;
		}
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				if(!this.questions[q].selected){
					console.log('not answered '+this.questions[q].name);
					if(this.questions[q].name !== this.currentQuestion.name){
						this.$router.replace('/questions/'+ this.questions[q].name);						
					}
					this.showNext = false;
					//addbg
					if(this.questions[q].name == 1 && this.questions[q].background){
						this.setBackgroundImage(this.questions[q].background);
					}else{
						this.setBackgroundImage(false);
					}
					break;
				}
			}
		}
	}
}
</script>
<style scoped>
	.cml{
		margin-left: 0rem;
	}
	.cmr{
		margin-right: 0rem;
	}
	.cmx{
		margin-left: 0rem;
		margin-right: 0rem;
	}
</style>