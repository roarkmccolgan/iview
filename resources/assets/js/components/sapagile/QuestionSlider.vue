<template>
	<div class="mt-8">
		<h2 v-show="label" class=" mb-2 font-light text-xl sm:text-2xl leading-tight">{{label}}</h2>
		<div class="rounded bg-grey-light mt-8 px4 mb-6">
			<vue-slider
			v-model="value"
			ref="slider"
			v-on:callback="selectOption"
			style="padding: 40px 40px 50px 40px"
			>
			</vue-slider>
		</div>
</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import vueSlider from 'vue-slider-component';

export default{
	props: ['question', 'theOptions', 'showDetails', 'answer', 'label', 'qname'],
	data: function() {
		return {
			value: null,
			sliderOptions: {
				bgStyle : {'background-color': 'white'},
				clickable : true,
				data : null,
				debug : true,
				direction : "horizontal",
				disabled : false,
				disabledDotStyle : undefined,
				disabledStyle : undefined,
				dotHeight : undefined,
				dotSize : 16,
				dotWidth : undefined,
				enableCross : true,
				eventType : "auto",
				fixed : false,
				focusStyle : undefined,
				formatter : undefined,
				height : 6,
				interval : 1,
				labelActiveStyle : undefined,
				labelStyle : undefined,
				lazy : false,
				max : 100,
				maxRange : undefined,
				mergeFormatter : undefined,
				min : 0,
				minRange : undefined,
				piecewise : false,
				piecewiseActiveStyle : undefined,
				piecewiseFilter : undefined,
				piecewiseLabel : false,
				piecewiseStyle : undefined,
				processClass : undefined,
				processDragable : false,
				processStyle : undefined,
				realTime : false,
				reverse : false,
				show : true,
				sliderStyle : undefined,
				speed : 0.5,
				startAnimation : false,
				staticLabel : undefined,
				staticValue : undefined,
				stopPropagation : false,
				tooltip : "always",
				tooltipClass : undefined,
				tooltipDir : undefined,
				tooltipMerge : true,
				tooltipStyle : undefined,
				useKeyboard : false,
				value : null,
				width : "auto",
			}
		};
	},
	computed: {
		multiple: function(){
			return this.question.type == 'groupslider' ? true : false;
		},
		options: function(){
			if(this.showDetails){
				return this.theOptions;
			}else{
				return []
			}
		},
	},
	components: {
		vueSlider
	},
	methods:{
		selectOption: function(value){
			console.log(value);
			var label, name = this.qname, checked = true, type = null;
			for (var i = 0; i <= this.options.length-1; i++) {
				if(this.options[i].label == String(value)){
					label = String(value);
					value = this.options[i].value;
					break;
				}
			}
			console.log(label, value, name, checked, type);
			var selected = {
				question: this.question.name,
				label: label,
				value: value,
				name: name,
				checked: checked,
				type: type
			};
			this.showOther = type == 'other' && this.multiple===false ? true:false;
			this.$emit('selectOption',selected);

		},
		inAnswer: function(value){
			var exists = false;
			for (var i = this.answer.length - 1; i >= 0; i--) {
				if(this.answer[i].label === label && this.answer[i].name === this.qname) exists = true;
			}
			return exists;
		},
		
	},
	events:{},
	created: function(){
		this.sliderOptions.data = [];
		var min = this.options[0].value;
		var max = 0;
		for (var i = 0; i <= this.options.length-1; i++) {
			this.sliderOptions.data.push(this.options[i].label);
			if(this.options[i].value<min){
				min = this.options[i].value;
			}
			if(this.options[i].value>max){
				max = this.options[i].value;
			}
		}
		this.sliderOptions.min = min;
		this.sliderOptions.max = max;		
		//this.sliderOptions.value = ((min+max)/2);	*/
	},
	mounted: function(){
		this.$refs.slider.setValue(String ((this.sliderOptions.min+this.sliderOptions.max) / 2));
	}
}
</script>