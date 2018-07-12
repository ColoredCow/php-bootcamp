<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bootcamp_data";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
        $sql = 'SELECT * FROM attendee';
        $result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <title>Soirée</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="home_vuejs.html">Soirée</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" href="home_vuejs.html#upcoming">Upcoming</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="home_vuejs.html#past-events">Past</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="home_vuejs.html#gallery">Gallery</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="registration.php">Registered</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </form>
      </div>
    </nav><br>
		<div class="container">
		  <h2>Hover Rows</h2>
		  <table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Serial No.</th>
		        <th>Name</th>
		        <th>Phone</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php 
					while($row = mysqli_fetch_assoc($result)) {?>
		         <tr>
				 	<td><?php echo $row["id"]?></td>
				    <td><?php echo $row["name"]?></td>
				    <td><?php echo $row["phone"]?></td>
		      	</tr>
		      <?php }?>
		    </tbody>
		  </table>
		</div>
  </body>
  </html>