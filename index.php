<?php 
 require 'conexao.php';

 if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>
<body>



BEM VINDO

<a href="logout.php">SAIR</a>
</body>
</html>

<?php  

 else: header("location: login.php"); endif;

?>