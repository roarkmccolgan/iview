<template>
	<div class="flex-grow bg-grey-lighter">
		<div class="px-4 flex flex-col">
			<div class="mt-2">
				<div class="container mx-auto">
					<div class="pt-2 flex items-center">
						<div class="">
							<button class="inline-block border border-grey-light hover:bg-dassault-blue text-dassault-blue hover:text-white pt-2 pb-1 px-2 rounded no-underline" @click.prevent="back"><font-awesome-icon :icon="faArrowLeft" /></button>
						</div>
						<div class="flex-grow hidden sm:block">
							<!-- Progress indicator -->
							<div class="flex items-center px-4">
								<template v-for="(question, qkey) in questions">
									<div class="w-5 h-5 border-2 border-dassault-blue-light rounded-full" :class="{'bg-dassault-blue-light': (question == currentQuestion || question.selected)}"></div>
									<div class="border-t-2 border-dassault-blue-light flex-grow" v-show="qkey !== ('q'+Object.keys(questions).length)"></div>
								</template>
							</div>
						</div>
						<div class="flex-grow block sm:hidden px-4">
							<span class="text-sm text-grey-darker">{{ $t('general.question') | toTitle}} {{currentQuestion.name}} {{$t('general.of')}} {{totalQuestions}}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="container mx-auto py-2 text-dassault-blue ">
				<span class="text-sm text-dassault-blue-light hidden sm:block sm:my-2">{{ $t('general.question') | toTitle}} {{currentQuestion.name}} {{$t('general.of')}} {{totalQuestions}} - {{ $t('dassault.'+currentQuestion.section+'.title') }} </span>
				<transition name="fade">
					<h1 class="font-light text-2xl sm:text-3xl leading-tight" v-show="showDetails" v-html="currentQuestion.question"></h1>
				</transition>
			</div>
			<div class="container mx-auto my-2 flex-grow">
				<transition name="fade">
					<div class="relative border p-2 text" :class="error.class" v-if="error">
						{{error.message}}
					</div>
				</transition>
				
				<template v-if="currentQuestion.type == 'button' || currentQuestion.type == 'checkbox'">
					<question-button :question="currentQuestion" :the-options="currentQuestion.options" v-on:selectOption="selectOption" :showDetails="showDetails" :qname="currentQuestion.qKey" :answer="answer"></question-button>
				</template>
				<template v-else-if="currentQuestion.type == 'slider'">
					<question-slider :question="currentQuestion" :the-options="currentQuestion.options" v-on:selectOption="selectOption" :showDetails="showDetails" :qname="currentQuestion.qKey" :answer="answer"></question-slider>
				</template>
				<template v-else-if="currentQuestion.type == 'groupSlider'">
					<group-slider :answer="answer" :question="currentQuestion" v-on:selectOption="selectOption" :showDetails="showDetails"></group-slider>
				</template>
				<template v-else-if="currentQuestion.type == 'groupopposingslider'">
					<group-opposing-slider :answer="answer" :question="currentQuestion" v-on:selectOption="selectOption" :showDetails="showDetails"></group-opposing-slider>
				</template>
				<template v-else-if="currentQuestion.type == 'groupbutton'">
					<group-button :answer="answer" :question="currentQuestion" :questions="questions" v-on:selectOption="selectOption" :showDetails="showDetails"></group-button>
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
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faArrowLeft from '@fortawesome/fontawesome-pro-regular/faArrowLeft';
import faSpinnerThird from '@fortawesome/fontawesome-pro-regular/faSpinnerThird';

