<template>
	<div class="">
		<transition-group
		name="staggered-slide"
		appear
		v-bind:css="false"
		v-on:before-enter="beforeEnter"
		v-on:enter="enter"
		v-on:leave="leave"
		>
		<div class="sm:mx-8" v-for="(option, optKey) in options" :key="optKey" :data-index="optKey">
			<label :class="currentAnswer == option.label ? activeClass : normalClass">
				<input class="hidden" type="radio" :name="question.name" :value="option.value" @change="selectOption(option, $event.target.checked)">
				<div class="flex items-baseline">
					<div class="mr-2 text-2xl sm:text-xl">
						<font-awesome-icon :icon="icons.faCircle" v-show="currentAnswer != option.label" /> 
						<font-awesome-icon key="b" :icon="icons.faDotCircle" v-show="currentAnswer == option.label" />
					</div>
					<div class="flex-grow">
						<template v-if="showOther && option.type == 'other'">
							<input :placeholder="question.other.label" v-model="option.value" type="text" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker w-1/2" @input="selectOption(option, true)">
						</template>
						<template v-else>{{option.label}}</template>
					</div>
				</div>
			</label>
		</div>
	</transition-group>
</div>
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faCircle } from '@fortawesome/pro-regular-svg-icons/faCircle';
import { faDotCircle } from '@fortawesome/pro-regular-svg-icons/faDotCircle';
export default{
	props: ['question','showDetails', 'answer'],
	data: function() {
		return {
			showOther: false,
			icons: {
				faCircle: faCircle,
				faDotCircle: faDotCircle,
			},
			normalClass: {
				'block': true,
				'font-light': true,
				'text-grey-darker': true,
				'bg-white': true,
				'border': true,
				'shadow': true,
				'hover:bg-grey-lighter': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			},
			activeClass: {
				'block': true,
				'text-ntt-blue': true,
				'bg-grey-lightest': true,
				'border': true,
				'shadow': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			}
		};
	},
	computed: {
		options: function(){
			if(this.showDetails){
				return this.question.options;
			}else{
				return {}
			}
		},
		currentAnswer: function(){
			return this.answer.option && this.answer.option.label ? this.answer.option.label : ''
		}
	},
	components: {
		FontAwesomeIcon
	},
	methods:{
		selectOption: function(option, checked){
			if(checked == true){
				this.showOther = option.type == 'other' ? true:false;
				this.$emit('selectOption',this.question, option)
			}
		},
		beforeEnter: function (el) {
			el.style.marginLeft = "100%";
			el.style.opacity = 0;
		},
		enter: function (el, done) {
			var delay = el.dataset.index * (400/(Object.keys(this.options).length));
			setTimeout(function () {
				Velocity(
					el,
					{
						marginLeft: 0, opacity: 1
					},
					{
						complete: done 
					}
				)
			}, delay);
		},
		leave: function (el, done) {
			Velocity(
				el,
				{
					opacity: 0
				},
				{
					complete: done
				}
			);
		}
	},
	events:{}
}
</script>