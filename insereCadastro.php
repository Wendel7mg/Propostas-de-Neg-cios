<?php

include 'db.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$status_disponibilidade = $_POST['status_disponibilidade'];

$query = "INSERT INTO negocios (proposta, cliente, valor, status_disponibilidade) 
VALUES ('$titulo', '$autor', '$genero', '$status_disponibilidade')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
