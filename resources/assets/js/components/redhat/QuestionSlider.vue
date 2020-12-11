<template>
	<div class="mt-8">
		<h2 v-show="label" class=" mb-6 font-light text-xl sm:text-2xl leading-tight">{{label}}</h2>
		<div class="mt-8 mb-6">
			<vue-slider
				v-model="value"
				v-bind="sliderOptions"
				ref="slider"
				v-on:callback="selectOption"
				style="padding: 50px 40px 50px 40px"
			>
			</vue-slider>
		</div>
</div>
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import vueSlider from 'vue-slider-component';

export default{
	props: ['question', 'theOptions', 'showDetails', 'answer', 'label', 'qname'],
	data: function() {
		return {
			value: null,
			sliderOptions: {
				data: null,
				eventType: 'auto',
				width: 'auto',
				height: 6,
				dotSize: 20,
				dotHeight: null,
				dotWidth: null,
				min: this.question.min,
				max: this.question.max,
				interval: 1,
				show: true,
				speed: 0.3,
				disabled: false,
				bgStyle: {backgroundColor: '#AAAAAA'},
				sliderStyle: {
					"backgroundColor": "#EE0000",
					boxShadow: 'none'
				},
				processStyle: {backgroundColor: 'red'},
				tooltip: false,
				tooltipDir: 'top',
				tooltipStyle: {
					"borderColor": "red",
					"backgroundColor": "green",
					"fontSize": '1rem',
					"lineHeight": '2rem',
					"minWidth": "2rem",
					"marginTop": "-20px",
				},
				labelStyle: {
					marginTop: '15px',
					fontSize: '1em',
					color: '#000',
				},
				piecewise: true,
				piecewiseLabel: true,
				piecewiseStyle: {
					"backgroundColor": "#F0F0F0",
					"color": "purple",
					"visibility": "visible",
					"width": "40px",
					"height": "40px",
					/*boxShadow: "inset 0.5px 0.5px 2px 1px rgba(0,0,0,.15)"*/
				},
				piecewiseActiveStyle: null,
				labelActiveStyle: null,
				reverse: false,
				clickable: true,
				realTime: false,
				lazy: false,
				formatter: null,
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
				return {}
			}
		},
	},
	components: {
		vueSlider
	},
	methods:{
		selectOption: function(value){
			var label, name = this.qname, checked = true, type = null;
			for (var i = 0; i <= this.options.length-1; i++) {
				console.log(i + this.options[i].label + ' ' + value + ' ' + String(value));
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