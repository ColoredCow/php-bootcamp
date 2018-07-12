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

$data = json_decode(file_get_contents("php://input"));
  $username = $data->name;
  $phone = $data->phone;
  $email = $data->email;


$sql = "INSERT INTO attendee(name, phone, email) VALUES ('$username','$phone','$email')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error";
}

$conn->close();


?>