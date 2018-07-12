<?php
$servername = "localhost";
$database = "phpboot";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, phone FROM rsvp";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

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
    <br>

    <div class="container">
       <h1>Guest list</h1>
       <table class="table table-striped">
         <div class="table responsive">
         <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Number</th>
            </tr>
        </thead>
        <tbody>

                <?php
while ($row = mysqli_fetch_assoc($result)) {
    echo '  <tr>
                                  <td>' . $row["id"] . '</td>
                                  <td>' . $row["name"] . '</td>
                                  <td>' . $row["phone"] . '</td>
                                  </tr>';

}?>
        </tbody>
       </table>

</div>
<footer class="footer mt-5">
      <div class="contrainer-fluid navbar-light bg-light text-center">
       <p class="lead"> <span><i class="fas fa-award text-warning"></i> Day 1 at <a href="#"> FrontEnd Bootcamp, CodeTrek</a></span></p>
      </div>
</footer>
</body>
</html>