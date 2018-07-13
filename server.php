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


	$sql = "INSERT INTO hello (name, phone)
		VALUES ('$name', '$phone')";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		

		$conn->close();
	
	print ' name: '.$_POST['name'];
	print ' phone: '.$_POST['phone'];
	//print ' searchname '.$_POST['searchname'];




		var_dump($_POST);
		die();


	
	 ?>