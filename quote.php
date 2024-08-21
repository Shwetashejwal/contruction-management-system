<?php  

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'enquiry';

$conn = mysqli_connect($host, $username, $password, $database);

if ( !$conn ){
    die("Mysqli connection error");
}

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$quote = $_GET['quote'];

// die($name);

$query = "INSERT INTO quote (name, email, phone, quote) values ( '$name', '$email', '$phone', '$quote' )";

$res = mysqli_query($conn, $query);

mysqli_close($conn);

echo 'OK';

?>