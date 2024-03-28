<?php

if ($_SERVER["REQUEST_METHOD"]  == "POST"){
    $username = $_POST["Username"];
    $email = $_POST["Email"];
    $pwd = $_POST["Pwd"];

    try{
        require_once "dbh.inc.php";
        
        $query = "INSERT INTO user_info (Username, Email, Pwd) VALUES (?, ?, ?);";  
        
        $stmt = $pdo->prepare($query);

        $stmt ->execute([$username,$email,$pwd]);

        $pdo = null;
        $stmt = null;

        header("location: ../signup.inc.php");
        die();

    } catch (PDOException $e){
        die("Query Failed: " . $e-> getMessage());
    }
    
}else{
    header("location: ../signup.inc.php");
}