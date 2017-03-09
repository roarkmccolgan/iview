//vue app file

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
Vue.config.devtools = true;

Vue.filter('sluggify', function(value){
	const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿœæŕśńṕẃǵǹḿǘẍźḧ·/_,:;'
	const b = 'aaaaeeeeiiiioooouuuuncsyoarsnpwgnmuxzh------'
	const p = new RegExp(a.split('').join('|'), 'g')
	
	return value.toString().toLowerCase()
	.replace(/\s+/g, '-')           // Replace spaces with -
	.replace(p, c =>
		b.charAt(a.indexOf(c)))     // Replace special chars
	.replace(/&/g, '-and-')         // Replace & with 'and'
	.replace(/[^\w\-]+/g, '')       // Remove all non-word chars
	.replace(/\-\-+/g, '-')         // Replace multiple - with single -
	.replace(/^-+/, '')             // Trim - from start of text
	.replace(/-+$/, '')             // Trim - from end of text
});

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
					datapass: false,
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
			this.recipients.$delete(recNum);
			var num = this.curRec--
		}
	}
})

Vue.component('qsection',{
	props: ['secind','questionnum'],
	template: `
		<div id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" :href="'#collapse'+secind" :aria-expanded="secind==0 ? 'true':'false'" class="" style="display: inline-block; width: 5%;">
							<i class="fa fa-angle-right"></i>
						</a>
						<input type="text" name="section" v-model="sectionName" placeholder="Section Name" class="form-control" style="display: inline-block; width: 80%" @click.prevent="">
					</h4>
				</div>
				<div :id="'collapse'+secind" class="panel-collapse collapse in" :aria-expanded="secind==0 ? 'true':'false'">
					<div class="panel-body">
						<questions :secind="secind" :questionnum="questionnum" v-on:increment="incrementQuestion"></questions>
					</div>
				</div>
			</div>
		</div>
	`,
	data: function () {
		return {
			sectionName: this.name,
			alias: this.name
		}
	},
	methods: {
		incrementQuestion: function(){
			this.$emit('increment')
		}
	}
});

Vue.component('questions',{
	props: ['secind','questionnum','incrementQuestion'],
	template: `
		<div>
			<h5>Questions <button class="btn btn-primary btn-sm" @click.prevent="addQuestion()" style="margin-top: 5px;"><i class="fa fa-plus"></i></button></h5>
			<div class="row">
				<div class="col-sm-12" v-for="(question, qkey) in questions" style="border-bottom: 1px solid #dadada;">
					<input type="hidden" :name="'sec_'+secind+'['+question.name+'][name]'" v-model="question.name">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">{{ question.name }}</label>
						<div class="col-sm-10">
							<textarea rows="4" cols="50" :name="'sec_'+secind+'['+question.name+'][question]'" v-model="question.question" placeholder="Question" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Type</label>
						<div class="col-sm-10">
							<select class="form-control" v-model="question.type" @change="showType(qkey,question.type)">
								<option value="select">Select</option>
								<option value="button">Single button (Select One)</option>
								<option value="radio">Radio Button (Select One)</option>
								<option value="checkbox">Checkbox (Select all that apply)</option>
								<option value="groupradio">Single option from multiple topics</option>
								<option value="slider">Slider (Select between Num(x) and Num(y))</option>
								<option value="idcIcon">Single button with icon (Select One)</option>
								<option value="text">Text input</option>
							</select>
						</div>
					</div>
					<div class="row" v-if="question.type && question.type !=='select'">
						<div class="col-sm-10 col-sm-offset-2">
							<h5>Options <button class="btn btn-primary btn-sm" @click.prevent="addOption(question)" style="margin-top: 5px;"><i class="fa fa-plus"></i></button></h5>
							<component :is="'terminal-'+question.type" v-for="(option, optkey) in question.options" :secind="secind" :questionname="question.name" :key="optkey" :optkey="optkey"></component>
							<span v-for="(option, optkey) in question.options">{{ option.type }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	`,
	data: function () {
		return {
			questions: [],
			newType: 'select',
		}
	},
	methods: {
		addQuestion: function(){
			this.questions.push({
				question: '',
				type: '',
				name: ('q'+this.questionnum).toUpperCase(),
				options: [],
			});
			this.$emit('increment')
		},
		showType: function (key, type) {
			var that = this;
			Vue.nextTick(function () {
				if(type!=='select'){
					that.questions[key].type = type;
				}
			});
		},
		addOption: function (question) {
			question.options.push({
				type: question.type,
			});
		}
	}
});

Vue.component('terminal-button',{
	props: ['questionname','secind','optkey'],
	template: `
		<div style="padding: 5px; border: 1px solid #efefef; margin-bottom: 5px;">
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Label</label>
				<div class="col-sm-10">
					<input type="text" :name="'sec_'+secind+'[question]['+questionname+'][options]['+optkey+'][label]'" v-model="label" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Value</label>
				<div class="col-sm-10">
					<input type="number" :name="'sec_'+secind+'[question]['+questionname+'][options]['+optkey+'][value]'" v-model.number="value" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input :name="'sec_'+secind+'[question]['+questionname+'][options]['+optkey+'][checked]'" type="checkbox" id="checkbox" v-model="checked">
					<label for="checkbox">Checked</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<div class="checkbox">
						<label>
							<input type="checkbox" class="icheck"> Remember me
						</label>
					</div>
				</div>
			</div>
		</div>
	`,
	data: function () {
		return {
			label: '',
			value: 0,
			checked: 0,
		}
	},
	methods: {
		
	}
});

vueToolQuestions = new Vue({
	el: '#question_create',
	data: {
		questionnum: 1,
		sections: [], 
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
		addSection: function(key){
			this.sections.push({
				name: name,
				key: key
			});
		},
		incrementQuestion: function(){
			this.questionnum ++;
		},
		
	}
})
