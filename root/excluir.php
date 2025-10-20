<?php
$conn = new mysqli("localhost", "root", "usbw", "folha_pagto");
$id = $_GET['id'];

$sql = "DELETE FROM tb_funcionarios WHERE N_Registro = $id";
if ($conn->query($sql) === TRUE) {
    echo "Funcionário excluído com sucesso!<br>";
} else {
    echo "Erro ao excluir: " . $conn->error;
}
$conn->close();
echo "<a href='listagem.php'>Voltar à lista</a>";
?>
