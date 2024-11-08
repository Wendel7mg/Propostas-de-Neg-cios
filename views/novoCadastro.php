<form method="post" action="insereCadastro.php" autocomplete="off">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome da Proposta</label>
        <input type="text" class="form-control" id="nome" name="proposta" required> <!-- Alterado o id para "nome" -->
    </div>
    <div class="mb-3">
        <label for="cliente" class="form-label">Nome do Cliente</label>
        <input type="text" class="form-control" id="cliente" name="cliente" required>
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor da Proposta</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status da Proposta</label>
        <select class="form-control" id="status" name="status" required>
            <option value="Pendente">Pendente</option>
            <option value="Aprovado">Aprovado</option>
            <option value="Recusado">Recusado</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
