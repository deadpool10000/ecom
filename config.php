<?php 


$server = "localhost";
$username = "root";
$password = "";
$db = "ecom";
$link = new mysqli($server, $username, $password, $db);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 


?>