<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM produto WHERE idproduto=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelet = "DELETE FROM produto WHERE idproduto=$id";
            $resultDelete = $conexao->query($sqlDelet);
        }
    }

        header('Location: listaproduto.php');

?>