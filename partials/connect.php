<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "registration";
$port = 3308; 

$con = mysqli_connect($servername, $username, $password, $database, $port);
if($con){
    echo "Database connected successfully";
}else{
    // die(mysqli_error($con));
    die("Connection failed: " . mysqli_connect_error());
}
?>