//vue app file
new Vue({
	el: '#reporting',

	data: {
		iviews: [
			{ label: 'Dell', options: [{ text: 'Dell Storage', value: 1  },{ text: 'DKIS', value: 2  }]},
			{ label: 'HP', options: [{ text: 'HP Networking', value: 3 },{ text: 'Tablet', value: 4 }]},
		]
	}
});

new Vue({
	el: '#create',
	data: {
		newCompany: false;
	}
})
