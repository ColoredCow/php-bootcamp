<?php

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);
// $_POST
$name = $_POST['name'];
$phone = $_POST['phone'];

// db connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bootcamp_demo';

$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo 'error';die();
}

// store $_POST values in database
$query = "INSERT INTO registrations (name, phone) VALUES ('$name', '$phone')";

if ($conn->query($query) === TRUE) {
    echo 'success';
} else {
    echo 'error';
}


