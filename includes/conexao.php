<?php

    $servidor = "localhost";
    $dbname = "u783757499_contatos";
    $usuario = "u783757499_htwebsites";
    $senha = "TF+ak:4]o";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conexao) {
        die("Houve um erro: " . mysqli_connect_error());
    }

    // Definir fuso horário do Brasil
    date_default_timezone_set('America/Sao_Paulo');

?>