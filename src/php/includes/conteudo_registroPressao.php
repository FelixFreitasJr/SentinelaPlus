<div class="container">
<div class="registro-form">
    <h2>Registro de Pressão Arterial</h2>
    <form action="salvarPressao.php" method="POST">
        <label for="sistolica">Pressão Sistólica:</label>
        <input type="number" id="sistolica" name="sistolica" required>

        <label for="diastolica">Pressão Diastólica:</label>
        <input type="number" id="diastolica" name="diastolica" required>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required>

        <button type="submit" class="registro-button">Salvar</button>
    </form>
</div>
</div>