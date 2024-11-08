<?php
// Exemplo de conexão com o banco de dados MySQL
$host = 'localhost'; // ou o seu host
$user = 'root';      // seu usuário de banco de dados
$password = '123456789WendelMG';      // sua senha de banco de dados
$dbname = 'bd_negocios'; // o nome do banco de dados

// Cria a conexão
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
