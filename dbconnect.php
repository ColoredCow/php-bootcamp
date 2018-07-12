<?php
$conn = new mysqli("localhost", "root", "", "bootcamp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$name = $data->name;
$phone = $data->phone;

$sql = "INSERT INTO rsvpData VALUES ('$name','$phone')";

if ($conn->query($sql)) {
    echo "successfull";
} else {
    echo "failed";
}

$conn->close();
