<?php 
    if(!empty($_GET['id']))
    {
    include_once ('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario WHERE id=$id";

    $result = $conexao->query($sqlSelect); 

    if($result->num_rows > 0)
    {
     while ($user_data = mysqli_fetch_assoc($result))
        {
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];
        $rua = $user_data['rua'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        
        }
    }
    else 
    {
        header('Location: sistema.php');
    }
    
        }
        /*else 
        {
            header('Location: sistema.php');
        }*/


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<a href="sistema.php">Voltar</a>

    <div class="box"> 
        <form action="saveEdit.php" method="POST" >
        <h4>Alterar Dados de Cadastro</h4>
        
        <div class="inputBox">
        <label for="nome">Nome Completo:</label>
        <br>
        <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
        </div>

        <div class="inputBox">
        <label for="email">E-mail:</label>
        <br>
        <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
        </div>

        <div class="inputBox">
        <label for="senha">Senha:</label>
        <br>
        <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
        </div>

        <div class="inputBox">
        <label for="telefone">Telefone:</label>
        <br>
        <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
        </div>

        <label>Sexo:</label>
        <input type="radio" name="sexo" id="feminino" value="Feminino" <?php echo ($sexo == 'Feminino') ? 'checked' : '' ?> >
        <label for="feminino">Feminino</label> 
        <input type="radio" name="sexo" id="masculino" value="Masculino" <?php echo ($sexo == 'Masculino') ? 'checked' : '' ?> > 
        <label for="masculino">Masculino</label>

        <div class="inputBox">
        <label for="data_nasc"><b>Data de Nascimento:</b></label>
        <br>
        <input type="date" name="data_nasc" id="data_nasc" class="inputUser" value="<?php echo $data_nasc ?>" required>
        </div>

        <div class="inputBox">
        <label for="rua">Rua: </label>
        <br>
        <input type="text" name="rua" id="rua" class="inputUser" value="<?php echo $rua ?>" required>
        </div>

        <div class="inputBox">
        <label for="cidade">Cidade: </label>
        <br>
        <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
        </div>

        <div class="inputBox">
        <label for="estado">Estado: </label>
        <br>
        <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" class="btn btn-success btn-sm  btn-entrar" name="update" id="update" value="Atualizar"> 

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>