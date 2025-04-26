<?php
session_start();
require_once '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT id, usuario, senha, perfil FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_nome'] = $user['usuario'];
        $_SESSION['usuario_perfil'] = $user['perfil'];
        header("Location: ../../php/views/dashboard.php");
        exit();
    } else {
        $_SESSION['erro_login'] = "Usuário ou senha inválidos!";
        header("Location: ../views/login.php");
        exit();
    }
} else {
    header("Location: ../views/login.php");
    exit();
}
?>
