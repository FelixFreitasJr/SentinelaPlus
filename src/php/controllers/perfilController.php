<?php
session_start();
require '../../database/connection.php'; // Certifique-se de ter a conexão ao banco de dados carregada

$nome = $_POST['nome'];
$email = $_POST['email'];
$novaSenha = $_POST['senha'];
$confirmaSenha = $_POST['senha_confirma'];

// Validações básicas
if ($novaSenha && ($novaSenha !== $confirmaSenha)) {
    die("Erro: As senhas não conferem!"); // Exemplo de validação simples
}

// Atualizar nome e email
$sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nome, $email, $_SESSION['usuario_id']);
$stmt->execute();

// Atualizar senha apenas se foi alterada
if ($novaSenha) {
    $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT); // Gera hash seguro
    $sqlSenha = "UPDATE usuarios SET senha = ? WHERE id = ?";
    $stmtSenha = $conn->prepare($sqlSenha);
    $stmtSenha->bind_param("si", $senhaHash, $_SESSION['usuario_id']);
    $stmtSenha->execute();
}

// Atualiza a sessão para refletir as mudanças
$_SESSION['usuario_nome'] = $nome;
$_SESSION['usuario_email'] = $email;

header("Location: ../../php/views/perfil.php?sucesso=true");
exit();
?>
