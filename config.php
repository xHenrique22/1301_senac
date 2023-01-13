<?php
    
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_error)
    {
        die( "Erro ao se conectar ao banco de dados.");
    }
    else
    {
        echo "Conexão funcionando.";
    }

?>