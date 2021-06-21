<?php 

Class Usuario {


    public function login($user_mail, $user_pass){

        global $conn;

        
        $sql = $conn-> prepare("SELECT * FROM user WHERE user_mail = :user_mail AND user_pass = :user_pass");
        $sql -> bindValue(":user_mail",$user_mail);
        $sql -> bindValue(":user_pass",$user_pass);
        $sql->execute();

        if($sql->rowCount()>0){
            $dado = $sql->fetch();

                $_SESSION['idUser'] =  $dado['id_user'];

                return true;

        }else{
            return false;
        }

    }
}
?>