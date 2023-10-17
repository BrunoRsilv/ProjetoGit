<?php 
    if(isset($_POST['submit'])){
    print_r($_POST['nome']);
    echo "<br>";
    print_r($_POST['email']);
    echo "<br>";
    print_r($_POST['senha']);
    echo "<br>";
    print_r($_POST['telefone']);
    echo "<br>";
    print_r($_POST['sexo']);
    echo "<br>";
    print_r($_POST['data_nasc']);
    echo "<br>";
    print_r($_POST['rua']);
    echo "<br>";
    print_r($_POST['cidade']);
    echo "<br>";
    print_r($_POST['estado']);

    include_once ('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha, telefone, sexo, data_nasc, rua, cidade, estado) 
VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$rua', '$cidade', '$estado')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<a href="home.php">Voltar</a>

    <div class="box"> 
        <form action="cadastro_user.php" method="POST" >
        <h4>Formulário de Cadastro</h4>
        
        <div class="inputBox">
        <input type="text" class="form-control" placeholder="Nome Completo:" name="nome" id="nome"  required>
        </div>

        <div class="inputBox">
        <input type="email" class="form-control" placeholder="E-mail:" name="email" id="email" required>
        </div>

        <div class="inputBox">
        <input type="password" class="form-control" placeholder="Senha:" name="senha" id="senha"  required>
        </div>

        <div class="inputBox">
        <input type="tel"  class="form-control" placeholder="Telefone:" name="telefone" id="telefone" required>
        </div>

        <label>Sexo:</label>
        <input type="radio" name="sexo" id="feminino" value="Feminino" >
        <label for="feminino">Feminino</label> 
        <input type="radio" name="sexo" id="masculino" value="Masculino"> 
        <label for="masculino">Masculino</label>

        <div class="inputBox">
        <label for="data_nasc"><b>Data de Nascimento:</b></label>
        <br>
        <input type="date" name="data_nasc" id="data_nasc"  required>
        </div>

        <div class="inputBox">
        <input type="text"  class="form-control" placeholder="Rua:" name="rua" id="rua"  required>
        </div>

        <div class="inputBox">
        <input type="text"  class="form-control" placeholder="Cidade:" name="cidade" id="cidade"  required>
        </div>

        <div class="inputBox">
        <input type="text"  class="form-control" placeholder="Estado:" name="estado" id="estado"  required>
        </div>

        <input type="submit" class="btn btn-success btn-sm  btn-entrar" name="submit" id="submit" value="Cadastrar-se"> 

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>