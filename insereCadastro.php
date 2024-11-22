<?php

include 'db.php';

$proposta = $_POST['proposta'];
$cliente = $_POST['cliente'];
$valor = $_POST['valor'];
$status_disponibilidade = $_POST['status_disponibilidade'];

$query = "INSERT INTO negocios (proposta, cliente, valor, status_disponibilidade) 
VALUES ('$proposta', '$cliente', '$valor', '$status_disponibilidade')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
