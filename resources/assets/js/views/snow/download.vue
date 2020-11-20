
<template>
	<div class="flex-grow ieflex1 mt-8">
		<div class="container mx-auto mt-2">
			<font-awesome-icon class="mr-2 fa-spin" :icon="icons.faSyncAlt"></font-awesome-icon>
			<img class="" src="/images/loading.gif" class="mx-auto">
			<h1 class="font-bold leading-tight">Generating your report</h1>
			<span class="">@{{ message }}</span>
		</div>
	</div>
</template>
<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import faSyncAlt from '@fortawesome/fontawesome-pro-regular/faSyncAlt';
export default{
	props: [],
	data () {
		return {
			assessment: laravel,
			checkingInterval: null,
			icons: {
				faSyncAlt: faSyncAlt,
			},
		}
	},
	computed: {
		
	},
	methods: {
		hasError: function(event){},
		checkTerms: function(){},
		checkMarketing: function(){},
		checkForErrors: function(){}
	},
	components: {
		FontAwesomeIcon,
	},
	mounted: function(){
		
	},
	created: function(){
		this.checkingInterval = setInterval(() => {
			if(window.MktoForms2){
				this.marketoForm = window.MktoForms2;
				clearInterval(this.checkingInterval);
			}
		}, 500)
	},
}
</script>