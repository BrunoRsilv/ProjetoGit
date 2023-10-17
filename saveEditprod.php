<?php

include_once('config.php');

if(isset($_POST['updateprod']))
{
    $id = $_POST['idproduto'];
    $nomeprod = $_POST['nomeprod'];
    $precoprod = $_POST['precoprod'];
    $descricao = $_POST['descricao'];
    $imagemprod = $POST['imagemprod'];


    $sqlUpdate = "UPDATE produto SET nomeprod='$nomeprod',precoprod='$precoprod',descricao='$descricao',imagemprod='$imagemprod'
WHERE idproduto='$id'";

$result = $conexao->query($sqlUpdate);


}
    header('Location: listaproduto.php');
?>