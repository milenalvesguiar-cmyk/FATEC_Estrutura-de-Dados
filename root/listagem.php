<?php
date_default_timezone_set('America/Sao_Paulo');

header("Content-Type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "folha_pagto";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("<p>Erro de conexão: " . $conn->connect_error . "</p>");
}

$sql = "SELECT N_Registro, Nome_Funcionario, cargo, data_admissao, qtde_salarios, salario_bruto, inss, salario_liquido FROM tb_funcionarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários - LaPink RH</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffc1e3, #ff80ab);
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: #e91e63;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .container {
            margin: 40px auto;
            width: 90%;
            max-width: 1000px;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 15px;
        }
        th {
            background-color: #f8bbd0;
            color: #880e4f;
            padding: 10px;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #f1f1f1;
        }
        tr:hover {
            background-color: #ffe4ec;
        }
        .botoes {
            margin-top: 25px;
            text-align: center;
        }
        .botoes a {
            display: inline-block;
            padding: 12px 20px;
            margin: 8px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }
        .voltar {
            background: #f48fb1;
            color: white;
        }
        .voltar:hover {
            background: #ec407a;
        }
        .novo {
            background: #fce4ec;
            color: #e91e63;
            border: 2px solid #f48fb1;
        }
        .novo:hover {
            background: #f8bbd0;
        }
    </style>
</head>
<body>
    <header>✨ Lista de Funcionários - LaPink RH ✨</header>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Data de Admissão</th>
                    <th>Qtd. Salários</th>
                    <th>Bruto (R$)</th>
                    <th>INSS (R$)</th>
                    <th>Líquido (R$)</th>
                  </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["N_Registro"] . "</td>
                        <td>" . htmlspecialchars($row["Nome_Funcionario"]) . "</td>
                        <td>" . htmlspecialchars($row["cargo"]) . "</td>
                        <td>" . date("d/m/Y", strtotime($row["data_admissao"])) . "</td>
                        <td>" . $row["qtde_salarios"] . "</td>
                        <td>" . number_format($row["salario_bruto"], 2, ',', '.') . "</td>
                        <td>" . number_format($row["inss"], 2, ',', '.') . "</td>
                        <td>" . number_format($row["salario_liquido"], 2, ',', '.') . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='text-align:center; font-size:18px; color:#e91e63;'>Nenhum funcionário cadastrado ainda 💖</p>";
        }
        $conn->close();
        ?>
        <div class="botoes">
            <a href="home_funcionarios.php" class="novo">➕ Novo Cadastro</a>
            <a href="index.php" class="voltar">⬅ Voltar ao Início</a>
        </div>
    </div>
</body>
</html>
