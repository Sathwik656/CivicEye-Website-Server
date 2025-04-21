<?php
$host = "localhost";
$user = "phpmyadmin";
$password = "212173314_MKs";
$database = "user_db";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
?>