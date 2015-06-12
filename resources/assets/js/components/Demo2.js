import Vue from 'vue';

new Vue({
	
	el: '#demo2',
	
	data: {
		
		names: ['Stan', 'Jane', 'John', 'Taylor', 'Michelle', 'Susan']
	},
	
	methods: {
		
		addName: function() {
			
			this.names.push(this.newName);
			
			this.newName = '';
		}
	}
});

export default Vue;