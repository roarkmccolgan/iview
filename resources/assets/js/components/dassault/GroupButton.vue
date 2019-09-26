<template>
	<div class="flex flex-col justify-center">
		<div class="hidden sm:flex sm:flex-wrap text-grey-darker" v-if="question.optionLabels">
			<div class="w-1/4">&nbsp;</div>
			<div class="flex-1 flex mb-4">
				<div class="text-center text-sm" :class="'w-1/'+question.optionLabels.length" v-for="option in question.optionLabels">
					{{ option }}
				</div>
			</div>
		</div>
		<template v-for="(options, optKey) in question.options" v-if="checkShow(options)">
			<transition name="fade">
			<div class="" v-if="optKey == showOption || allAtOnce" :key="'q'+optKey">
				<question-button :question="question" :the-options="options.options" :label="options.label" :qname="options.name" v-on:selectOption="optionSelected" :showDetails="showDetails" :answer="answer"></question-button>				
			</div>
			</transition>
		</template>
		<div class="flex items-center justify-center" v-if="!allAtOnce">
			<div class="w-3 h-3 mx-1 rounded-full bg-ntt-data-blue-light cursor-pointer" v-for="(options, optKey) in question.options" :class="{'bg-ntt-data-yellow': showOption == optKey}" @click="goToOption(optKey, options.name)"></div>
		</div>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import QuestionButton from './QuestionButton.vue';

export default{
	props: ['question', 'answer', 'showDetails', 'questions'],
	data: function() {
		return {
			showOption: 0,
			allAtOnce: true,
		};
	},
	computed: {
		multiLevel: function(){
			return this.question.type === 'groupbutton';
		}
	},
	components: {
		QuestionButton
	},
	methods:{
		optionSelected: function(selected){
			this.$emit('selectOption',selected);
			var that = this;
			if(this.showOption + 1 < this.question.options.length){
				setTimeout(function(){
	                that.showOption++;
	            }, 400);
			}
		},
		goToOption: function(value, qname){
			if(value == 0 || this.answer[value-1]){
				this.showOption = value;					
			}
		},
		inAnswer: function(value){
			var exists = false;
			for (var i = this.answer.length - 1; i >= 0; i--) {
				if(this.answer[i].label === value) exists = true;
			}
			return exists;
		},
		checkShow: function(option){
			if(!option.show){
				return true;
			}
			let check = option.show;
			let selected = this.questions['q'+check.question].selected;
			
			let filtered = selected.filter(answer => answer.name == check.answer);
			
			return eval(`${filtered[0].value} ${check.operator} ${check.value}`);
		}
	},
	events:{},
	created: function(){
		
	},
	mounted: function(){
	}
}
</script>