<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (name, surname, email, pwd) VALUES (:name, :surname, :email, :password);";

        $statement = $pdo->prepare($query);
        
        $statement->bindParam(":name", $name);
        $statement->bindParam(":surname", $surname);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $pwd);

        $statement->execute();

        $pdo = null;
        $statement = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
}else{
    header("Location: ../index.php");
}