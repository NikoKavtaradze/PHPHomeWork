<?php

$dsn = "mysql:host=localhost;dbname=banktransactiondb";
$db_username = "Kavtara";
$db_password = "";

try {
    $pdo = new PDO($dsn, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}