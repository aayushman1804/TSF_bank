<?php

// Connecting to database 
$server = "localhost";
$username = "root";
$password = "numen6744";
$database = "tsf_bank";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn){
    die("error : ".mysqli_connect_error());
}

?>