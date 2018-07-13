<!doctype html>
<html lang="en">
  <head>
    <title>Soiree</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
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
              <a class="nav-link" href="#Pastevents">Past</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Gallary">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registration.php">Registrations</a>
            </li>
            
            
          </ul>
          
          
          <form class="form-inline my-2 my--0">
            <div class="input-group">
              <input type="text" id="search" class="form-control" placeholder="Search for ..." aria-label="Search for ..." aria-describedby="basic-addon2" v-model="search" name="search" >
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" v-on:click="myFunction"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
          
        </nav>
        
        
        
        <br>
        <br>
        <div data-spy="scroll" data-target="navbar-example2" data-offset="0">
          <div class="container">
            <div class="jumbotron" id="Upcoming">
              
              <span class="badge badge-dark">Upcoming events</span>
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
              <i class="fas fa-concierge-bell" ></i> I want to attend
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
                  
                    <div class="modal-body">
                        </div>
                    <div v-show="registrationsuccess == true" >
                      You have been succesfully registered!
                    </div>
                    <div v-show="registrationerror == true" >
                      We'll miss you..!
                    </div>
                      <form class="form-inline"  id="form" v-show="formsubmitted == false">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter your name" v-model="name"><br>
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Phone</label><br>
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend"><br>
                            <div class="input-group-text">+91</div><br>
                          </div>
                          <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter your number" v-model="phone">
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> May be next time</button>
                        <button type="button" class="btn btn-primary" v-on:click="myFunction">Yes, I want to atttend</button>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <button type="button" class="btn btn-secondary"><i class="fas fa-share"></i> Share it with a friend</button>
            </div>
            <div class="container" id="Pastevents">
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
        <div id= "Gallary">
          <div class="container">
            <h1>{{ gallarytitle }}</h1><br>
            <div class="row justify-content-md-center">
              <div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner" >
                  <div class="carousel-item" v-for="(image,idx) in gallary" :class="{ active: idx==0 }">
                    <!-- <img :src="image.img" class="img-fluid" class="img-responsive w-100 class="d-block w-100">
                  </div> -->
                  <!--  <div class="carousel-item active"> -->
                  <img class="d-block w-100" :src="image.img" class="img-fluid">
                </div>
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div><br>
      <div class="text-center p-2">
        <i class="far fa-award"></i> Day 1 at <span class="text-primary"> FrontEnd Bootcamp, CodeTrek</span>
      </div>
    </div>
  </div>
</div>
</body>
<script>
var app = new Vue({
el: '#app',
data: {
name : '',
phone : '',
search :'',
formsubmitted: false,
registrationerror:false,
registrationsuccess:false,
eventstitle: 'Past Events',
gallarytitle: 'Gallery',
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
'img' : '1.jpg',
//'active' : 'active'
},
{
'img' : '2.jpg',
//'active' : ''
},
{
'img' : '3.jpg',
//'active' : ''
}
],
},
methods: {
myFunction : function(){
console.log(this.name);
console.log(this.phone);
console.log(this.search);
axios
.post('http://localhost/soiree/server.php', {
name: this.name,
phone: this.phone,
search: this.search
})
//.then(function (response) {console.log(response);})
.then(response => {this.name=response;} )
this.name = '';
this.phone= '';
this.search= '';
this.formsubmitted = true;
this.registrationsuccess=true;
// .catch(function (error) {
//                console.log(error); };
},
}
});
$(document).ready(function() {
$('.carousel').carousel()
//populatePastEvents ();
})
</script>
</html>