
<template>
	<div class="flex-grow ieflex1 mt-8">
		<div class="container mx-auto mt-2 text-center">
			<!-- <font-awesome-icon class="mr-2 fa-spin" :icon="icons.faSyncAlt"></font-awesome-icon> -->
			<img class="" src="/images/loading.gif" class="mx-auto" v-if="!this.ready">
			<h1 class="font-bold leading-tight mb-2" v-text="transText.heading"></h1>
			<span class="" v-html="transText.sentence"></span>
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
			message: '',
			downloadUrl: false,
			ready: false,
			expired: false,
		}
	},
	computed: {
		transText: function(){
			if(!this.ready){
				return {
					heading: this.$t('snow.report.generating'),
					sentence: ''
				};
			} else if(this.ready && !this.expired){
				return {
					heading: this.$t('snow.report.ready'),
					sentence: this.$t('snow.report.readySentence', { url: this.downloadUrl }),
				};
			} else if(this.ready && this.expired){
				return {
					heading: this.$t('snow.report.regenerate'),
					sentence: this.$t('snow.report.regenerateSentence'),
				};
			}
		}
	},
	methods: {
		hasError: function(event){},
		checkTerms: function(){},
		checkMarketing: function(){},
		checkForErrors: function(){},
		checkPdfStatus: function(){
			return axios.get(`/api/download/${this.$route.params.uuid}/checkfordocument`);
		},
		initiateCheck: function(){
			this.ready, this.downloadUrl, this.expired = false;
			this.checkingInterval = setInterval(() => {
				this.checkPdfStatus().then(response => {
					if(response.data.body.status == 'success'){
						this.ready = true;
						this.downloadUrl = response.data.body.download_url;
						window.location = response.data.body.download_url;
						clearInterval(this.checkingInterval);
						setTimeout(() => {
							this.expired = true;
						}, 30000);
					}
				})
			}, 2000)
		}
	},
	components: {
		FontAwesomeIcon,
	},
	mounted: function(){
		
	},
	created: function(){
		this.initiateCheck();
	},
}
</script>