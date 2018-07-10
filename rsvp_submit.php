<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>



    <title>Bootcamp</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Soiree<span class="sr-only">(current)</span></a></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#1">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#2">Past</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#3">Gallery</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>

        <div class="contrainer-fluid my-4" id="1">
           <div class="row justify-content-md-center">
            <div class="col-10">
                <div class="jumbotron">
                    <p class="badge badge-dark">Upcoming Event</p>
                    <h1 class="display-4">Retro Night</h1>
                    <p class="lead">Hey dudes and dudettes, we're gonna have a retro night with wine, cheese and a huge selection of the Beatles, Bob Dylan and Dire Straits. Be sure to register and dress up like you travelled to the 80's</p>
                    <hr class="my-4">
                    <p><i class="fas fa-calendar-alt"></i> 2nd August, 2018</p>
                    <p><i class="fas fa-map-marker-alt"></i> ColoredCow, Gurgaon</p>
                    <br>
                    <p class="lead">
                        <a class="btn btn-primary " href="#" role="button" data-toggle="modal" data-target="#RSVPModal"><i class="fas fa-concierge-bell"></i> I want to attend</a>
                        <a class="btn btn-secondary " href="#" role="button"><i class="fas fa-share"></i> Share it with a Friend!</a>
                    </p>
                </div></div></div></div>
        <hr>
        <div class="contrainer-fluid my-4">
        <div class="row justify-content-center">
        <div class="col-10 ">
            <h1 class="display-4"> Past Events </h1>
            <div class="d-flex justify-content-md-center flex-wrap row" id="past-events-container" >


                <div class="col-4" v-for="todo in pastEvents">

                <div class="card width-18rem">
                    <img class="card-img-top" v-bind:src="todo.img" alt="Card image cap">
                <div class="card-body">
                    <h6><span><i class="fa fa-calendar my-2"></i> {{todo.date}} </span></h6>
                    <h6><span><i class="fa fa-map-marker"></i> {{todo.location}} </span></h6>
                </div>
                </div>
                </div>
        </div></div></div>
        </div>
        <hr>
  <div class="contrainer-fluid my-4" id="3">
        <div class="row justify-content-md-center">
        <div class="col-10">
            <h1 class="display-4"> Gallery </h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="corouselImage">
              <div v-for="todo in slide" class="carousel-item" v-bind:class="{ active: todo.isActive}">
                <img class="d-block w-100" :src="todo.img" alt="">
               </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
        </div>
    </div></div>
        <footer class="footer mt-5">
      <div class="contrainer-fluid navbar-light bg-light text-center">
       <p class="lead"> <span><i class="fas fa-award text-warning"></i> Day 1 at <a href="#"> FrontEnd Bootcamp, CodeTrek</a></span></p>
      </div></div>
    </footer>
    <div class="modal fade" id="RSVPModal" tabindex="-1" role="dialog" aria-labelledby="RSVPModel" aria-hidden="true">
    <div class="modal-dialog" id = "formdata" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-concierge-bell"></i> I want to attend</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"  >
            <form>
                <div class="form-row align-items-center">
                    <div class="col"  >
                        <label class="sr-only" for="inlineFormInputGroup">Name</label>
                        <div class="input-group mb-2">
                            <input type="text"  v-model="name" class="form-control" placeholder="Name">
                         </div>
                    </div>
                </div>
                <div class="form-row align-items-center">
                <div class="col">
                <label class="sr-only" for="inlineFormInputGroup">Phone</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">+91</div>
                    </div>
                    <input type="text" v-model="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
                </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Maybe next time</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="getFormValues()">Yes, I want to attend</button>
        </div>
        </div>
    </div>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>

// for form data output
var apptr = new Vue({
  el: '#formdata',
  data: {
    name: "",
    phone: ""
  },
   methods:{ getFormValues() {
                           axios.post('dbConfig.php', { name: this.name, phone: this.phone
                           }).then(function (response) {
							    console.log(response.data);
							  })
							  .catch(function (error) {
							    console.log(error);
							  });
                          }}
						})

//for past event
var app1 = new Vue({
  el: '#past-events-container',
  data: {
    pastEvents: [
      {
            'img' : 'image/party1.JPG',
            'date' : '22nd March, 2018',
            'location' : 'Tehri'
        },
        {
            'img' : 'image/party.JPG',
            'date' : '13th December, 2017',
            'location' : 'Gurgaon'
        },
        {
            'img' : 'image/party3.JPG',
            'date' : '5th September, 2017',
            'location' : 'Tehri'
        }
    ]

  }

})

//for corousel
var app = new Vue({
  el: '#corouselImage',
  data: {


    slide: [
      {
            isActive: true,
            'img' : 'image/slide1.JPG'
        },
        {
           isActive: false,
            'img' : 'image/slide2.JPG'
        },
        {
            isActive: false,
            'img' : 'image/slide3.JPG'
        }
    ]

  }
})
   </script>
  </body>
</html>
