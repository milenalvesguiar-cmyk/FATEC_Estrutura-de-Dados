<?php
$conn = new mysqli("localhost", "root", "usbw", "folha_pagto");
$id = $_GET['id'];
$sql = "SELECT * FROM tb_funcionarios WHERE N_Registro = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Funcionário | LaPink</title>
<style>
body { font-family: Poppins; background: #ffe6f2; display:flex; justify-content:center; align-items:center; height:100vh; }
.container { background:#fff; padding:30px; border-radius:15px; box-shadow:0 0 10px rgba(0,0,0,0.1); width:400px; }
h2 { color:#d63384; text-align:center; }
input { width:100%; margin:8px 0; padding:10px; border:1px solid #ccc; border-radius:8px; }
button { background:#d63384; color:white; border:none; padding:10px; width:100%; border-radius:8px; }
</style>
</head>
<body>
<div class="container">
<h2>Editar Funcionário</h2>
<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $row['N_Registro'] ?>">
    <label>Nome:</label>
    <input type="text" name="Nome_Funcionario" value="<?= $row['Nome_Funcionario'] ?>" required>
    <label>Data de Admissão:</label>
    <input type="date" name="data_admissao" value="<?= $row['data_admissao'] ?>" required>
    <label>Cargo:</label>
    <input type="text" name="cargo" value="<?= $row['cargo'] ?>" required>
    <label>Qtd. Salários:</label>
    <input type="number" step="0.1" name="qtde_salarios" value="<?= $row['qtde_salarios'] ?>" required>
    <button type="submit">Salvar Alterações</button>
</form>
</div>
</body>
</html>
<?php $conn->close(); ?>
