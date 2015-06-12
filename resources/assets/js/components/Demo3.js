import Vue from 'vue';

new Vue({
	
	el: '#demo3',
	
	methods: {
		
		onKeyUp: function() {
			
			console.log('Key up!');
		},
		
		onBlur: function() {
			
			console.log('handle blur');
		}
		
	}
});


export default Vue;