//Question components
import QuestionButton from '../../components/dassault/QuestionButton.vue';
import QuestionSlider from '../../components/dassault/QuestionSlider.vue';
import GroupSlider from '../../components/dassault/GroupSlider.vue';
import GroupButton from '../../components/dassault/GroupButton.vue';
import GroupOpposingSlider from '../../components/dassault/GroupOpposingSlider.vue';

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
			answer: [],
			saving: false,
			normalButton: 'block w-full py-4 px-4 text-center bg-dassault-blue text-white',
			disabledButton: 'block w-full py-4 px-4 text-center bg-dassault-blue text-white opacity-50 cursor-not-allowed',
			error: false,
			errorClass: 'border-red-lighter bg-red-lightest text-red-light',
			noticeClass: 'border-blue-light bg-blue-lighter text-dassault-blue',
			result: [],
		}
	},
	computed: {
		currentQuestion: function(){
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
		}
	},
	methods: {
		nextQuestion: function(event){
			event.target.blur();
			if(this.saving)
				return;
			this.questions['q'+this.$route.params.question].selected = this.answer;
			let nextQuestionNumber = this.gotoNextQuestionNumber();
			var nextQ = nextQuestionNumber;
			this.showNext = false;
			this.showDetails = false;
			var that = this;
			this.saving = true;
			this.saveAssessment().then(function (response) {
				if(response.data == 'success'){
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
				}
			});
		},
		selectOption: function(selected){
			//console.log(selected);
			//q16,16.1,"the label of the answer", true
			if(this.isGroup){
				// if(this.answer.length>0){
				if(this.currentQuestion.type == 'groupcheckbox'){
				
				}else if(this.currentQuestion.type == 'groupopposingslider'){
					var exists = false;
					for (var i = this.answer.length - 1; i >= 0; i--) {
						if(Array.isArray(this.answer[i])){
							for (var j = this.answer[i].length - 1; j >= 0; j--) {
								if(this.answer[i][j].name == selected[0].name){
									//console.log(this.answer[i][j].name);
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
					}else{
						let numToShow = this.currentQuestion.options.length;
						for (var i = this.currentQuestion.options.length - 1; i >= 0; i--) {
							if(this.currentQuestion.options[i].show){
								let check = this.currentQuestion.options[i].show;
								let selected = this.questions['q'+check.question].selected;
								
								let filtered = selected.filter(answer => answer.name == check.answer);
								
								if(!eval(`${filtered[0].value} ${check.operator} ${check.value}`)){
									numToShow --;
								}
							}
						}
						if(numToShow == this.answer.length){
							this.showNext = true;
						}
					}
				}
			}else{
				var currentLength =this.answer.length;
				var exists = false;
				for (var i = this.answer.length - 1; i >= 0; i--) {
					if(this.answer[i].name == selected.name){
						exists = i;
					}
				}
				if(exists!==false){
					if(this.currentQuestion.type !== 'checkbox' || (this.currentQuestion.type === 'checkbox' && this.answer[exists].label == selected.label)){
						this.answer.splice(exists, 1);
						if(this.answer.length==0) this.showNext = false;
					}
					if(currentLength==0 || (currentLength+1 <= this.maximum && currentLength+1 >= this.minimum)) {
						this.answer.push(selected);
						this.showNext = true;
						this.error = false;
					}else{
						this.showError('minmax', this.lang.multimaxierror);
					}
				}else{
					this.answer = [];
					if(currentLength==0 || (currentLength+1 <= this.maximum && currentLength+1 >= this.minimum)) {
						this.answer.push(selected);
						this.showNext = true;
					}else{
						this.showError('minmax', this.lang.multimaxierror);
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
		gotoNextQuestionNumber: function(){
			let next = Number(this.$route.params.question)+1;
			if(! this.questions['q'+this.$route.params.question].skipNext){
				return next;
			}
			let shouldSkip = [];
			for (var i = this.questions['q'+this.$route.params.question].skipNext.length - 1; i >= 0; i--) {
				let name = this.questions['q'+this.$route.params.question].skipNext[i].question;
				let operator = this.questions['q'+this.$route.params.question].skipNext[i].operator;
				let value = this.questions['q'+this.$route.params.question].skipNext[i].value;

				for (var j = this.answer.length - 1; j >= 0; j--) {
					if(this.answer[j].name == name){
						shouldSkip.push(eval(`${this.answer[j].value} ${operator} ${value}`));
					}
				}
			}
			if(shouldSkip.length == this.answer.length){
				console.log('shouldskip');
				let answer = [];
				for (var j = this.questions['q'+next].options.length - 1; j >= 0; j--) {
					let ansObj = {};
					ansObj.label = 'Question option ignored';
					ansObj.name = this.questions['q'+next].options[j].name;
					ansObj.question = this.questions['q'+next].name;
					ansObj.value = 0;
					answer.push(ansObj);
				}
				this.questions['q'+next].selected = answer;
				next = next+1
			}else{
				console.log('dontskip');
			}
			
			return next;
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
	},
	created: function(){
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				if(!this.questions[q].selected){
					//console.log('not answered '+this.questions[q].name);
					this.$router.replace('/questions/'+ this.questions[q].name);
					this.showNext = false;
					break;
				}
			}
		}
	}
}
</script>