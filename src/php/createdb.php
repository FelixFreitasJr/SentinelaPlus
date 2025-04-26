<?php
require_once 'config.php';

try {
    $pdo->exec("DROP TABLE IF EXISTS usuarios");
    echo "Tabela 'usuarios' removida com sucesso.\n";

    $sql = "CREATE TABLE usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        usuario TEXT NOT NULL,
        senha TEXT NOT NULL,
        perfil TEXT NOT NULL DEFAULT 'comum',
        criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $pdo->exec($sql);
    echo "Tabela 'usuarios' criada com sucesso!";
} catch (PDOException $e) {
    die("Erro ao criar tabela: " . $e->getMessage());
}
?>
