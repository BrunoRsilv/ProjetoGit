<?php 

    $dbHost = 'Localhost';
    $dbUsername= 'root';
    $dbPassword= '';
    $dbname= 'db_bruno';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbname );

   /* if($conexao->connect_errno) {
        echo "Erro";
    }
    else {
        echo "Estou conseguindo";
    }*/
?>