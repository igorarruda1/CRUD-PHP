<?php   

if(isset($_POST["mail"]) && !empty($_POST["mail"]) && isset($_POST["pass"]) && !empty($_POST["pass"] )){

    require  'conexao.php';
    require  'UsuarioClass.php';

    $u = new Usuario();
    

    $user_mail  =  addslashes($_POST["mail"]);
    $user_pass =  addslashes($_POST["pass"]);

     if($u->login($user_mail,$user_pass)== true ){
        if(isset($_SESSION['idUser'])){
            header("location:index.php");
        }else{
            header("location:login.php");
        }

     }else{
        header("location:login.php");
        
     }

} else {

    header("location:login.php");
}

   



?>