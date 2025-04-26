<div class="container">
<div class="registro-form">
    <h2>Registro de Glicemia</h2>
    <form action="salvarGlicemia.php" method="POST">
        <label for="valor">Valor de Glicemia:</label>
        <input type="number" id="valor" name="valor" required>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required>

        <button type="submit" class="registro-button">Salvar</button>
    </form>
</div>
    </div>
