<?php
require_once '../config.php'; // Ajustando o caminho correto para o config.php

try {
    // Inserindo usuários de teste
    $pdo->exec("INSERT INTO usuarios (nome, email, usuario, senha, perfil) VALUES 
    ('Administrador', 'admin@sentinela.com', 'admin', '".password_hash('admin123', PASSWORD_DEFAULT)."', 'administrador'),
    ('Usuário Comum', 'usuario@sentinela.com', 'usuario', '".password_hash('usuario123', PASSWORD_DEFAULT)."', 'comum')");

    echo "Banco de dados populado com dados de teste!";
} catch (PDOException $e) {
    die("Erro ao popular banco de dados: " . $e->getMessage());
}
?>
