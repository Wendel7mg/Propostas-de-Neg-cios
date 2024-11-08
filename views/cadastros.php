<?php
// Consulta ao banco de dados
$query = "SELECT * FROM cadastros";
$consultaCadastros = mysqli_query($conn, $query);

// Verificar se a consulta foi bem-sucedida
if (!$consultaCadastros) {
    die("Erro na consulta: " . mysqli_error($conn)); // Exibe a mensagem de erro caso a consulta falhe
}
?>


<div class="caixa">
    <h4>Cadastro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=novoCadastro"><i class="bi bi-plus"></i> Cadastrar</a>
    <br><br><br>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr><td>' . $linha['proposta'] . '</td>'; 
                    echo '<td>' . number_format($linha['valor'], 2, ',', '.') . '</td>';
                    echo '<td>' . $linha['status'] . '</td>';
                    echo '<td> 
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="?pagina=editaCadastro">
                                        <input type="hidden" name="id" value="' . $linha['id'] . '">
                                        <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form method="post" action="deletaCadastro.php">
                                        <input type="hidden" name="id" value="' . $linha['id'] . '">
                                        <button type="submit" class="btn btn-outline-dark" style="border:none; color: red">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </td>';
                    echo '</tr>';
                };
                ?>
            </tbody>
        </table>
    </div>
</div>
