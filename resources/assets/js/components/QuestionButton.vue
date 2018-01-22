<template>
	<div class="mb-8">
		<transition-group
			name="staggered-slide"
			appear
			v-bind:css="false"
			v-on:before-enter="beforeEnter"
			v-on:enter="enter"
			v-on:leave="leave"
			class=""
			tag="div"
		>
		
		<h2 v-show="label" :key="'head'" class="mb-2 font-light text-xl sm:text-2xl leading-tight">{{label}}</h2>
		<div class="" v-for="(option, optKey) in options" :key="optKey" :data-index="optKey">
			<label :class="inAnswer(option.label) ? activeClass : normalClass" tabindex="0" @keyup.space="$event.target.click()">
				<input class="hidden" :type="multiple === false ? 'radio':'checkbox'" :name="multiple === false ? qname:qname+'[]'" :value="option.value" @change="selectOption(option.label, option.value, qname, $event.target.checked, option.type)">
				<div class="flex items-baseline">
					<div class="mr-2 text-2xl sm:text-xl">
						<template v-if="multiple === false">
							<font-awesome-icon :icon="icons.faCircle" v-if="!inAnswer(option.label)" /> 
							<font-awesome-icon :icon="icons.faDotCircle" v-else />
						</template>
						<template v-else>
							<font-awesome-icon :icon="icons.faSquare" v-if="!inAnswer(option.label)" />
							<font-awesome-icon :icon="icons.faCheckSquare" v-else />
						</template>
							
					</div>
					<div class="flex-grow">
						<template v-if="showOther && option.type == 'other'">
							<input :placeholder="question.other.label" v-model="option.value" type="text" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker w-1/2" @input="selectOption(option.label, option.value, qname, true, 'other')">
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
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faCircle from '@fortawesome/fontawesome-pro-regular/faCircle';
import faDotCircle from '@fortawesome/fontawesome-pro-regular/faDotCircle';
import faSquare from '@fortawesome/fontawesome-pro-regular/faSquare';
import faCheckSquare from '@fortawesome/fontawesome-pro-regular/faCheckSquare';

export default{
	props: ['question', 'theOptions', 'showDetails', 'answer', 'label', 'qname'],
	data: function() {
		return {
			theAnswer: [],
			showOther: false,
			icons: {
				faCircle: faCircle,
				faDotCircle: faDotCircle,
				faSquare: faSquare,
				faCheckSquare: faCheckSquare,
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
				'bg-yellow-lighter': true,
				'border': true,
				'shadow': true,
				'py-4': true,
				'px-6': true,
				'no-underline': true
			}
		};
	},
	computed: {
		multiple: function(){
			return this.question.type == 'checkbox' || this.question.type == 'groupcheckbox' ? true : false;
		},
		options: function(){
			if(this.showDetails){
				return this.theOptions;
			}else{
				return {}
			}
		},
		currentAnswer: function(){
			return this.answer.length!==0 && this.answer[0].label ? this.answer[0].label : '';
		}
	},
	components: {
		FontAwesomeIcon
	},
	methods:{
		selectOption: function(label, value, name, checked, type){
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
		inAnswer: function(label){
			var exists = false;
			for (var i = this.answer.length - 1; i >= 0; i--) {
				if(this.answer[i].label === label && this.answer[i].name === this.qname) exists = true;
			}
			return exists;
		},
		beforeEnter: function (el) {
			el.style.marginLeft = "100%";
			el.style.opacity = 0;
		},
		enter: function (el, done) {
			var delay = el.dataset.index * (400/(Object.keys(this.theOptions).length));
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