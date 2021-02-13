<template>
	<div class="text-ntt-blue">
		<template v-for="(options, optKey) in question.options">
			<h2 :key="'head'+optKey" class="mt-8 mb-2 font-light text-xl sm:text-2xl leading-tight">{{options.label}}</h2>
			<opposing-slider :question="question" :the-options="options.options" :qname="options.name" v-on:selectOption="selectOption" :showDetails="showDetails" :answer="answer"></opposing-slider>
		</template>
	</div>
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import OpposingSlider from '../components/OpposingSlider.vue';

export default{
	props: ['question', 'answer', 'showDetails', 'selectOption'],
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
		OpposingSlider
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