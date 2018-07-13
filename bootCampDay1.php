<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap First Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	</head>
	<body>
		<!-- Navigation Bars -->
		<div id="app">
  		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar-example2">
  	  		<a class="navbar-brand" href="#">Soiree</a>
  	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
  	  		</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="nav mr-auto nav-pills">
	    			<li class="nav-item"><a class="nav-link" href="#up">Upcoming <span class="sr-only">(current)</span></a>
	    			</li>
	    			<li class="nav-item"><a class="nav-link" href="#past">Past</a>
	    			</li>
	    			<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a>
	    			</li>
	    			<li class="nav-item"><a class="nav-link" href="registration.php" target="_blank">Registration DB</a>
	    			</li>
      			</ul>
      			<form class="form-inline my-2 my-lg-0">
    				<div class="input-group">
          				<input class="form-control" id="search"  type="text" placeholder="Search For ..." aria-label="Search" name="searchname">
      	    			<div class="input-group-append">
      		  				<button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i>
      		  				</button>
      					</div>
        			</div>
     			 </form>
    		</div>
  		</nav>

		<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
			<div class="container">
	   			<div class="jumbotron">
	      			<div class="container">
    	     			<p class="h5"><span class="badge badge-secondary" id="up">Upcoming Events</span></p>
						<br>

    		 			<h1>Retro Night</h1>
    		 			<p>Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools. Lorem ipsum has become the industry standard for design mockups and prototypes. ... A meatier lorem ipsum because who doesn’t love bacon?</p>
    		 			<hr class="my-4">
    		 			<div><i class="fas fa-calendar-alt"></i> 2nd August, 2018</div>
    		 			<div><i class="fas fa-map-marker-alt"></i> ColoredCow, Gurgaon</div>

    		 				<br>
    		 				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal11"><i class="fas fa-hand-peace"></i> I want to attend
    		 				</button>
    		 				<button type="button" class="btn btn-secondary"><i class="fas fa-share-square"></i> Share it with a Friend!</button>


    						<!-- Modal -->
							<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  					<div class="modal-dialog" role="document">
			    					<div class="modal-content">
			      						<div class="modal-header">
			        						<h5 class="modal-title" id="exampleModalLabel">Exciting!!</h5>
			        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
			        						</button>
			      						</div>
			      						<div class="modal-body">
			      							<div class="alert alert-success" role="alert" v-show="showMessage">
											  You have submitted!
											</div>
			      							<div class="alert alert-danger" role="alert" v-show="showMessage">
											  A simple danger alert—check it out!
											</div>
				  							<form id="form">
				  								<div class="form-group row">
				    								<label for="inputEmail3" class="col-sm-2 col-form-label" id="name">Name</label>
				    								<div class="col-sm-10">
				      									<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name" v-model="name">
				    								</div>
				  								</div>
				  								<div class="form-group row">
				    								<label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
				    								<div class="col-sm-10">
				    									<div class="input-group mb-2 mr-sm-2">
								                        <div class="input-group-prepend"><br>
								                          <div class="input-group-text">+91</div><br>
								                        </div>
				      									<input type="text" class="form-control" id="inputPassword3" placeholder="your number" v-model="number" >
				    								</div>
					 							</div>
											</form>
										</div>
			      						<div class="modal-footer">
			        						<button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="rsvp">Submit
			        						</button>
			        						<button type="button" class="btn btn-primary">Next Time</button>
			      						</div>
			    					</div>
			  					</div>
							</div>
							<!-- <button type="button" class="btn btn-secondary"><i class="fas fa-share-square"></i> Share it with a Friend!</button> -->
  						</div>
    				</div>

    				<!-- Past Event Section-->

    				<h1 id="past">{{pastEventTitle}}</h1>
    				<div class="container">
    					<div class="row">
    						<div id="past-events-container"></div>
    							<div class="col-4" v-for= "event in pastEvents">
      								<div class="card">
  			        					<img class="card-img-top" :src="event.img" alt="Card image cap">
  			        					<div class="card-body">
    										<p class="card-text"><i class="fas fa-calendar-alt"></i><span v-text="event.date"></span></p>
    										<p class="card-text"><i class="fas fa-map-marker-alt">{{event.location}}</i></p>
  			        					</div>
									</div>
    							</div>
  							</div>
    					</div>
    				</div>
	

					<!--Gallery -->
	
					<h1 id="gallery">{{ galleryTitle }}</h1>
					<div id="galleryId">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" id="gallery-carousel-inner">
								<div class="carousel-item" v-for="(imga,idx) in galleryVue" :class="{active: idx==0}">
									<img src="imga in img">
								</div>
							</div>
						
							
                			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>
                			</a>
                			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span>
                			</a>
						</div>
		 			</div>	

	

					<!--Footer-->
					<footer class="text-center font-weight-bold">
						<div class="text-muted p-4"><i class="far fa-award"></i> Day 1 at 
							<span class="text-primary font-italic"> FrontEnd Bootcamp, 2018.
							</span>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</body>

	<script type="text/javascript">

		var app= new Vue({
			el: '#app',
			data:{
				showMessage:true,
				error:'',
				success:'',
				searchname:'',
				name:'',
				number:'',
				pastEventTitle:'Past Events',
				galleryTitle:'Gallery',
				pastEvents:[
					{
					  'img':'ab.jpg',
					  'date':'22nd March, 2018',
					  'location':'Gurgaon'
					},
					{
					  'img':'abb.jpg',
					  'date':'13th December, 2017',
					  'location':'Tehri'
					},
					{
					  'img':'abbb.jpg',
					  'date':'5th September, 2017',
					  'location':'Gurgaon'
					}
				],
				galleryVue:[
				    		{
					  			'img':'images.jpg'
								
							},
							{
					  			'img':'images1.jpg'
					  			
							},
							{
					  			'img':'images2.jpg'
					  			
							}
							 ],

			},
			methods:{
				// 

				// addValue(){
				// 	console.log(this.name);
				// 	console.log(this.number);
				// 	this.name='';
				// 	this.number='';
				// },
				// searchValue(){
				// 	console.log(this.searchName);
				// 	this.searchName="";
				// },



					rsvp () {
						    axios
						      .post('http://localhost/bootcamp/server.php',
						      	{name:this.name,phone:this.number})
						      .then(function (response) {
						      	console.log(response);
						      	
						      });
						      },

					// searchValue(){
					// 		axios
					// 			.post('http://localhost/bootcamp/server.php',
					// 			{searchname:this.searchname})
					// 		.then(function (response) {
					// 			console.log(response);
					// 		});
					// 	}
 			 }
			
			
		});
		    
            $(document).ready(function() {
        	  //$('.carousel').carousel();
        	  	//initGallery();
        	  	$('.carousel').carousel();
                $('body').scrollspy({ target: '#navbar-example2' })
                
            })

  //         	 function populatePastEvents () {
 	// 			var container =  document.getElementById('past-events-container');
 	// 			 pastEvents.forEach(function(event){
		// -        console.log(event);
		//          container.innerHTML += getPastEventCard(event['img'], event['date'], event['location']);
    //  });
 			// }

           	// function initGallery() {

            //    	var slides=[
            // 		{
            // 			img:'images.jpg',
            // 			active: 'active'
            // 		},
            // 		{
            // 			img:'images1.jpg',
            // 			active: ''
            // 		},
            // 		{
            // 			img:'images2.jpg',
            // 			active: ''
            // 		}

            // 	];

           		// var container = document.getElementById('gallery-carousel-inner');

           		// slides.forEach(function(slide){
           		// 	container.innerHTML += getInnerSlideHTML(slide);
           		// });

           		// $('.carousel').carousel();
           //}

           	// function getInnerSlideHTML(slide) {
           	// 	var html = '';
           	// 	html += '<div class="carousel-item ' + slide['active'] + '">';
           	// 		html += '<img src="' + slide['img'] + '" class="img-responsive w-100">';
           	// 	html += '</div>';
           	// 	return html;

           	// }

            // function formData(){

            // 	var nam=document.getElementById('inputEmail3').value;
            // 	var num=document.getElementById('inputPassword3').value;
            // 	console.log(nam);
            // 	console.log(num);
            // };
            // function searchValue(){
            // 	var value1 = document.getElementById('search').value;
            // 	console.log(value1);
            // }
            
	</script>
</html>