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

$data = json_decode(file_get_contents("php://input"));
$username = $data->name;
$phone = $data->phone;

$sql = "INSERT INTO form_data(name, phone) VALUES ('$username','$phone')";

if ($conn->query($sql) === true) {
    echo "Thankyou for registration";
} else {
    echo "Error";
}

$conn->close();
