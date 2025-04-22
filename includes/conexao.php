<?php
    $servidor = "u783757499_htwebsites";
    $usuario = "u783757499_htwebsites";
    $senha = "TF+ak:4]o";
    $dbname = "htwebsites";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conexao) {
        die("Houve um erro: " . mysqli_connect_error());
    }
?>