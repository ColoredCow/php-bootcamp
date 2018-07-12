<?php

$_POST = json_decode(file_get_contents('php://input'), true);
if (isset($_POST['nameInput']) && isset($_POST['phoneInput'])) {
    $mysqli = new mysqli("localhost", "root", "@bhishek", "php_bootcamp");
    $insertQuery = "INSERT INTO php_bootcamp.rsvp (name, phone) VALUES ('" . $_POST['nameInput'] . "' ," . $_POST['phoneInput'] . ")";

    if (!$mysqli->query($insertQuery)) {
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    echo 'done';
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Soir&eacute;e</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<style type="text/css">
	body {
		padding-top: 65px;
	}
	</style>
</head>
<body data-spy="scroll" data-target="#navbar-soiree" data-offset="65">
	<div id="app">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar-soiree">
			<div class="container-fluid">
				<a class="navbar-brand mb-0 h1" href="/">Soir&eacute;e</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#upcoming">Upcoming</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#past">Past</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="registrations.php">Registrations</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<div class="input-group">
							<input class="form-control" v-model="searchQuery" type="search" placeholder="Search for..." aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary"  @click="spitSearchFormData"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="jumbotron" id="upcoming">
					<p class="badge badge-dark">Upcoming Event</p>
					<h1 class="jumbotron-heading" >Retro Night</h1>
					<p class="lead">Hey dudes and dudettes, we're gonna have a retro night with wine, cheese and a huge selection of the Beatles, Bob Dylan and Dire Straits. Be sure to register and dress up like you travelled to the 80's </p>
					<hr class="my-4">
					<p><i class="fas fa-calendar-alt"></i> 2nd August, 2018</p>
					<p><i class="fas fa-map-marker-alt"></i> ColoredCow, Gurgaon</p>
					<a class="btn btn-primary btn-md" href="#" role="button" data-toggle="modal" data-target="#RSVPmodal">I want to attend</a>
					<a class="btn btn-secondary btn-md" href="#" role="button">Share it with a Friend!</a>
				</div>
			</div>
			<hr>
		</div>

		<div class="container">
			<h2 class="heading" id="past">Past Events</h2>
			<div class="row">
				<div class="col-md-4" v-for="event in pastEvents">
					<div class="card mb-4 box-shadow">
						<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" :src="event.img">
						<div class="card-body">
							<p class="card-text">
								<p><i class="fas fa-calendar-alt"></i> {{event.date}}</p>
								<p><i class="fas fa-map-marker-alt"></i> {{ event.location }}</p>
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>

		<div class="container" id="gallery">
			<h2 class="heading">Gallery</h2>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div v-for="item in carouselItems" :class="item[1]">
						<img class="d-block w-100" :src="item[0]" alt="First slide">
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

		<br>

		<div class="container-fluid bg-light">
			<div class="row justify-content-md-center">
				<div class="col-10 text-muted text-center p-2">
					<i class="fas fa-award text-warning"></i> Day 1 at <a href="https://coloredcow.com/codetrek-session/front-end-development/">FrontEnd Bootcamp, CodeTrek</a>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="RSVPmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">RSVP</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="." method="post" @submit.prevent="onRsvpSubmit">
					<div class="modal-body">
							<div class="form-row align-items-center">
								<div class="col">
									<label class="sr-only" for="inlineNameInputGroup">Name</label>
									<div class="input-group mb-2">
										<input type="text" name="rsvpName" v-model="nameInput" class="form-control" id="inlineNameInputGroup" placeholder="Name">
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
										<input type="text" name="rsvpPhone" v-model="phoneInput" class="form-control" id="inlinePhoneInputGroup" placeholder="Phone">
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Yes, I want to attend</button>
					</div>
					</form>

				</div>
			</div>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="/app.js"></script>



	<!--Bootstrap scripts-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
