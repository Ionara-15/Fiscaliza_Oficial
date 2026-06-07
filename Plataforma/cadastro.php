<?php
session_start();
require 'conexao.php';

$erro = null;
$sucesso = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // 1. Validação simples para ver se as senhas batem
    if ($password !== $confirm_password) {
        $erro = "As senhas não coincidem. Tente novamente.";
    } else {
        // 2. Verifica se o e-mail já existe no banco de dados
        $sqlVerifica = "SELECT id FROM usuarios WHERE email = :email";
        $stmtVerifica = $pdo->prepare($sqlVerifica);
        $stmtVerifica->execute(['email' => $email]);

        if ($stmtVerifica->rowCount() > 0) {
            $erro = "Este e-mail já está cadastrado. Vá para a tela de login.";
        } else {
            // 3. Se tudo estiver certo, insere o usuário no banco
            // tipo_usuario = 1 significa que ele é um Cidadão/Aluno (Padrão)
            $data_cadastro = date('Y-m-d'); // Pega a data de hoje no formato do MySQL
            $tipo_usuario = 1; 

            $sqlInsert = "INSERT INTO usuarios (nome_completo, email, senha, tipo_usuario, data_cadastro) VALUES (:nome, :email, :senha, :tipo, :data_cadastro)";
            $stmtInsert = $pdo->prepare($sqlInsert);
            
            $inseriu = $stmtInsert->execute([
                'nome' => $nome,
                'email' => $email,
                'senha' => $password, // Nota: Num ambiente real em produção, usaríamos password_hash()
                'tipo' => $tipo_usuario,
                'data_cadastro' => $data_cadastro
            ]);

            if ($inseriu) {
                $sucesso = "Conta criada com sucesso! Redirecionando para o login...";
                // Redireciona para o login após 2 segundos
                header("refresh:2;url=login.php"); 
            } else {
                $erro = "Erro ao criar a conta. Tente novamente.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta no Fiscaliza Aí</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Cadastrar</h2>
                <p>Crie sua conta para iniciar a jornada</p>
                <?php if ($erro): ?>
                    <b style="color: #ff3333; display: block; margin-top: 10px;"><?= $erro ?></b>
                <?php endif; ?>
                <?php if ($sucesso): ?>
                    <b style="color: #28a745; display: block; margin-top: 10px;"><?= $sucesso ?></b>
                <?php endif; ?>
            </div>
            
            <form class="login-form" method="POST" action="cadastro.php">
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text" id="nome" name="nome" required>
                        <label for="nome">Nome Completo</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required autocomplete="email">
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="password" name="password" required autocomplete="new-password">
                        <label for="password">Senha</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="confirm_password" name="confirm_password" required>
                        <label for="confirm_password">Confirmar senha</label>
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    <span class="btn-text">Cadastrar</span>
                </button>
            </form>

            <div class="signup-link">
                <p>Tem conta? <a href="login.php">Entre</a></p>
            </div>
        </div>
    </div>
</body>
</html>