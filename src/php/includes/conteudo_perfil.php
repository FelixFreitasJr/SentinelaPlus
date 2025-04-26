<?php
$nomeUsuario = $_SESSION['usuario_nome'] ?? ''; // Define valor padrão vazio para nome
$emailUsuario = $_SESSION['usuario_email'] ?? ''; // Define valor padrão vazio para email

// Certifique-se de carregar a senha, se aplicável, a partir do banco de dados (nunca diretamente em plaintext).
?>
<div class="container">
    <h1>Editar Perfil</h1>
    <form action="../../php/controllers/perfilController.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($nomeUsuario); ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($emailUsuario); ?>" required>

        <label for="senha">Nova Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua nova senha">

        <label for="senha_confirma">Confirme a Nova Senha:</label>
        <input type="password" name="senha_confirma" id="senha_confirma" placeholder="Confirme sua nova senha">

        <button type="submit">Salvar Alterações</button>
    </form>
</div>
