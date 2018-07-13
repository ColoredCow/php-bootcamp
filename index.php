<!doctype html>
<html lang="en">
  <head>
	 <title>Soirée</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
      </script>
		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">  
      </script>
		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		
  </head>	
  <body>
    <div id="app">
		  <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
		    <a class="navbar-brand" href="#"><b>Soiree</b></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
	  	    </button>


    	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	    <ul class="navbar-nav mr-auto">  
    	    	<li class="nav-item">
    	        <a class="nav-link" href="#Upcoming">Upcoming</a>
    	      </li>
    	    	<li class="nav-item">
    	        <a class="nav-link" href="#Past">Past</a>
    	      </li>
    	      <li class="nav-item">
    	        <a class="nav-link" href="#Gallary">Gallary</a>
    	      </li>    
    	    </ul>
    	    
    	    <form class="form-inline my-2 my--0">
    	      <div class="input-group">
              <input type="text" id="search" class="form-control" placeholder="Search for ..." aria-label="Search for ..." aria-describedby="basic-addon2" v-model="search">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" v-on:click="rsvp"><i class="fas fa-search"></i></button>
                </div>
            </div>
       	  </form>
    	 

    	</nav>
  
	
	
    	<br>
      <br>
      <div data-spy="scroll" data-target="navbar-example2" data-offset="0">
	      <div class="container">
          <div class="jumbotron">
      
	          <span class="badge badge-dark" id="Upcoming">Upcoming events</span>
            <h1 class="display-4"><b>Retro Night</b></h1>
            <p class="lead">Hey dudes and dudettes, we're gonna have a retro night with wine, cheese and a huge selection of Beatles, Bob, Dylan and Dire Straits.Be sure to register and dress up like you travelled to the 80s</p>
            <hr class="my-5">
            <i class="fas fa-calendar-alt"></i> 2nd August, 2018<br>
            <br>
            <i class="fas fa-map-marker-alt"></i> Colored Cow, Gurgaon<br>
            <br>
            <!--<a class="btn btn-primary btn-lg" href="#" role="button"><i class="fas fa-concierge-bell"></i> I want to attend-->
  	        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-concierge-bell"></i> I want to attend
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-concierge-bell"></i> Invitation</h5>
                    <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                      <div v-show="registrationSuccess == true">
                          Registration successful!
                      </div>
                      <div v-show="registrationError == true">
                          Sorry, you are not registered.
                      </div>
                  	<form class="form-inline" id="form" v-show="formSubmitted == false">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                      <input type="text" class="form-control mb-2 mr" id="inlineFormInputName2" placeholder="Enter your name" v-model="name">
                      
                      <label class="sr-only" for="inlineFormInputGroupUsername2">Enter your number</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+91</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter your number" v-model="phone">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">May be next time</button>
                    <button type="button" class="btn btn-primary" v-on:click="rsvp()">Yes, I want to atttend</button>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <button type="button" class="btn btn-secondary"><i class="fas fa-share"></i> Share it with a friend</button>


            <!--
            <div class="container" id="Past Events">
              <div class="row justify-content-md-center">
                <div class="col-12">
                  <hr>
                    <h1>{{ title }}</h1><br>
                    <div class="row justify-content-md-center" v-for="event in Past Events"></div>
                </div>
              </div>
            </div>
            -->

          </div>
          <div class="container" id="Past">
	          <h1>{{ eventstitle }}</h1><br>
            <div class="row">
              <div class="col-sm" v-for="event in pastEvents">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" :src="event.img" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-title"><i class="fas fa-calendar-alt" ></i> <span v-text="event.date"></span>  </p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{ event.location }} </p>
                  </div>
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="container" id="Gallary">
        <h1>Gallary</h1><br>
        <div class="row justify-content-md-center">
          <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-ride="carousel">
            <div class="carousel-inner" >
              <div class="carousel-item" v-for="(picture,idx) in gallary" :class="{active: idx==0 }" >
                <img class="d-block w-100" :src="picture.img">
              </div>
              <!--
              <div class="carousel-item active">
                <img class="d-block w-100" src="photo2.jpg" >
              </div>
              <div class="carousel-item active">
                <img class="d-block w-100" src="photo3.jpeg" >
              </div>-->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button"  data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> 
          </div>
        </div>  
      </div>
      <br> 

      <div class="text-center p-2">
	      <i class="far fa-award"></i> Day 1 at <span class="text-primary"> FrontEnd Bootcamp, CodeTreck</span> 
      </div>
    </div>
  </body>

  <script>
    var app = new Vue({
      el: '#app',
      data: {
            name:'',
            phone:'',
            search:'',
            registrationSuccess: false,
            registrationError: false,
            formSubmitted: false,   
            eventstitle: 'Past Events',
            pastEvents: [
                {
                    'img' : 'https://scontent.fdel1-4.fna.fbcdn.net/v/t31.0-8/17212267_1801527916731127_3340760783375836061_o.jpg?_nc_cat=0&oh=6af21c849b4011a1e3a836b5442a7c61&oe=5BAC5EEF',
                    'date' : '22nd March, 2018',
                    'location' : 'Tehri'
                },
                {
                    'img' : 'https://scontent.fdel1-4.fna.fbcdn.net/v/t31.0-8/17191904_1801447853405800_8076038643443945856_o.jpg?_nc_cat=0&oh=421fbbbea3b158dae78dc7954859486c&oe=5BA17FE8',
                    'date' : '13th December, 2017',
                    'location' : 'Gurgaon'
                },
                {
                    'img' : 'https://scontent.fdel1-4.fna.fbcdn.net/v/t31.0-8/17192458_1801477070069545_6640481842488629040_o.jpg?_nc_cat=0&oh=4f4dffa15d21492d147f752bcbbee3cd&oe=5BE73407',
                    'date' : '5th September, 2017',
                    'location' : 'Tehri'
                }
            ],
            gallary: [
                
                  {
                    'img' : 'photo1.jpeg',
                    //'active' : 'active'
                  },
                  {
                    'img' : 'photo2.jpg',
                    //'active' : ''
                  },
                  {
                    'img' : 'photo3.jpeg',
                    //'active' : ''
                  }
  
            ],

        },
        

        methods:{
          // myFunction: function(){

          //   console.log('name is : ',this.name);
          //   console.log('phone number is : ',this.phone);
          //   this.name='';
          //   this.phone='';
          //     var x=document.getElementById("inlineFormInputName2").value;
          //      var y=document.getElementById("inlineFormInputGroupUsername2").value;
              
          //     console.log("Name is : "+x);

          //      console.log("Phone number is : "+y);
          //      document.getElementById("inlineFormInputName2").value='';
          //      document.getElementById("inlineFormInputGroupUsername2").value='';
        
          // },
           // myFunction2: function(){
           //  console.log(this.search);
           //   this.search='';

           //    var z=document.getElementById("search").value;
           //    console.log("searched item is : "+z);
           // },

          rsvp () {
            axios
              .post('server.php', {
                  
                  name: this.name,
                  phone: this.phone,
                  // search: this.search,

              })
              .then((response)  =>  {
                    //console.log(response.data);   
                    this.formSubmitted = true;
                    this.registrationSuccess = true;
                    // this.name='';
                    // this.phone='';  
                    // document.getElementById('form').classList.add('d-none');
                    // document.getElementById('form').classList.remove('d-none');
              })
              
          },


        }
        
    });
    


  
    $('body').scrollspy({ target: '#navbar-example2' })
    $(document).ready(function() {
        $('.carousel').carousel();
        //populatePastEvents ();
         
        
    })


  // function populatePastEvents () {
  //     var container =  document.getElementById('past-events-container');
  //     var pastEvents = [
  //         {
  //             'img' : 'https://scontent.fdel1-4.fna.fbcdn.net/v/t31.0-8/17212267_1801527916731127_3340760783375836061_o.jpg?_nc_cat=0&oh=6af21c849b4011a1e3a836b5442a7c61&oe=5BAC5EEF',
  //             'date' : '22nd March, 2018',
  //             'location' : 'Tehri'
  //         },
  //         {
  //             'img' : 'https://scontent.fdel1-4.fna.fbcdn.net/v/t31.0-8/17191904_1801447853405800_8076038643443945856_o.jpg?_nc_cat=0&oh=421fbbbea3b158dae78dc7954859486c&oe=5BA17FE8',
  //             'date' : '13th December, 2017',
  //             'location' : 'Gurgaon'
  //         },
  //         {
  //             'img' : 'https://scontent.fdel1-4.fna.fbcdn.net/v/t31.0-8/17192458_1801477070069545_6640481842488629040_o.jpg?_nc_cat=0&oh=4f4dffa15d21492d147f752bcbbee3cd&oe=5BE73407',
  //             'date' : '5th September, 2017',
  //             'location' : 'Tehri'
  //         }
  //     ];
 //     pastEvents.forEach(function(event){
 //         console.log(event);
 //         container.innerHTML += getPastEventCard(event['img'], event['date'], event['location']);
 //     });
 // }
