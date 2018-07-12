<?php
	
	// $rest_json = file_get_contents("php://input");
	// $_POST = json_decode($rest_json, true);
	
	// echo 'name: '.$_POST['name'];
	// echo 'phone: '.$_POST['phone'];
	// echo 'search: '.$_POST['search'];
	// var_dump($_POST);
	
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
	
	
	echo 'name: '.$_POST['name'];
	echo 'phone: '.$_POST['phone'];
	var_dump($_POST);
	
	$sql = "INSERT INTO form_data (name, phone)
	VALUES ('" . $_POST['name'] . "' ," . $_POST['phone'] . ")";
	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
	die();
