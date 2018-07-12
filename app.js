var app = new Vue({
	el: '#app',
	data: {
		message: 'Hello Vue!',
		pastEvents: [
		{
			'img' : 'https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/17156311_1801527916731127_3340760783375836061_n.jpg?_nc_cat=0&oh=6e616c3bf1067f67fc3c88e781cec26b&oe=5BA3B6C2',
			'date': '22nd March, 2018',
			'location': 'Gurgaon'
		},
		{
			'img' : 'https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/17155403_1801447853405800_8076038643443945856_n.jpg?_nc_cat=0&oh=db048be50a2c87a8059cab872696f678&oe=5BB0DB03',
			'date': '13th December, 2017',
			'location': 'Tehri'
		},
		{
			'img' : 'https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/17156129_1801477070069545_6640481842488629040_n.jpg?_nc_cat=0&oh=599a8615095e55cd3d57b6c68c59bd11&oe=5B9E4FDC',
			'date': '5th September, 2017',
			'location': 'Gurgaon'
		}
		],
		carouselItems : [
		['https://www.w3schools.com/bootstrap/la.jpg', 'carousel-item item active'],
		['https://www.w3schools.com/bootstrap/chicago.jpg', 'carousel-item item'],
		['https://www.w3schools.com/bootstrap/ny.jpg', 'carousel-item item']
		],
		nameInput : '',
		phoneInput : '',
		searchQuery : '',
	},
	methods: {
		spitRsvpFormData: function () {
			var name = this.nameInput;
			var phone = this.phoneInput;
			console.log(name, phone);
			this.nameInput = '';
			this.phoneInput = '';
		},
		spitSearchFormData: function () {
			console.log(this.searchQuery);
			this.searchQuery = '';
		},
		onRsvpSubmit() {
			axios.post('/', {
				nameInput: this.nameInput,
				phoneInput: this.phoneInput
			});
		}
	},
})