<?php 

require 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){

    require_once 'UsuarioClass.php';

    $u = new Usuario();
    $userlogged = $u->logged($_SESSION['idUser']);

    $nomeuser =  $userlogged['user_name'];

}else{
    header("location: login.php");
}

?>