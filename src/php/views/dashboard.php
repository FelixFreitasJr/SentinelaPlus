<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sentinela+ | Dashboard</title>
    <link rel="stylesheet" href="../../components/css/dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h1>
        <p>Perfil: <?php echo htmlspecialchars($_SESSION['usuario_perfil']); ?></p>
        <a href="../../php/controllers/logout.php">Sair</a>
    </div>
</body>
</html>
