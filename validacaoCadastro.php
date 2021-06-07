<?php include 'conexao.php'; ?>

<?php

// Create connection
$conn = mysqli_connect($host, $user, $pass, $bd);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST["name"];
$userpass = $_POST["pass"];
$usermail = $_POST["mail"];

$sqlInsertUser = "INSERT INTO user (user_name,user_pass,user_mail) VALUES ('$username','$userpass','$usermail')";


 if (mysqli_query($conn, $sqlInsertUser)) {

  } else {
    echo "Error: " . $sqlInsertUser . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>