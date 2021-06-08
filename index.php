<?php
require_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela 1</title>

</head>
<body>
        <h1>CRUD - PHP</h1>

    <form action="?go=logar" method="POST">
    <label for="fname">E-mail: </label>
    <input type="text" placeholder="Digite E-mail"  name="mail"></input><br>
    <label for="fpass">Senha: </label>


    
   
    <input type="password"  placeholder="Digite sua senha"  name="pass" id="pass"></input> <br>


    <button type="submit" value="submit" >LOGIN</button>
    </form>
    <a href="cadastrar.php">CADASTRO</a>
</body>
</html>


<?php  

    if(isset($_GET["go"])){
        if (($_GET['go']) == 'logar'){
            $mail = $_POST['mail'];
            $pwd = $_POST['pass'];
        
            if(empty($mail)){
                echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
            }elseif(empty($pwd)){
                echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
        }else{
           echo $query = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE user_mail = '$mail' AND user_pass = '$pwd'"));
           if($query == 1){
			echo "<script>alert('Usuário logado com sucesso.');</script>"; 
            echo "<meta http-equiv='refresh' content='0, url=login.php'>";
        
        }else{
                echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
        
        }
    }
}
    }

?>


