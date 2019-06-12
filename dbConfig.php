<?php
$servername = "localhost";
$database = "phpboot";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$name = $data->name;
$phone = $data->phone;

$sql = "INSERT INTO rsvp VALUES ('$name','$phone')";

if ($conn->query($sql)) {
    echo "successfull";
} else {
    echo "failed";
}

$conn->close();
