<template>
	<div class="py-2" :class="[question.optionLabels ? gridClass : '']">
		<h2 v-show="label" :key="'head'" class="text-base leading-tight " :class="[question.optionLabels ? 'mb-4 sm:mb-0 sm:w-1/4 sm:text-base' : 'sm:text-2xl']">{{label}}</h2>
		<transition-group
			name="staggered-slide"
			appear
			v-bind:css="false"
			v-on:before-enter="beforeEnter"
			v-on:enter="enter"
			v-on:leave="leave"
			:class="{'flex:none sm:flex-1 sm:flex sm:flex-row': question.type!=='button' && question.type!=='checkbox'}"
			tag="div"
		>
		<div v-for="(option, optKey) in options" :key="optKey+'-key'" :data-index="optKey" :class="[question.optionLabels ? 'sm:flex-1 sm:text-center' : '']">
			<label class="font-light rounded focus:outline-none" :class="[inAnswer(option.label) ? activeClass : normalClass, question.optionLabels ? 'sm:inline-block p-2' : 'p-4']" tabindex="0" @keyup.space="$event.target.click()">
				<input class="hidden" :type="multiple === false ? 'radio':'checkbox'" :name="multiple === false ? qname:qname+'[]'" :value="option.value" @input="selectOption(option.label, option.value, qname, $event.target.checked, option.type)">
				<div class="flex items-center leading-none" :class="[question.optionLabels ? 'sm:flex-none' : '']">
					<div class="text-2xl sm:text-xl mr-2" :class="[question.optionLabels ? 'sm:mr-0' : '']">
						<template v-if="multiple === false">
							<font-awesome-icon :icon="icons.faCircle" v-if="!inAnswer(option.label)" /> 
							<font-awesome-icon :icon="icons.faDotCircle" v-else />
						</template>
						<template v-else>
							<font-awesome-icon :icon="icons.faSquare" v-if="!inAnswer(option.label)" />
							<font-awesome-icon :icon="icons.faCheckSquare" v-else />
						</template>
							
					</div>
					<div class="flex-grow" :class="[question.optionLabels ? 'sm:hidden' : '']">
						<template v-if="showOther && option.type == 'other'">
							<input :placeholder="question.other.label" v-model="option.value" type="text" class="shadow appearance-none border rounded py-2 px-3 text-grey w-1/2" @input="selectOption(option.label, option.value, qname, true, 'other')">
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
			gridClass: {
				'sm:flex': true,
				'sm:items-center': true,
				'sm:border-b border-grey-light': true,
			},
			normalClass: {
				'block': true,
				'text-grey-darker': true,
				'hover:bg-grey-lighter': true,
				'hover:text-snow-dark': true,
				'focus:bg-grey-lighter': true,
				'focus:text-snow-dark': true,
				'cursor-pointer': true,
				'bg-grey-lighter': true,
				'sm:bg-transparent': true,
				//'hover:text-ntt-data-blue': true,
			},
			activeClass: {
				'block': true,
				'bg-snow-light': true,
				'text-snow-dark': true,
			}
		};
	},
	computed: {
		multiple: function(){
			return this.question.type == 'checkbox' || this.question.type == 'groupcheckbox' ? true : false;
		},
		options: function(){
			if(this.showDetails){
				if(this.question.shuffle){
					return this.shuffleArray(this.theOptions);
				}
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
		shuffleArray: function(array) {
		    let counter = array.length;

		    // While there are elements in the array
		    while (counter > 0) {
		        // Pick a random index
		        let index = Math.floor(Math.random() * counter);

		        // Decrease counter by 1
		        counter--;

		        // And swap the last element with it
		        let temp = array[counter];
		        array[counter] = array[index];
		        array[index] = temp;
		    }

		    return array;
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