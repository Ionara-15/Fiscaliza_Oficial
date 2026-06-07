<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Se não houver a variável de ID na sessão, significa que o usuário não fez login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>