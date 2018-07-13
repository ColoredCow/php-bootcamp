<html>
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
		<nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
			<a class="navbar-brand" href="index.php"><b>Soiree</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php #Upcoming">Upcoming</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php #Pastevents">Past</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php #Gallary">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="registration.php">Registrations</a>
					</li>
					
					
				</ul>
				<form class="form-inline my-2 my--0">
					<div class="input-group">
						<input type="text" id="search" class="form-control" placeholder="Search for ..." aria-label="Search for ..." aria-describedby="basic-addon2" v-model="search">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" v-on:click="myFunction"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
				
			</nav>
			<br>
			
			<div class="text-center p-2">
				<i class="far fa-award"></i> Day 1 at <span class="text-primary"> FrontEnd Bootcamp, CodeTrek</span>
			</div>
			<table class="table table-striped">
				<div class="table responsive">
					<thead>
						<tr>
							<th>Serial Number</th>
							<th>Name</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$dbhost = '127.0.0.1';
						$username = 'root';
						$password = '';
						$dbname = "myguests";
						
						$conn = new mysqli($dbhost, $username, $password, $dbname);
						if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						}
						echo "connected successfully";

						$_POST = json_decode(file_get_contents("php://input"), true);
						?>
						<br>
						<?php
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						?>
						<?php
						
						$sql = "INSERT INTO guests (name, phone)
						VALUES ( '$name' , '$phone' )";
						if(empty($_POST['name']) || empty($_POST['Phone'])||($conn->query($sql)===TRUE))
					//f(isset($_POST)||($conn->query($sql)===TRUE))

						{
						echo "inserted";
						}
						else{
						echo "ERROR: Could not connect. " . $sql. "<br>" .$conn->error;
						echo "not inserted";
						}
						
						?>

						<?php
						$sql1 = "SELECT * FROM guests";
						$result = $conn->query($sql1);
						if ($result->num_rows > 0) {
						
						while($row = $result->fetch_assoc()) {
						echo '<tr>
									<td scope="row">' . $row["id"]. '</td>
									<td>' . $row["name"] .'</td>
									<td> '.$row["Phone"] .'</td>
						</tr>';
						}
						} else {
						echo "0 results";
						}
						$conn->close();
						die();
						?>
					</tbody>
				</div>
			</table>
		</body>
	</html>