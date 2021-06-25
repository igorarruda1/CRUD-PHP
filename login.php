<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">
    <title>Tela 1</title>
   
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="card card-container">
                    <div class="col">
                        <p class="profile">CLUD-PHP</p>
                        <form class="form-signin" action="logar.php" method="POST">
                            <input type="email" id="mail" name="mail" class="form-control" placeholder="E-mail" required autofocus>
                            <input type="password" id="pass" name="pass" class="form-control" placeholder="Senha" required>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
                            <a class="btn-a btn-signin"  href="cadastrar.php">Cadastrar-se </a>
                        </form><!-- /form -->
                    </div>
                </div> <!-- Fim card-container -->
            </div>
        </div><!-- Fim do container -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>






