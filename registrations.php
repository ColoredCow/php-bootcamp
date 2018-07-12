<!DOCTYPE html>
<html>
	<head>
		<title>Registrations</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	</head>
	<!-- -->
	<body>
		<div id="app2">
			<nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
			    <a class="navbar-brand" href="#"><b>Soiree</b></a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
		  	    </button>


	    	 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	    <ul class="navbar-nav mr-auto">
		    	    	<li class="nav-item">
		    	        <a class="nav-link" href="index.php#Upcoming" href="#Upcoming">Upcoming</a>
		    	      	</li>
		    	    	<li class="nav-item">
		    	        <a class="nav-link" href="index.php#Past" href="#Past">Past</a>
		    	      	</li>
		    	      	<li class="nav-item">
		    	        	<a class="nav-link" href="index.php#Gallary" href="#Gallary">Gallary</a>
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

	    	<div class="footer-copyright text-center py-3"><i class="far fa-award"></i> Day 1 at 
				<a href="https://coloredcow.com/codetrek/"> FrontEnd Bootcamp, CodeTreck</a>
			</div>

	    	


	    	
	    	<!-- <div class="text-center p-2">
		      <i class="far fa-award"></i> Day 1 at <span class="text-primary"> FrontEnd Bootcamp, CodeTreck</span> 
	      	</div> -->
		</div>

		<table class="table">                     
		    <div class="table responsive">
		        <thead>
		            <tr>
		              <th>serial number</th>
		              <th>name</th>
		              <th>phone</th>
		            </tr>
		        </thead>
		        <tbody>
					<?php 

					$host = "127.0.0.1";
					$username = "root";
					$password = "";
					$dbname = "db_new";

					// Create connection
					$conn = new mysqli($host, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
				    	die("Connection failed: " . $conn->connect_error);
					} 
					echo "Connected successfully";
					$_POST = json_decode(file_get_contents('php://input'), true);
					
					
					// echo 'name: '.$_POST['name'];
					// echo 'phone: '.$_POST['phone'];
					//var_dump($_POST);
					
					$sql = "INSERT INTO form_data (name, phone)
					VALUES ('" . $_POST['name'] . "' ," . $_POST['phone'] . ")";
					
					if ($conn->query($sql) === TRUE) {
					    echo "New record created successfully";
					}// else {
					//     echo "Error: " . $sql . "<br>" . $conn->error;
					// }
					$sql2 = "SELECT * FROM form_data";
 					$result = $conn->query($sql2);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {


					        echo '<tr>
					                  <td scope="row">' . $row["serial number"]. '</td>
					                  <td>' . $row["name"] .'</td>
					                  <td> '.$row["phone"] .'</td>
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
