<?php

$server = "us-cdbr-east-06.cleardb.net";
$user = "b1cd55ef9b037b";
$pass = "40851f57";
$database = "heroku_7148462127f4995";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}

?>