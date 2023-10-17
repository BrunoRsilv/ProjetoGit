<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <a href="home.php">Voltar</a>

<div class="login" > 
    <h3> Login </h3>  
    <br>
    <form action="testLogin.php" method="POST">
    
    <input type="text" class="form-control" placeholder="E-mail" name="email" >
    <br>
    
    <input type="password" class="form-control" placeholder="Senha" name="senha" >
    <br>
    <a href="#">Esqueceu sua senha? </a> <br> <br>
    <a href="cadastro_user.php">Quero me cadastrar </a>

    <input type="submit" class="btn btn-success btn-sm  btn-entrar" name="submit" value="Entrar"> 
    </form>
</div>  
</body>
</html>