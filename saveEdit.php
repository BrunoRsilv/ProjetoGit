<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
    
         $sqlUpdate = "UPDATE usuario SET nome='$nome',email='$email',senha='$senha',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',rua='$rua',cidade='$cidade',estado='$estado' 
         WHERE id='$id'";

         $result = $conexao->query($sqlUpdate);

            
    }
        
        header('Location: sistema.php');


?>