<!DOCTYPE html>
<html>
<head>
    <title>Soiree</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="#">Soiree</a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#UpcomingEvents">Upcoming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Past">Past</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ragistration.php">Ragistration</a>
            </li>

            </ul>
            <form class="form-inline my-2 my--0 ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for ..." aria-label="Search for ..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </nav>
    <br>
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10">
                <div class="jumbotron">
                    <p class="badge badge-dark" id="UpcomingEvent">Upcoming Event</p>
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
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10">
                <hr>
                <h1 class="display-4" id="Past">Past Events</h1>
                <div class="row justify-content-md-center" id="past-events"></div>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center"  >
            <div class="col-10">

                <hr>
                <h1 class="display-4" id="Gallery">Gallery</h1>
                <div id="galleryCrousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" id="gallery-events">

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="container bg-light">
        <div class="row justify-content-md-center">
            <div class="col-10 text-muted text-center p-2">
                <i class="fas fa-award text-warning"></i> Day 1 at <a href="https://coloredcow.com/codetrek-session/front-end-development/">FrontEnd Bootcamp, CodeTrek</a>
            </div>
        </div>
    </div>


    <div class="modal fade" id="RSVPModal" tabindex="-1" role="dialog" aria-labelledby="RSVPModel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-concierge-bell"></i> I want to attend</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" >
            <form action="#" id="form">
                <div class="form-row align-items-center">
                    <div class="col">
                        <label class="sr-only" for="inlineFormInputGroup">Name</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="name" placeholder="Name">
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
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
                </div>
                </div>
            </form>
        </div>
        <div id="data" class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Maybe next time</button>
            <button v-on:click="modelcall" type="submit" class="btn btn-primary">Yes, I want to attend</button>
        </div>
        </div>
    </div>
</div>

</body>


<script>
var formsubmission = new Vue({
  el: '#data',
  methods: {
    modelcall: function (event) {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;

axios.post('database.php', {
         name: name,
         phone: phone,


       })
       .then(function (response) {
         alert(response.data);
         name:'';
         phone:'';
       })
    }

  }
})


</script>
