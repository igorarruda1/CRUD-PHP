<?php include 'conexao.php'; ?>

<?php  




// Create connection
$conn = mysqli_connect($host, $user, $pass, $bd);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$_mail = $_POST["mail"];
$_pass = $_POST["pass"];

 $sqllogin = "SELECT * FROM  user WHERE ('$_mail' = user_mail and '$_pass' = user_pass)";


if (mysqli_query($conn, $sqllogin)) {

  echo $sqllogin;




} else {
  echo "Error: " . $sqllogin . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>