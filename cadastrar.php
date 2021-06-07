<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
</head>
<body>
        <h1>Tela de Cadastramento</h1>

        <form action="validacaoCadastro.php" method="post">
    <label for="fname">Nome: </label>
    <input type="text" placeholder="Digite seu nome" name="name"></input><br><br>
    <label for="fpass">Senha: </label>
    <input type="password"  placeholder="Digite sua senha" name="pass"></input> <br><br>
    <label for="Fmail">E-mail: </label>
    <input type="email"  placeholder="Digite seu E-mail" name="mail"></input> <br><br>
    <button type="submit">CADASTRAR</button>
    </form>
    <a href="index.php">VOLTAR</a>
</body>
</html>