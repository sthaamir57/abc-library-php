<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("Error".mysquli_connect_error());
}
?>