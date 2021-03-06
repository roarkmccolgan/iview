<template>
	<div class="flex-grow">
		<div class="px-4 flex flex-col">
			<div class="container mx-auto py-2" v-if="showIntermission">
				<intermission-component :section="currentQuestion.section | toTitle" v-on:next-step="closeIntermission()" :info="currentQuestion.intermission" v-if="showIntermission"></intermission-component>
			</div>
			<div class="" v-else>
				<div class="mt-2">
					<div class="container mx-auto">
						<div class="pt-2 flex items-center">
							<div class="">
								<button class="inline-block bg-ntt-data-blue-light hover:bg-ntt-data-red text-ntt-data-blue hover:text-white pt-2 pb-1 px-2 rounded no-underline" @click.prevent="back"><font-awesome-icon :icon="faArrowLeft" /></button>
							</div>
							<div class="flex-grow hidden sm:block">
								<!-- Progress indicator -->
								<div class="flex items-center px-4">
									<template v-for="(question, qkey) in questions">
										<div class="border-t-2 border-ntt-blue flex-grow" :class="{'border-ntt-data-yellow': (question == currentQuestion || question.selected)}" v-show="qkey !== 'q1'"></div>
										<div class="w-3 h-3 border-2 border-ntt-blue rounded-full" :class="{'bg-ntt-data-yellow': (question == currentQuestion || question.selected), 'w-6 h-6': (question == currentQuestion || question.selected)}"></div>
									</template>
								</div>
							</div>
							<div class="flex-grow block sm:hidden px-4">
								<span class="text-sm text-ntt-data-yellow">{{currentQuestion.title }} - {{ $t('general.question') | toTitle}} {{currentQuestion.name}} {{$t('general.of')}} {{totalQuestions}}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="container mx-auto py-2 text-white ">
					<span v-html="currentQuestion.description"></span>
					<span class="text-ntt-data-yellow hidden sm:block sm:my-2">{{currentQuestion.title }} - {{ $t('general.question') | toTitle}} {{currentQuestion.name}} {{$t('general.of')}} {{totalQuestions}}</span>
					<transition name="fade">
						<h1 class="font-light text-xl sm:text-2xl leading-tight" v-show="showDetails" v-html="currentQuestion.question"></h1>
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
					<template v-else-if="currentQuestion.type == 'groupslider'">
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
						<button class="text-xl text-ntt-data-blue" :class="buttonClass" v-show="showNext" @click="nextQuestion($event)">
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
import QuestionButton from '../../components/nttdata/QuestionButton.vue';
import QuestionSlider from '../../components/nttdata/QuestionSlider.vue';
import GroupSlider from '../../components/nttdata/GroupSlider.vue';
import GroupButton from '../../components/nttdata/GroupButton.vue';
import GroupOpposingSlider from '../../components/nttdata/GroupOpposingSlider.vue';

//import NuggetComponent from '../../components/nttdata/NuggetComponent.vue';
import IntermissionComponent from '../../components/nttdata/IntermissionComponent.vue';

export default{
	data () {
		return {
			//section: this.$route.params.section,
			questions: laravel.questions,
			location: window.location.pathname,
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
			answer: [],
			saving: false,
			normalButton: 'block w-full py-4 px-4 text-center bg-ntt-data-yellow',
			disabledButton: 'block w-full py-4 px-4 text-center bg-grey opacity-50 cursor-not-allowed',
			error: false,
			errorClass: 'border-red-lighter bg-red-lightest text-red-light',
			noticeClass: 'border-blue-light bg-blue-lighter text-trend-red',
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
					if(that.currentQuestion.section_info.is_last && that.currentQuestion.intermission){
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
								that.$router.push({ name: 'complete', params:{result: response.data.result}});
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
		selectOption: function(selected){
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
			if(Number(this.$route.params.question)==1){
				window.location.href = "https://nttdatadx.idcready.net";
				return;
			}
			var prevQ = Number(this.$route.params.question)-1;
			this.showDetails = false;
			var that = this;
			if(that.questions.hasOwnProperty('q'+prevQ)){
				that.questions['q'+prevQ].selected = false;
				setTimeout(function () {
					that.showDetails = true;
					that.$router.push({ path: '/questions/'+ prevQ});
					that.answer = [];
					that.saving = that.error = false;
					document.body.scrollTop = 0; // For Safari
					document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
				}, 300);
			}else{
				that.$router.go(-1);					
			}
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
		for (var q in this.questions) {
			if (this.questions.hasOwnProperty(q)){
				if(!this.questions[q].selected){
					console.log('not answered '+this.questions[q].name);
					this.$router.replace('/questions/'+ this.questions[q].name);
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