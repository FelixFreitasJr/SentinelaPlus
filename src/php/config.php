<?php
// src/php/config.php

try {
    $pdo = new PDO('sqlite:' . __DIR__ . '/../../sentinela_plus.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
