<?php

$host =  "localhost";
$user = "root";
$pass = "";
$bd = "crud-php";

// conexao com o bando de dados 
$mysqli = new mysqli($host, $user, $pass, $bd);

if($mysqli -> connect_errno)
    echo "Falha na conexão: ( " .$mysqli-> connect_errno . ") " . $mysqli->connect_error;



    // Create connection
$conn = mysqli_connect($host, $user, $pass, $bd);
?> 
