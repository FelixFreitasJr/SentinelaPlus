<?php
// Inicia a sessão e verifica se o usuário está autenticado
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentinela+ | <?php echo $page_title ?? 'Dashboard'; ?></title>
    
    <!-- Inclusão dos estilos principais -->
    <link rel="stylesheet" href="../../components/css/reset.css">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/footer.css">
    <link rel="stylesheet" href="../../components/css/dashboard.css">
    <link rel="stylesheet" href="../../components/css/darkmode.css">
    <link rel="stylesheet" href="../../components/css/perfil.css">




    <?php
    // Inclusão de estilos adicionais, se definidos pela página
    if (isset($extra_css)) {
        foreach ($extra_css as $css) {
            echo "<link rel='stylesheet' href='" . htmlspecialchars($css) . "'>";
        }
    }
    ?>
</head>
        <body data-theme="light">


    <!-- Inclusão do cabeçalho -->
    <?php
    if (file_exists('../includes/header.php')) {
        include '../includes/header.php';
    } else {
        echo "<p>Erro: Cabeçalho não encontrado.</p>";
    }
    ?>

    <!-- Área principal do conteúdo -->
    <div class="main-container">
        <?php
        // Carregamento dinâmico do conteúdo principal
        if (isset($page_content) && file_exists('../includes/' . $page_content)) {
            include '../includes/' . $page_content;
        } else {
            echo "<p>Erro: Conteúdo principal não encontrado.</p>";
        }
        ?>
    </div>

    <!-- Inclusão do rodapé -->
    <?php
    if (file_exists('../includes/footer.php')) {
        include '../includes/footer.php';
    } else {
        echo "<p>Erro: Rodapé não encontrado.</p>";
    }
    ?>
            <!-- <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const html = document.documentElement;

                    // Alternar entre modos claro e escuro
                    const themeToggleButton = document.getElementById('theme-toggle');
                    const themeIcon = document.getElementById('theme-icon');

                    if (themeToggleButton && themeIcon) {
                        themeToggleButton.addEventListener('click', () => {
                            const currentTheme = html.getAttribute('data-theme');
                            if (currentTheme === 'dark') {
                                html.setAttribute('data-theme', 'light');
                                themeIcon.src = "../../components/icons/lightbulb-on.svg"; // Ícone de modo claro
                            } else {
                                html.setAttribute('data-theme', 'dark');
                                themeIcon.src = "../../components/icons/lightbulb-off.svg"; // Ícone de modo escuro
                            }
                        });
                    }

                    // Ajustar tamanho da fonte globalmente
                    const fontIncreaseButton = document.getElementById('font-increase');
                    const fontDecreaseButton = document.getElementById('font-decrease');

                    if (fontIncreaseButton && fontDecreaseButton) {
                        fontIncreaseButton.addEventListener('click', () => {
                            const currentFontSize = parseFloat(window.getComputedStyle(html).fontSize);
                            html.style.fontSize = `${currentFontSize + 2}px`;
                        });

                        fontDecreaseButton.addEventListener('click', () => {
                            const currentFontSize = parseFloat(window.getComputedStyle(html).fontSize);
                            html.style.fontSize = `${Math.max(currentFontSize - 2, 12)}px`;
                        });
                    }
                });
            </script> -->

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const html = document.documentElement;

                    // Aplica o tema salvo do localStorage
                    const savedTheme = localStorage.getItem('theme');
                    if (savedTheme) {
                        html.setAttribute('data-theme', savedTheme);
                        const themeIcon = document.getElementById('theme-icon');
                        if (themeIcon) {
                            themeIcon.src = 
                                savedTheme === 'dark'
                                    ? "../../components/icons/lightbulb-off.svg"
                                    : "../../components/icons/lightbulb-on.svg";
                        }
                    }

                    // Alternar entre modos claro e escuro
                    const themeToggleButton = document.getElementById('theme-toggle');
                    const themeIcon = document.getElementById('theme-icon');

                    if (themeToggleButton && themeIcon) {
                        themeToggleButton.addEventListener('click', () => {
                            const currentTheme = html.getAttribute('data-theme');
                            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                            html.setAttribute('data-theme', newTheme);
                            themeIcon.src = 
                                newTheme === 'dark'
                                    ? "../../components/icons/lightbulb-off.svg"
                                    : "../../components/icons/lightbulb-on.svg";

                            // Salva o tema no localStorage
                            localStorage.setItem('theme', newTheme);
                        });
                    }

                    // Ajustar tamanho da fonte globalmente
                    const fontIncreaseButton = document.getElementById('font-increase');
                    const fontDecreaseButton = document.getElementById('font-decrease');

                    if (fontIncreaseButton && fontDecreaseButton) {
                        fontIncreaseButton.addEventListener('click', () => {
                            const currentFontSize = parseFloat(window.getComputedStyle(html).fontSize);
                            html.style.fontSize = `${currentFontSize + 2}px`;
                        });

                        fontDecreaseButton.addEventListener('click', () => {
                            const currentFontSize = parseFloat(window.getComputedStyle(html).fontSize);
                            html.style.fontSize = `${Math.max(currentFontSize - 2, 12)}px`;
                        });
                    }
                });
            </script>

</body>
</html>
