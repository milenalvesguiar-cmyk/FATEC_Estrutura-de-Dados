<?php
$conn = new mysqli("localhost", "root", "usbw", "folha_pagto");

$id = $_POST['id'];
$nome = $_POST['Nome_Funcionario'];
$data = $_POST['data_admissao'];
$cargo = $_POST['cargo'];
$qtd = $_POST['qtde_salarios'];

$salarioMinimo = 1412.00;
$salarioBruto = $salarioMinimo * $qtd;
$inss = ($salarioBruto > 1550.00) ? $salarioBruto * 0.11 : 0;
$salarioLiquido = $salarioBruto - $inss;

$sql = "UPDATE tb_funcionarios SET 
        Nome_Funcionario='$nome',
        data_admissao='$data',
        cargo='$cargo',
        qtde_salarios='$qtd',
        salario_bruto='$salarioBruto',
        inss='$inss',
        salario_liquido='$salarioLiquido'
        WHERE N_Registro=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso!<br>";
} else {
    echo "Erro ao atualizar: " . $conn->error;
}

$conn->close();
echo "<a href='listagem.php'>Voltar à lista</a>";
?>
