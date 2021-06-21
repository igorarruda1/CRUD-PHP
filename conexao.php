<?php

session_start();

$host =  "localhost";
$user = "root";
$pass = "";
$bd = "crud-php";

global $conn;

try{
    $conn = new PDO("mysql:dbname=".$bd."; host=".$host,$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: " .$e->getMessage();
    exit;
}
?> 
