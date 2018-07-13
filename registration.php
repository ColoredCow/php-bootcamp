<!DOCTYPE html>
<html>
<head>
	<title>Registration Database</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<!-- 		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar-example2">
  	  		<a class="navbar-brand" href="#">Soiree</a>
  	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
  	  		</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="nav mr-auto nav-pills">
	    			<li class="nav-item"><a class="nav-link" href="bootCampDay1.php#up" target="_blank">Upcoming <span class="sr-only">(current)</span></a>
	    			</li>
	    			<li class="nav-item"><a class="nav-link" href="bootCampDay1.php#past" target="_blank">Past</a>
	    			</li>
	    			<li class="nav-item"><a class="nav-link" href="bootCampDay1.php#gallery" target="_blank">Gallery</a>
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
  		</nav> -->



  		<!-- Table Created -->

		<table class="table table-striped">                     
	   	   <div class="table responsive">
	         <thead>
	            <tr>
	              <th>ID</th>
	              <th>Name</th>
	              <th>Phone</th>
	            </tr>
	          </thead>
	          <tbody>


	<?php 
	
	$rest_json = file_get_contents("php://input");
	$_POST = json_decode($rest_json, true);

	//DataBase Connectivity

	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$db = "mydb";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	//if(showMessage==true){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		//}


	$sql = "INSERT INTO hello (id,name, phone)
		VALUES ($name', '$phone')";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		

		
	$sq = "SELECT * FROM hello";
	$result=$conn->query($sq);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {


	        echo '<tr>
	                  <td scope="row">' .$row["Id"] .'</td>
	                  <td>' . $row["Name"] .'</td>
	                  <td> '.$row["Phone"] .'</td>
	                </tr>';

	    }
	} 
	


		$conn->close();
	
	print ' name: '.$_POST['name'];
	print ' phone: '.$_POST['phone'];
	//print ' searchname '.$_POST['searchname'];




		var_dump($_POST);
		die();


	
	 ?>
	        </tbody>
	    </div>
	</table>

  		<footer class="text-center font-weight-bold">
			<div class="text-muted p-4"><i class="far fa-award"></i> Day 1 at 
				<span class="text-primary font-italic"><a href="#">FrontEnd Bootcamp, 2018.</a> </span>
			</div>
		 </footer>
</body>
</html>