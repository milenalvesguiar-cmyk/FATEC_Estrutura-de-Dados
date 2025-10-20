<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>LaPink RH - Sistema de Funcionários</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #ffc1e3, #ff80ab);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }
        .card {
            background: #fff;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            text-align: center;
            padding: 50px;
            width: 400px;
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            color: #e91e63;
            font-size: 28px;
            margin-bottom: 10px;
        }
        h2 {
            color: #ad1457;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .btn {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 15px;
            font-size: 16px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
        }
        .btn.cadastro {
            background: #f48fb1;
            color: white;
        }
        .btn.cadastro:hover {
            background: #ec407a;
        }
        .btn.lista {
            background: #fce4ec;
            color: #e91e63;
            border: 2px solid #f48fb1;
        }
        .btn.lista:hover {
            background: #f8bbd0;
        }
        footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>✨ LaPink RH ✨</h1>
        <h2>Gestão de Funcionários com Estilo 💼💅</h2>

        <button class="btn cadastro" onclick="window.location.href='home_funcionarios.php'">
            ➕ Cadastrar Funcionário
        </button>

        <button class="btn lista" onclick="window.location.href='listagem.php'">
            📋 Visualizar Lista
        </button>

        <footer>© 2025 LaPink RH • Todos os direitos reservados 💖</footer>
    </div>
</body>
</html>