// function getPastEventCard(img, date, location) {
//     var html = '';
//     html += '<div class="col-4">';
//     html += '<div class="card">';
//     html += '<img class="card-img-top" src="' + img + '" alt="Card image cap">';
//     html += '<div class="card-body">';
//     html += '<p class="card-title"><i class="fas fa-calendar-alt"></i> ' + date + '</p>';
//     html += '<p class="card-text"><i class="fas fa-map-marker-alt"></i> ' + location + '</p>';
//     html += '</div>';
//     html += '</div>';
//     html += '</div>';
//     return html;
// }



/*
function myFunction(){
    	var x=document.getElementById("inlineFormInputName2").value;
    	var y=document.getElementById("inlineFormInputGroupUsername2").value;
    	
    	console.log("Name is : "+x);
    	console.log("Phone number is : "+y);
    	
    }
function myFunction2(){
	var z=document.getElementById("search").value;
	console.log("searched item is : "+z);
}
*/

  </script>  
 <!--
  <script>
  	$(document).ready(function() {
          
          
          populateGallary();
          $('body').scrollspy({ target: '#navbar-example2' })
      })


  function populateGallary(){
  	
    
  	var image = [
  		{
  			'img' : 'photo1.jpeg',
        'active' : 'active'
  		},
  		{
  			'img' : 'photo2.jpg',
        'active' : ''
  		},
  		{
  			'img' : 'photo3.jpeg',
        'active' : ''
  		}
  	];
    var container = document.getElementById('Gallary');
          
          
    image.forEach(function(event){
        
     container.innerHTML += getGallary(event['img']);

      });
    $('.carousel').carousel();
  }

  function getGallary(event){
  	var html = '';
     
      
    	
      html+= '<div class="carousel-item ' + event['active'] + '">';
      html+= '<img class="d-block w-100" src="' + event['img'] + '" class="img-responsive w-100">';
      html+= '</div>';
      
      return html;

  }

  </script>
-->


</html>