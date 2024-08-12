<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registrar.css">
    <title>Registrar-se</title>
</head>

<body>

<?php
 // Inicie a sessão no início do arquivo

$servername = "62.72.62.1";
$username = "u687609827_richard";
$password = "Xh9&tVB[/@";
$dbname = "u687609827_richard";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Processando o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    
    // Validação de campos
    if (empty($firstname) || empty($lastname) || empty($email) || empty($number) || empty($password) || empty($confirmpassword)) {
        die("Todos os campos são obrigatórios.");
    }
    
    if ($password !== $confirmpassword) {
        die("As senhas não coincidem.");
    }
    
    // Hash da senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Preparando a query para inserção
    $stmt = $conn->prepare("INSERT INTO cadastro (firstname, lastname, email, number, password, gender) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Verificando se a preparação foi bem-sucedida
    if ($stmt === false) {
        die("Erro ao preparar a query: " . $conn->error);
    }
    
    // Vinculando parâmetros
    $stmt->bind_param("ssssss", $firstname, $lastname, $email, $number, $hashed_password, $gender);
    
    // Executando a query
    if ($stmt->execute()) {
        echo "<script>alert('Registro inserido com sucesso.'); window.location.href='login.php';</script>";
    } else {
        echo "Erro ao inserir registro: " . $stmt->error;
    }
    
    // Fechando statement
    $stmt->close();
}

// Fechando conexão
$conn->close();
?>



    <div class="container">
        <div class="form-image">
            <img src="../img/registrar.svg" alt="Registrar">
        </div>
        <div class="form">
            <form action="registrar.php" method="post" onsubmit="return validateForm();">
                <div class="form-header">
                    <div class="title">
                        <h1>Registrar-se</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender" value="Feminino">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Criar conta</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Função para validar o formulário
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;
    
            if (password !== confirmpassword) {
                alert("As senhas não coincidem.");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>


















