import Vue from 'vue';




new Vue({
	
	el: '#demo4',
	
	data: {
		
		sortKey:'',
		
		reverse: false,
		
		gender: 'all',
		
		people: [
			{ name: 'John', age: 50, gender: 'male' },
			{ name: 'Syrus', age: 55, gender: 'male' },
			{ name: 'Melody', age: 54, gender: 'female' },
			{ name: 'Pam', age: 34, gender: 'female' },
			{ name: 'Chris', age: 22, gender: 'male' },
			{ name: 'Tom', age: 20, gender: 'male' },
			{ name: 'Larry', age: 19, gender: 'male' }
			
		]
	},
	
	methods: {
		
		sortBy: function(sortKey) {
			
			this.reverse = (this.sortKey == sortKey) ?  ! this.reverse : false;
			
			this.sortKey = sortKey;
			
			
		}
	},
	
	filters: {
	
		gender: function(people) {
	
			var self = this;
			
			if (this.gender == 'all') {
				
				return people;
			}
			
			return people.filter(function(person) {
				return person.gender == self.gender;
			});
		}
	}
});


export default Vue;