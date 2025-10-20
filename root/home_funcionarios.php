<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários - LaPink</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffc1e3, #ff80ab);
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #e91e63;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: 600;
            color: #444;
        }
        input {
            width: 90%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }
        input:focus {
            border-color: #e91e63;
            box-shadow: 0 0 5px #e91e63;
        }
        button {
            margin-top: 20px;
            background: #e91e63;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ad1457;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>✨ Cadastro LaPink RH ✨</h1>
        <form method="post" action="gravar.php">
            <label for="nomeFuncionario">Nome do Funcionário:</label>
            <input type="text" id="nomeFuncionario" name="nomeFuncionario" required>

            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>

            <label for="dataAdmissao">Data de Admissão:</label>
            <input type="date" id="dataAdmissao" name="dataAdmissao" required>

            <label for="qtdSalarios">Quantidade de Salários Mínimos:</label>
            <input type="number" id="qtdSalarios" name="qtdSalarios" step="0.01" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
