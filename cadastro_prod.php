<?php
        
        if(isset($_POST['submit'])){
        print_r($_POST['nomeprod']);
        echo "<br>";
        print_r($_POST['precoprod']);
        echo "<br>";
        print_r($_POST['descricao']);
        echo "<br>";
        print_r($_POST['imagemprod']);
        

        include_once ('config.php');

        
        $nomeprod = $_POST['nomeprod'];
        $precoprod = $_POST['precoprod'];
        $descricao = $_POST['descricao'];
        $imagemprod = $_POST['imagemprod'];

        $result = mysqli_query($conexao, "INSERT INTO produto(nomeprod, precoprod, descricao, imagemprod)
        VALUES ('$nomeprod', '$precoprod', '$descricao', '$imagemprod')");
         
        header('Location: listaproduto.php');

        }
        

?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<a href="home.php">Voltar</a>

<div class="box">
        <form action="cadastro_prod.php" method="POST">
        <h4> Formulário de Cadastro Produtos</h4>
        <br>
        <div class="inputBox">
        <input type="text" class="form-control" placeholder="Nome do Produto" name="nomeprod" id="nomeprod"  required>
</div>

<div class="inputBox">
        <input type="text" class="form-control" placeholder="Valor do Produto" name="precoprod" id="precoprod"  required>
</div>

<div class="inputBox">
        <input type="text" class="form-control" placeholder="Descrição:" name="descricao" id="descricao"  required>
</div>

<div class="inputBox">
        <input type="file" class="form-control" placeholder="Imagem do Produto" name="imagemprod" id="imagemprod"  >
</div>

<input type="submit" class="btn btn-success btn-sm  btn-entrar" id="submit" name="submit" value="Cadastrar">

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>