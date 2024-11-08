<?php
include 'db.php'; // Incluindo a conexão com o banco

// Verificar se o ID foi passado via POST
if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']); // Sanitizar o ID

    // Realizar a consulta para pegar o cadastro com o ID específico
    $consultaCadastros = mysqli_query($conn, "SELECT * FROM cadastros WHERE id = '$id'");

    // Verificar se a consulta retornou algum resultado
    if ($linha = mysqli_fetch_assoc($consultaCadastros)) {
?>

<br>
<div class="caixa">
    <h4>Cadastro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="text" class="form-control" id="id" name="id" style="display:none;">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Proposta</label>
            <input value="<?php echo htmlspecialchars($linha['proposta']); ?>" type="text" class="form-control" id="proposta" name="proposta" required>
        </div>
        <div class="mb-3">
            <label for="obs" class="form-label">Nome do Cliente</label>
            <input value="<?php echo htmlspecialchars($linha['cliente']); ?>" type="text" class="form-control" id="cliente" name="cliente">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input value="<?php echo $linha['valor']; ?>" type="number" class="form-control" id="valor" name="valor" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Pendente" <?php if($linha['status'] == 'Pendente') echo 'selected'; ?>>Pendente</option>
                <option value="Aprovado" <?php if($linha['status'] == 'Aprovado') echo 'selected'; ?>>Aprovado</option>
                <option value="Rejeitado" <?php if($linha['status'] == 'Rejeitado') echo 'selected'; ?>>Rejeitado</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   
</div>
<br><br>

<?php
    } else {
        echo "Cadastro não encontrado!";
    }
} else {
    echo "ID não foi passado!";
}
?>
