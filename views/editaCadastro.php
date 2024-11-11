<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $id) {
?>

<br>
<div class="caixa">
    <h4>Editar Cadastro da Proposta</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="hidden" id="id" name="id">
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome da Proposta</label>
            <input value="<?php echo $linha['proposta']; ?>" type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        
        <div class="mb-3">
            <label for="autor" class="form-label">Nome do Cliente</label>
            <input value="<?php echo $linha['cliente']; ?>" type="text" class="form-control" id="autor" name="autor" required>
        </div>
        
        <div class="mb-3">
            <label for="genero" class="form-label">Valor</label>
            <input value="<?php echo $linha['valor']; ?>" type="text" class="form-control" id="genero" name="genero" required>
        </div>
        
        <div class="mb-3">
            <label for="status_disponibilidade" class="form-label">Status da Proposta</label>
            <select class="form-control" id="status_disponibilidade" name="status_disponibilidade" required>
            <option value="aprovado" <?php echo ($linha['status_disponibilidade'] == 'aprovado') ? 'selected' : ''; ?>>Aprovado</option>
            <option value="reprovado" <?php echo ($linha['status_disponibilidade'] == 'reprovado') ? 'selected' : ''; ?>>Reprovado</option>
            <option value="pendente" <?php echo ($linha['status_disponibilidade'] == 'pendente') ? 'selected' : ''; ?>>Pendente</option>
            </select>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   
</div>
<br><br>

<?php
    }
}
?>
