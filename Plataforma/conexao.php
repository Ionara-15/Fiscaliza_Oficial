<?php
// Configurações do Banco de Dados
$host = 'localhost'; // ou 127.0.0.1
$db   = 'fiscaliza_ai'; // O nome do banco que criamos no phpMyAdmin
$user = 'root'; // Usuário padrão do XAMPP
$pass = ''; // Senha padrão do XAMPP é vazia (deixe assim)

try {
    // Cria a conexão usando PDO (Padrão mais seguro)
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    
    // Configura para mostrar os erros caso algo dê errado
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Descomente a linha abaixo apenas para testar a conexão na primeira vez:
    // echo "Conexão com o banco de dados realizada com sucesso!";

} catch (\PDOException $e) {
    // Se der erro, ele para o site e avisa qual foi o erro
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>