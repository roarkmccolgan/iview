<template>
	<div class="mb-2 ">
		<h2 v-show="label" :key="'head'" class="mb-2 font-light text-xl leading-tight text-dassault-blue sm:text-2xl">{{label}}</h2>
		<div class="">
			<input class="rounded border px-4 py-2 text-2xl w-full sm:w-2/3" type="text" v-model="theAnswer" name="qname" @input="setValue">
			<span class="block mt-2 text-red italic" v-if="invalid">{{ $t('general.errorEmail') }}</span>
		</div>
	</div>
</template>
<script>

export default{
	props: ['question', 'answer', 'label', 'qname'],
	data: function() {
		return {
			theAnswer: this.answer,
			invalid: false,
			gridClass: {
				'sm:flex': true,
				'sm:border-b border-grey-light': true,
			},
			normalClass: {
				'block': true,
				'text-dassault-blue': true,
				//'bg-blue-lighter': true,
				'hover:bg-blue-lightest': true,
				'cursor-pointer': true,
			},
			activeClass: {
				'block': true,
				'text-dassault-blue': true,
				'bg-blue-lighter': true,
			}
		};
	},
	computed: {
		validEmail: function () {
			return /\S+@\S+\.\S+/.test(this.theAnswer);
		},
	},
	components: {
		
	},
	methods:{
		setValue: function(event){
			this.$emit('input', {
				'answer': this.theAnswer,
				'valid': this.validEmail
			});
			if(this.validEmail){
				this.invalid = false;		
			}else{
				this.invalid = {
					'message': 'Please provide a valid email address'
				};
			}
		}
	},
	events:{}
}
</script>