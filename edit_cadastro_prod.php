<?php 
    if(!empty($_GET['id']))
    {
    include_once ('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM produto WHERE idproduto=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while ($user_data = mysqli_fetch_assoc($result))
        {
           $nomeprod =  $user_data['nomeprod'];
           $precoprod = $user_data['precoprod'];
           $descricao = $user_data['descricao'];
           $imagemprod = $user_data['imagemprod'];
           
        }
    }

    else 
    {
        header('Location: listaproduto.php');
    }
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

<a href="listaproduto.php">Voltar</a>

<div class="box">
        <form action="saveEditprod.php" method="POST">
        <h4> Formulário de Cadastro Produtos</h4>
        <br>
        <div class="inputBox">
        <input type="text" class="form-control" placeholder="Nome do Produto" value="<?php echo $nomeprod ?>" name="nomeprod" id="nomeprod"  required>
</div>

<div class="inputBox">
        <input type="text" class="form-control" placeholder="Valor do Produto" value="<?php echo $precoprod ?>" name="precoprod" id="precoprod"  required>
</div>

<div class="inputBox">
        <input type="text" class="form-control" placeholder="Descrição:" value="<?php echo $descricao ?>" name="descricao" id="descricao"  required>
</div>

<div class="inputBox">
        <input type="file" class="form-control" placeholder="Imagem do Produto" value="<?php echo $imagemprod ?>" name="imagemprod" id="imagemprod"  >
</div>

<input type="hidden" name="idproduto" value="<?php echo $id ?>">
<input type="submit" class="btn btn-success btn-sm  btn-entrar" id="updateprod" name="updateprod" value="Atualizar">

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>