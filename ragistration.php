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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="phpbootcamp.php">Soiree</a>
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
    <div class="container">
    <h1>Ragistration List</h1>
    <table class="table table-striped">
    <div class="table responsive">
        <thead>
            <tr>
               <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Number</th>

            </tr>
        </thead>
        <tbody>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, phone FROM form_data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                  <td scope="row">' . $row["id"] . '</td>
                  <td>' . $row["name"] . '</td>
                  <td>' . $row["phone"] . '</td>
                  </tr>';

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</tbody>
</table>
</div>
 <div class="container bg-light">
        <div class="row justify-content-md-center">
            <div class="col-10 text-muted text-center p-2">
                <i class="fas fa-award text-warning"></i> Day 1 at <a href="https://coloredcow.com/codetrek-session/front-end-development/">FrontEnd Bootcamp, CodeTrek</a>
            </div>
        </div>
    </div>

</body>

