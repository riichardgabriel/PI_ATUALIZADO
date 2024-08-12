<!-- <?php
session_start(); // Inicie a sessão no início do arquivo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $servername = "62.72.62.1";
        $username = "u687609827_richard"; 
        $password = "Xh9&tVB[/@"; 
        $dbname = "u687609827_richard"; 

        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Checa a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Obtém dados do formulário
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Nome da tabela (substitua pelo nome correto da tabela)
        $tableName = "usuarios"; 

        // Prepara e executa a consulta
        $sql = "SELECT * FROM $tableName WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            // Exibe o erro SQL se a preparação falhar
            die("Erro ao preparar a consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se a consulta retornou algum resultado
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['senha'])) { // Verifica a senha
                $_SESSION['logado'] = true;
                header("Location: index.php");
                exit();
            } else {
                echo 'E-mail ou senha inválidos.';
            }
        } else {
            echo 'E-mail ou senha inválidos.';
        }

        // Fecha a conexão
        $stmt->close();
        $conn->close();
    } catch (\Throwable $th) {
        echo 'Ocorreu um erro: ' . $th->getMessage();
    }
} else {
    echo 'Método de requisição inválido.';
}
?> -->













<!-- <?php
session_start(); // Inicie a sessão no início do arquivo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $servername = "62.72.62.1";
        $username = "u687609827_richard"; 
        $password = "Xh9&tVB[/@"; 
        $dbname = "u687609827_richard"; 

        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Checa a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Obtém dados do formulário
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Nome da tabela (substitua pelo nome correto da tabela)
        $tableName = "tb_usuario"; 

        // Prepara e executa a consulta
        $sql = "SELECT * FROM $tableName WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Erro ao preparar a consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se a consulta retornou algum resultado
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // Verifica a senha
                $_SESSION['logado'] = true;
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error=1");
                exit();
            }
        } else {
            header("Location: login.php?error=1");
            exit();
        }

        // Fecha a conexão
        $stmt->close();
        $conn->close();
    } catch (\Throwable $th) {
        echo 'Ocorreu um erro: ' . $th->getMessage();
    }
} else {
    echo 'Método de requisição inválido.';
}
?> -->











<?php
session_start(); // Inicie a sessão no início do arquivo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $servername = "62.72.62.1";
        $username = "u687609827_richard";
        $password = "Xh9&tVB[/@";
        $dbname = "u687609827_richard";

        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Checa a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Obtém dados do formulário
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepara e executa a consulta
        $sql = "SELECT * FROM cadastro WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            // Exibe o erro SQL se a preparação falhar
            die("Erro ao preparar a consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se a consulta retornou algum resultado
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // Verifica a senha
                $_SESSION['logado'] = true;
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error=E-mail ou senha inválidos.");
                exit();
            }
        } else {
            header("Location: login.php?error=E-mail ou senha inválidos.");
            exit();
        }

        // Fecha a conexão
        $stmt->close();
        $conn->close();
    } catch (\Throwable $th) {
        echo 'Ocorreu um erro: ' . $th->getMessage();
    }
} else {
    echo 'Método de requisição inválido.';
}
?>