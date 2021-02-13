<template>
	<div class="flex flex-col justify-center text-grey-light">
		<template v-for="(options, optKey) in question.options">
			<question-button :question="question" :the-options="options.options" :label="options.label" :qname="options.name" v-on:selectOption="selectOption" :showDetails="showDetails" :answer="answer"></question-button>
		</template>
	</div>
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import QuestionButton from '../../components/trendy/QuestionButton.vue';

export default{
	props: ['question', 'answer', 'showDetails', 'selectOption'],
	data: function() {
		return {

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
		inAnswer: function(value){
			var exists = false;
			for (var i = this.answer.length - 1; i >= 0; i--) {
				if(this.answer[i].label === value) exists = true;
			}
			return exists;
		},
		
	},
	events:{},
	created: function(){
		
	},
	mounted: function(){
		//this.$refs.slider.setValue(String ((this.sliderOptions.min+this.sliderOptions.max) / 2));
	}
}
</script>