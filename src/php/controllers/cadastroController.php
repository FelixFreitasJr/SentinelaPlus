<?php
session_start();
require_once '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, usuario, senha) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $usuario, $senha]);
        $_SESSION['sucesso_cadastro'] = "Cadastro realizado com sucesso! Faça login.";
        header("Location: ../views/login.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['erro_cadastro'] = "Erro ao cadastrar usuário: " . $e->getMessage();
        header("Location: ../views/cadastro.php");
        exit();
    }
}
?>
