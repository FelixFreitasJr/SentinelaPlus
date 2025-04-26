<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sentinela+ | Cadastro</title>
    <link rel="stylesheet" href="../../components/css/reset.css">
    <link rel="stylesheet" href="../../components/css/cadastro.css">
</head>
<body>
    <div class="cadastro-container">
        <h1>Sentinela+ | Cadastro</h1>
        <form action="../../php/controllers/cadastroController.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="login.php" class="voltar-login">Voltar ao Login</a>
        <?php
        if (isset($_SESSION['sucesso_cadastro'])) {
            echo "<p class='sucesso'>" . $_SESSION['sucesso_cadastro'] . "</p>";
            unset($_SESSION['sucesso_cadastro']);
        }
        if (isset($_SESSION['erro_cadastro'])) {
            echo "<p class='erro'>" . $_SESSION['erro_cadastro'] . "</p>";
            unset($_SESSION['erro_cadastro']);
        }
        ?>
    </div>
</body>
</html>
