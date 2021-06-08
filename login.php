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

  // Selecionar apenas o usuario do email
 $sql = "SELECT * FROM user WHERE ('$_mail' = user_mail and '$_pass' = user_pass)";
 $result = $conn->query($sql);

 if($result-> num_rows > 0) {
   // saida de cada linha da tabela
    while($linha = $result-> fetch_assoc()){
      echo 'ID: ' , $linha['id_user'],'<BR>';
      echo 'NOME: ', $linha['user_name'],'<br>';
      echo 'EMAIL: ', $linha['user_mail'],'<br>';
    }

  

 }else{
  echo  '<script>alert("Email ou senha incorreta!");</script>';
    
 }



mysqli_close($conn);
?>