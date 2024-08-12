<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: aqua;
        }

        .caixa {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="caixa">
        <form id="loginForm" method="POST" action="validarlogin.php">
            <div style="text-align: center;">
                <h1>PC PREVENIDO</h1>
                <br>
                <h2>Seja bem-vindo(a)</h2>
                <label>Faça seu Login:</label>
                <br><br>
                <input type="email" name="email" placeholder="E-mail" required>
                <i class='bx bxs-user'></i>
                <br><br>
                <input type="password" name="password" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
                <br><br>
                <label><input type="checkbox" name="remember"> Lembrar-me</label>
                <br><br>
                <label>Esqueceu a senha?</label> <a href="clique_aqui.html">Clique aqui</a>
                <br><br>
                <input type="submit" value="Entrar">
                <p id="error-message" class="error">
                    <?php if (isset($_GET['error'])) echo htmlspecialchars($_GET['error']); ?>
                </p>
            </div>
            <div class="register-link">
                <p>Você não tem conta? <a href="./registrar.php">Registrar-se</a></p>
            </div>
        </form>
    </div>

    
</body>
</html>
