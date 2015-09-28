//vue app file

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#reporting',

	// data: {
	// 	iviews: [
	// 		{ label: 'Dell', options: [{ text: 'Dell Storage', value: 1  },{ text: 'DKIS', value: 2  }]},
	// 		{ label: 'HP', options: [{ text: 'HP Networking', value: 3 },{ text: 'Tablet', value: 4 }]},
	// 	]
	// }
});

new Vue({
	el: '#iview_create',
	data: {
		newCompany: false,
		companySelected: 0,
		iview_title: '',
		languages: [
			{
				id: '1', name: 'English'
			},
		]
	},
	methods: {
		companySelect: function (e) {
			this.newCompany = this.companySelected=='new'? true:false;
		},
		showCompanies: function (e) {
			e.preventDefault();
			this.newCompany = false;
			this.companySelected = 0;
		},
		addLang: function(e) {
			e.preventDefault();
			selected = jQuery('select[name="langs"]').val();
			selectedText = jQuery('select[name="langs"] option:selected').text();
			if(jQuery('#lang'+selected).length) {
				alert('Language already exists, please select another');
			}else{
				this.languages.push({
					id: selected,
					name: selectedText
				});
				jQuery('#modal-lang').modal('hide');
			}
		},
		removeLang: function(lang){
			this.languages.$remove(lang);
		}
	}
});

vueReporting = new Vue({
	el: '#reporting_create',
	data: {
		lagacySelected: null,
		legacy: false,
		legacytables: [],
		connectionSelected: 0,
		table_name: '',
		ignore: [],
		ignore_fields: [],
		table_searching: false,
		table_found: false,
		iviewurls: [],
		//recipients
		recipients: {},
		curRec:0
	},
	ready: function(){
		//this.fetchLegacy();
	},
	computed:{

	},
	methods: {
		selectConnection: function (e) {
			if(this.connectionSelected=='mysqliview'){
				this.legacy = true;
				this.legacytables = ['loading...'];
				this.fetchLegacy();
			}
		},
		useLatest: function (e) {
			e.preventDefault();
			this.legacy = false;
			this.connectionSelected = 0;
		},
		fetchLegacy: function(){
			this.$http.get('/api/legacytables',function(tables){
				this.legacytables = tables;
			});
		},
		getFields: function(e){
			e.preventDefault();
			this.table_searching = true;
			data={
				'table_name':this.lagacySelected,
				'connection':this.connectionSelected
			};
			this.$http.post('/api/fieldnames', data, function(fields, status){
				console.log(status);
				this.ignore_fields = fields;
				this.table_searching = false;
				this.table_found = true;
			}).error(function(data, status, request){
				this.table_search_found = false;
				this.table_searching = false;
			});
		},
		fetchUrls: function(e){
			//console.log(e.target.selectedOptions[0].value);
			iviewid= e.target.selectedOptions[0].value;

			this.$http.get('/api/iview/'+iviewid+'/urls',function(urls){
				console.log(urls);
				this.iviewurls = urls;
			});
		},
		addRecipient: function(){
			event.preventDefault();
			this.recipients.$add(
				this.curRec,
				{
					fname: null,
					lname: null,
					email: null,
					registration: false,
					report: true,
					selectedUrls: []
				}
			);
			var num = this.curRec
			this.$nextTick(function () {
				var newSwitches = jQuery(this._children[num].$$.rowrec);
				newSwitches.find('.switch').bootstrapSwitch();
				newSwitches.find('.switch.report').on('switchChange.bootstrapSwitch', function(event, state) {
					var freqId = $(this).attr('data-rowid'); // DOM element
					if(state){//state= 1|0
						vueReporting.$data.recipients[freqId].report = true;
					}else{
						vueReporting.$data.recipients[freqId].report = false;
					}
				});
			})
			/*Vue.nextTick(function () {
				self.$$.passwordInput.focus();
			});*/
			
			this.curRec++;
		},
		deleteRecipient: function(recNum){
			event.preventDefault();
			console.log(recNum);
			this.recipients.$delete(recNum);
			var num = this.curRec--
		}
	}
})
