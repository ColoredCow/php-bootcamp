<?php

$mysqli = new mysqli("localhost", "root", "@bhishek", "php_bootcamp");
if (!($res = $mysqli->query("SELECT * FROM rsvp"))) {
    echo "Fetch failed: (" . $mysqli->errno . ") " . $mysqli->error;
    die();
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
<body>
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
							<a class="nav-link active" href="registrations.php">Registrations</a>
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
<table class="table table-striped table-bordered">
			<tr>
				<th>Name</th>
				<th>Phone</th>
			</tr>

<?php

$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo '
	    <tr>
	    	<td>' . $row['name'] . '</td>
	    	<td>' . $row['phone'] . '</td>
		</tr>
	';
}
?>
</table>
</div>
<br>

		<!-- footer -->
		<div class="container-fluid bg-light">
			<div class="row justify-content-md-center">
				<div class="col-10 text-muted text-center p-2">
					<i class="fas fa-award text-warning"></i> Day 3 at <a href="https://coloredcow.com/codetrek-session/front-end-development/">Php Bootcamp, CodeTrek</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
