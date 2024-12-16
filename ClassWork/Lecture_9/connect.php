<?php
$servername = "localhost";
$username = "Kavtara"; 
$password = "";  
$dbname = "eu_mysql_2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>