<?php
    $servidor = "localhost";
    $dbname = "u588089239_htwebsites";
    $usuario = "u588089239_htwebsites";
    $senha = "@HTWebSites2026";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conexao) {
        die("Houve um erro: " . mysqli_connect_error());
    }
?>