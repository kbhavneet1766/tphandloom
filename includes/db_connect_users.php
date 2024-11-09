<?php
$username = "root";
$hostname = "localhost";
$password = "";
$db_name = "ekart";

$conn = new mysqli($hostname, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection Failure.......... ".$conn->connect_error);
}
else{
    echo '<script>console.log("connection successful")</script>';
}