<?php
$host = 'localhost';
$db = 'HomeWork_10';  
$user = 'Kavtara';   
$pass = '';          

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Database connection error: " . $mysqli->connect_error);
}
?>
