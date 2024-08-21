<?php  

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'enquiry';

$conn = mysqli_connect($host, $username, $password, $database);

if ( !$conn ){
    die("Mysqli connection error");
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// die($name);

$query = "INSERT INTO enquiry (name,  email, subject, message) values ( '$name', '$email', '$subject', '$message' )";

$res = mysqli_query($conn, $query);


mysqli_close($conn);

echo 'OK';

?>