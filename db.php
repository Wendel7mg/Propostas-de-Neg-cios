<?php



//Local

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db="teste";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastros order by nome";
$consultaCadastros= mysqli_query($conexao, $query);

$query="select * from faixas";
$consultaFaixas= mysqli_query($conexao, $query);

