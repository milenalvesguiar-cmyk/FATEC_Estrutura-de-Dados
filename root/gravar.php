<?php
// gravar.php - versão compatível com PHP antigos (sem ??) e com escape básico

header("Content-Type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "folha_pagto";

$conn = new mysqli($servername, $username, $password, $dbname);

// definir charset
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// receber e validar dados do POST (compatível com PHP antigos)
$nome = isset($_POST['nomeFuncionario']) ? $_POST['nomeFuncionario'] : '';
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';
$dataAdmissao = isset($_POST['dataAdmissao']) ? $_POST['dataAdmissao'] : '';
$qtdSalarios = isset($_POST['qtdSalarios']) ? $_POST['qtdSalarios'] : 0;

// limpeza / escape básico
$nome = $conn->real_escape_string($nome);
$cargo = $conn->real_escape_string($cargo);
$dataAdmissao = $conn->real_escape_string($dataAdmissao);
$qtdSalarios = floatval(str_replace(',', '.', $qtdSalarios)); // aceita vírgula ou ponto

// cálculos
$salarioMinimo = 1412.00;
$salarioBruto = $salarioMinimo * $qtdSalarios;
$inss = ($salarioBruto > 1550.00) ? $salarioBruto * 0.11 : 0;
$salarioLiquido = $salarioBruto - $inss;

// Insert (atenção: colunas conforme sua tabela tb_funcionarios)
$sql = "INSERT INTO tb_funcionarios 
        (Nome_Funcionario, cargo, data_admissao, qtde_salarios, salario_bruto, inss, salario_liquido)
        VALUES ('$nome', '$cargo', '$dataAdmissao', '$qtdSalarios', '$salarioBruto', '$inss', '$salarioLiquido')";

if ($conn->query($sql) === TRUE) {
    $mensagem = "Funcionário cadastrado com sucesso!";
} else {
    $mensagem = "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro - LaPink</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffb6d9, #ffcce5);
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            text-align: center;
            width: 400px;
        }
        h1 { color: #e91e63; font-size: 24px; margin-bottom: 20px; }
        p { font-size: 18px; margin-bottom: 30px; }
        a {
            display: inline-block;
            margin: 8px;
            padding: 10px 18px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        a.voltar { background: #f48fb1; color: white; }
        a.voltar:hover { background: #f06292; }
        a.lista { background: #fce4ec; color: #e91e63; border: 2px solid #f48fb1; }
        a.lista:hover { background: #f8bbd0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>✨ LaPink RH ✨</h1>
        <p><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></p>
        <a href="home_funcionarios.php" class="voltar">⬅ Voltar ao cadastro</a>
        <a href="listagem.php" class="lista">📋 Visualizar Lista</a>
    </div>
</body>
</html>
