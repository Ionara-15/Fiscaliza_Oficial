<?php
session_start();
require 'conexao.php';

$erro = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, nome_completo, tipo_usuario FROM usuarios WHERE email = :email AND senha = :senha LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email, 'senha' => $password]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Bloqueia se um aluno tentar entrar pela área administrativa
        if ($usuario['tipo_usuario'] == 1) {
            $erro = "Acesso negado. Esta área é exclusiva para gerenciadores!";
        } else {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome_completo'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];

            header("Location: principal_gerenciador.php");
            exit;
        }
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
    <title>Login Gerenciador - Fiscaliza Aí</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Login Gerenciador</h2>
                <p>Área restrita para administradores e professores</p>
                <?php if ($erro): ?>
                    <b style="color: #ff3333; display: block; margin-top: 10px;"><?= $erro ?></b>
                <?php endif; ?>
            </div>
            
            <form class="login-form" method="POST" action="login_gerenciador.php">
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email Administrativo</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Senha</label>
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    <span class="btn-text">Acessar Painel</span>
                </button>
            </form>

            <div class="signup-link">
                <p>Voltar para o <a href="login.php">Login de Alunos</a></p>
            </div>
        </div>
    </div>
</body>
</html>