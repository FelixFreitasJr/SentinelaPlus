<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sentinela+ | Login</title>
    <link rel="stylesheet" href="../../components/css/reset.css">
    <link rel="stylesheet" href="../../components/css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>Sentinela+</h1>
        <form action="../../php/controllers/loginController.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuário ou Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <a href="../../php/views/cadastro.php" class="novo-usuario">Novo Usuário</a> |
        <a href="../../php/views/recuperarSenha.php" class="recuperar-senha">Recuperar Senha</a>

        <?php
        if (isset($_SESSION['erro_login'])) {
            echo "<p class='erro'>" . $_SESSION['erro_login'] . "</p>";
            unset($_SESSION['erro_login']);
        }
        ?>
    </div>
</body>
</html>
