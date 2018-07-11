<!DOCTYPE html>
<html>
<head>
    <title>Soirée</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<style>
    .carousel-item {
        width: 100%;
        height: 10em;
        padding: 10em;
        background: #eaeaea;
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Soirée</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Upcoming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Past</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
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
        <div class="container">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-10">
                    <hr>
                    <h1 class="display-4"> {{ title }}</h1>
                    <div class="row justify-content-md-center">
                        <div class="col-4" v-for="event in pastEvents">
                            <div class="card">
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

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-10">

                    <hr>
                    <h1 class="display-4">Gallery</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <h4> First Slide</h4>
                            </div>
                            <div class="carousel-item">
                            <h4>Second Slide</h4>
                            </div>
                            <div class="carousel-item">
                            <h4>Third Slide</h4>
                            </div>
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
                <div class="modal-body">
                    <div class="alert alert-success" v-show="registrationSuccess == true">
                        Registration successful!
                    </div>
                    <div class="alert alert-danger" v-show="registrationError == true">
                        OOPS! Something went wrong. Please try again later.
                    </div>
                    <form v-show="formSubmitted == false">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Maybe next time</button>
                    <button type="button" class="btn btn-primary" @click="registerPerson()">Yes, I want to attend</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script>

    var app = new Vue({
        el: '#app',
        data: {
            registrationSuccess: false,
            registrationError: false,
            formSubmitted: false,
            title: 'Past Events',
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
        },
        methods: {
            registerPerson() {
                axios.post('registration.php', {
                    name: document.getElementById('name').value,
                    phone: document.getElementById('phone').value
                })
                .then((response) => {
                    this.formSubmitted = true;
                    this.registrationSuccess = true;
                })
                .catch((error) => {
                    this.formSubmitted = true;
                    this.registrationError = true;
                });
            }
        }
    });

    // $(document).ready(function() {
    //     $('.carousel').carousel();
    //     populatePastEvents ();
    // })


function populatePastEvents () {

    var container =  document.getElementById('past-events-container');

    pastEvents.forEach(function(event){
        container.innerHTML += getPastEventCard(event['img'], event['date'], event['location']);
    });
}


function getPastEventCard(img, date, location) {

    var html = '';
    html += '    <div class="col-4">';
    html += '    <div class="card">';
    html += '        <img class="card-img-top" src="' + img + '" alt="Card image cap">';
    html += '        <div class="card-body">';
    html += '            <p class="card-title"><i class="fas fa-calendar-alt"></i> ' + date + '</p>';
    html += '            <p class="card-text"><i class="fas fa-map-marker-alt"></i> ' + location + '</p>';
    html += '        </div>';
    html += '    </div>';
    html += '</div>';

    return html;
}

</script>
