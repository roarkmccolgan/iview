<template>
	<div class="">
		<div class="flex">
			<div class="sm:flex-1 mr-4">
				<div class="rounded bg-grey-light px-4 pt-2 mb-6 my-2">
					<h3 class="mb-2 font-light text-grey-darker text-lg sm:text-lg leading-tight">{{options[0].label}}</h3>
					<vue-slider
						v-model="value1"
						v-bind="sliderOptions"
						ref="slider1"
						v-on:callback="selectOption1"
						style="padding: 40px 40px 50px 40px"
					>
					</vue-slider>
				</div>
			</div>
			<div class="sm:flex-1 px-4">
				<div class="rounded bg-grey-light px-4 pt-2 mb-6 my-2">
					<h3 class="mb-2 font-light text-grey-darker text-lg sm:text-lg leading-tight">{{options[1].label}}</h3>
					<vue-slider
						v-model="value2"
						v-bind="sliderOptions"
						ref="slider2"
						v-on:callback="selectOption2"
						style="padding: 40px 40px 50px 40px"
					>
					</vue-slider>
				</div>
			</div>
		</div>

	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import vueSlider from 'vue-slider-component';

export default{
	props: ['question', 'theOptions', 'showDetails', 'answer', 'qname'],
	data: function() {
		return {
			label1: "heading1",
			label2: "heading2",
			value1: null,
			value2: null,
			sliderOptions: {
				data: null,
				eventType: 'auto',
				width: 'auto',
				height: 6,
				dotSize: 20,
				dotHeight: null,
				dotWidth: null,
				min: 0,
				max: 100,
				interval: 5,
				show: true,
				speed: 0.3,
				disabled: false,
				bgStyle: {backgroundColor: 'white'},
				sliderStyle: {
					"backgroundColor": "#EE0000",
					boxShadow: 'none'
				},
				processStyle: {backgroundColor: 'red'},
				tooltip: 'always',
				tooltipDir: 'top',
				tooltipStyle: {
					"borderColor": "#000000",
					"backgroundColor": "#000000",
					"fontSize": '1.5rem',
					"lineHeight": '2.5rem',
					"minWidth": "2.5rem"
				},
				labelStyle: {
					marginTop: '15px',
					fontSize: '1em',
				},
				piecewise: false,
				piecewiseLabel: false,
				piecewiseStyle: null,
				piecewiseActiveStyle: null,
				labelActiveStyle: null,
				reverse: false,
				clickable: true,
				realTime: false,
				lazy: false,
				formatter: null,
			},
			selected1: null,
			selected2: null,
		};
	},
	computed: {
		options: function(){
			/*if(this.showDetails){
				return this.theOptions;
			}else{
				return {}
			}*/
			return this.theOptions;
		},
	},
	components: {
		vueSlider
	},
	methods:{
		selectOption1: function(value){
			var label = this.options[0].label, name = this.qname, checked = true, type = null;
			this.selected1 = {
				question: this.question.name,
				label: label,
				value: value,
				name: name,
				checked: checked,
				type: type
			};
			this.$refs.slider2.setValue(100-value);
			this.sendAnswer();
		},
		selectOption2: function(value){
			var label = this.options[1].label, name = this.qname, checked = true, type = null;
			this.selected2 = {
				question: this.question.name,
				label: label,
				value: value,
				name: name,
				checked: checked,
				type: type
			};
			this.$refs.slider1.setValue(100-value);
			this.sendAnswer();
		},
		inAnswer: function(value){
			var exists = false;
			for (var i = this.answer.length - 1; i >= 0; i--) {
				if(Array.isArray(this.answer[i]) && this.answer[i].qname===this.qname){
					//for...
						//exists = true;
						//break
				}
			}
			return exists;
		},
		selectOption: function(){
			console.log('fuck');
		},
		sendAnswer: function(){
			var that = this;
			setTimeout(function () {
				that.$emit('selectOption',that.selected1);
				that.$emit('selectOption',that.selected2);
			}, 300);
		}
	},
	events:{},
	created: function(){
		var min = 0;
		var max = 0;
		if(this.options[0].type=='percentage'){
			min = 0;
			max = 100;
			this.sliderOptions.min = min;
			this.sliderOptions.max = max;
		}		
	},
	mounted: function(){
		this.$nextTick(function(){
			this.$refs.slider1.setValue((this.sliderOptions.min+this.sliderOptions.max) / 2);
			this.$refs.slider2.setValue((this.sliderOptions.min+this.sliderOptions.max) / 2);
		});		
	}
}
</script>