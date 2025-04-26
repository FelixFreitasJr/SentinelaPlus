<div class="header-container">
    <!-- Nome do programa -->
    <h1>Sentinela+</h1>
    <hr>

    <!-- Saudação e botões -->
    <div class="header-top">
        <p class="saudacao">Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome'] ?? 'Usuário'); ?></p>
        <nav class="header-links">
            <!-- Botão para alternar tema -->
            <button id="theme-toggle" class="theme-button">
                <img src="../../components/icons/lightbulb-on.svg" alt="Modo Claro" id="theme-icon">
            </button>
            <!-- Botões para aumentar/diminuir fonte -->
            <button id="font-increase" class="font-button">A+</button>
            <button id="font-decrease" class="font-button">A-</button>
            <!-- Links para editar perfil e sair -->
            <a href="perfil.php" class="header-link">Editar Perfil</a> |
            <a href="../../php/controllers/logout.php" class="header-link">Sair</a>
        </nav>
    </div>
    <hr>

    <!-- Botões permanentes -->
    <div class="header-actions">
        <a href="registroPressao.php" class="action-link">Pressão Arterial</a>
        <a href="registroGlicemia.php" class="action-link">Glicemia</a>
        <a href="registroPeso.php" class="action-link">Peso</a>
        <!-- Botão para voltar ao dashboard -->
        <?php if ($page_title !== 'Dashboard') { ?>
            <a href="dashboard.php" class="action-link">Voltar</a>
        <?php } ?>
    </div>
</div>
