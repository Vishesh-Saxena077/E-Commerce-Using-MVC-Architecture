<?php
// Databse Configuration
$host = "localhost";
$dbname = "ecommerce_db";
$username = "root";
$password = "";

//Attempt to connect to the databse
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Connection Failed:" . $e->getMessage());
}
?>