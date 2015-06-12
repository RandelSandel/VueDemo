var Vue = require('vue');

new Vue({
	
	el: '#app',
	
	data: { message: 'Hello World' },
	
	filters: {
		
		reverse: require('./filters/reverse.js')
	}
});

import Demo from './components/Demo.js';


import Demo2 from './components/Demo2.js';

import Demo3 from './components/Demo3.js';

import Post from './components/Post.js';

import Demo4 from './components/Demo4.js';


