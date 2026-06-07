<?php
session_start();
require 'conexao.php';

$erro = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // Usando o name="password" do seu input

    // Buscando o nome_completo e o tipo conforme sua tabela do banco
    $sql = "SELECT id, nome_completo, tipo_usuario FROM usuarios WHERE email = :email AND senha = :senha LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email, 'senha' => $password]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome_completo'];
        $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];

        // Se for aluno (tipo 1), vai para o painel do cidadão. Se for Admin, redireciona também.
        if ($usuario['tipo_usuario'] == 1) {
            header("Location: principal_cidadao.php");
        } else {
            header("Location: principal_gerenciador.php");
        }
        exit;
    } else {
        $erro = "E-mail ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar no Fiscaliza Aí</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Login</h2>
                <p>Entre com seu Email e Senha</p>
                <?php if ($erro): ?>
                    <b style="color: #ff3333; display: block; margin-top: 10px;"><?= $erro ?></b>
                <?php endif; ?>
            </div>
            
            <form class="login-form" id="loginForm" method="POST" action="login.php">
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required autocomplete="email">
                        <label for="email">Email</label>
                    </div>
                    <span class="error-message" id="emailError"></span>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="password" name="password" required autocomplete="current-password">
                        <label for="password">Senha</label>
                        <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                            <span class="eye-icon"></span>
                        </button>
                    </div>
                    <span class="error-message" id="passwordError"></span>
                </div>

                <div class="form-options">
                    <label class="remember-wrapper">
                        <input type="checkbox" id="remember" name="remember">
                        <span class="checkbox-label">
                            <span class="checkmark"></span>
                            Continuar logado
                        </span>
                    </label>
                </div>

                <button type="submit" class="login-btn">
                    <span class="btn-text">Entrar</span>
                    <span class="btn-loader"></span>
                </button>
            </form>

            <div class="signup-link">
                <p>Não tem conta? <a href="cadastro.php">Criar conta</a></p>
            </div>

            <div class="signup-link">
                <p>É Gerenciador? <a href="login_gerenciador.php">Login Gerenciador</a></p>
            </div>
        </div>
    </div>

    <script src="../../shared/js/form-utils.js"></script>
    <script src="script.js"></script>
</body>
</html>