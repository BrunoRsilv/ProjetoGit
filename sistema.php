<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION); 
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {   
        unset($_SESSION['email']);
        unset($_SESSION['senha']); 
        header('Location: login.php');
    }
    else
    {
        $logado = $_SESSION['email'];
    }
    
    $sql = "SELECT * FROM usuario ORDER BY id DESC";

    $result = $conexao->query($sql);
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem-Vindo</title>

    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <?php 
            echo "<h2 style='text-align:center; color:black;'>Bem Vindo <u> $logado </u></h2>"
?>
        <a href="cadastro_prod.php" style="color:black;" > Cadastrar Produtos </a>
        <a href="listaproduto.php" style="color:black;" > Lista de Produtos </a>
        <a href="sair.php" style="color:black;" > Sair </a>
        
        </div>
        
        </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    
<div class="box-search">
  <input type="search" class="form-control w-25" placeholder="Pesquisar Usuarios" id="pesquisar" >
  <button onclick="searchData()" class="btn btn-primary">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
</div>


<div class="m-5">
<table class="table table-bg">
  <thead>
    <tr>
      <th scope="col">Id:</th>
      <th scope="col">Nome:</th>
      <th scope="col">E-mail:</th>
      <th scope="col">Telefone:</th>
      <th scope="col">Sexo:</th>
      <th scope="col">Data de Nascimento:</th>
      <th scope="col">Rua:</th>
      <th scope="col">Cidade:</th>
      <th scope="col">Estado:</th>
      <th scope="col">...</th>
    </tr>
  </thead>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['telefone']."</td>";
            echo "<td>".$user_data['sexo']."</td>";
            echo "<td>".$user_data['data_nasc']."</td>";
            echo "<td>".$user_data['rua']."</td>";
            echo "<td>".$user_data['cidade']."</td>";
            echo "<td>".$user_data['estado']."</td>";
            echo "<td> <a class='btn btn-sm btn-primary' href='edit_cadastro_user.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
          </svg> </a>
                <a class='btn btn-sm btn-danger' href='delet_cadastro_user.php?id=$user_data[id]'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
              </svg> </a>
          </td>";
              
            echo "</tr>";
        }
    ?>
    
  <tbody>
</tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
<script>
  var search = document.getElementById('pesquisar');
  
  search.addEventListener("keydown", function(event) {
    if (event.key == "Enter") {
      searchData();
    }
  });

  function searchData()
  {
    window.location = 'sistema.php?search='+search.value;
  }

  </script>

</html>