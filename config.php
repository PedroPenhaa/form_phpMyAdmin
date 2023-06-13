<?php
    $dbHost= 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName= 'formpedro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno){
        echo "ERRO";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }



?>