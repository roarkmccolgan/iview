<template>
	<div class="flex flex-col justify-center text-ntt-blue">
		<template v-for="(options, optKey) in question.options">
			<question-slider :question="question" :the-options="options.options" :label="options.label" v-on:select-option="selectOption" :showDetails="showDetails" :qname="options.name"></question-slider>
		</template>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import QuestionSlider from '../../components/nttdata/QuestionSlider.vue';

export default{
	props: ['question', 'answer', 'showDetails'],
	data: function() {
		return {

		};
	},
	computed: {
		multiple: function(){
			return this.question.type === 'groupbutton';
		}
	},
	components: {
		QuestionSlider
	},
	methods:{
		selectOption: function(option, checked){
			if(checked == true || this.multiple){
				this.showOther = option.type == 'other' && this.multiple===false ? true:false;
				this.$emit('selectOption',this.question, option, this.multiple);
			}
		},
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