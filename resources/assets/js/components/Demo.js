import Vue from 'vue';

new Vue({
	
	el: '#demo',
	
	data: {
		name: 'A Vuej test'
	},
	
	ready: function() {
		
		var that = this;
		
		setInterval(function() {
			
			that.name = 'Updated';
			
		}, 5000);
	}
});


export default Vue;