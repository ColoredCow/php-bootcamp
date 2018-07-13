<?php


$dbhost = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = "myguests";

$conn = mysqli_connect("$dbhost", "$username", "$password", "$dbname");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$_POST = json_decode(file_get_contents("php://input"), true);
$name = $_POST['name'];
$phone = $_POST['phone'];

?>

<?php 

$sql = "INSERT INTO guests (name, phone)
VALUES ( '$name' , '$phone' )";

if ($conn->query($sql)===TRUE)
 {
    echo "not inserted";
// } else 
// {
//     echo "inserted";
// }
// $conn->close();
// die()
}

 ?>