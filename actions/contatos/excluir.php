<?php
include('../../includes/conexao.php');

$conexao->query("SET time_zone = '-03:00'");


$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
    header("Location: ../../views/admin/admin.php");
    exit();
} else {
    echo "Erro ao excluir: " . $conexao->error;
}
?>
