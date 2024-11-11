<?php

include 'db.php';  // Incluindo a conexão com o banco de dados

// Recebe os dados do formulário
$id = $_POST['id'];
$titulo = $_POST['titulo'];  // Campo 'titulo'
$autor = $_POST['autor'];    // Campo 'autor'
$genero = $_POST['genero'];  // Campo 'genero' - novo campo
$status_disponibilidade = $_POST['status_disponibilidade']; // Campo 'status_disponibilidade' 

// Atualiza o livro na tabela 'livros'
$query = "UPDATE negocios 
          SET proposta='$titulo', cliente='$autor', valor='$genero', status_disponibilidade='$status_disponibilidade' 
          WHERE id=$id";

// Executa a consulta
if (mysqli_query($conexao, $query)) {
    // Redireciona para a página de cadastros após o sucesso
    header('Location: index.php?pagina=cadastros');
} else {
    // Caso ocorra um erro, exibe a mensagem
    echo "Erro ao atualizar o livro: " . mysqli_error($conexao);
}
?>
