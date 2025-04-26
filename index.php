<?php
session_start();

// Se o usuário já estiver logado, manda para o dashboard
if (isset($_SESSION['usuario_id'])) {
    header("Location: src/php/views/dashboard.php");
    exit();
}

// Se não estiver logado, manda para o login
header("Location: src/php/views/login.php");
exit();
?>
