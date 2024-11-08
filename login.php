<?php
// Incluindo a conexão com o banco de dados
include 'db.php';

// Capturando as informações do login
$usu_login = addslashes($_POST['usu_login']);
$usu_senha = md5($_POST['usu_senha']);

// Verifique se a conexão foi estabelecida corretamente
if (!$conn) {
    die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
}

// Consulta para verificar o login do usuário
$query = "SELECT * FROM usuarios WHERE usu_login = '$usu_login' AND usu_senha = '$usu_senha'";

// Executa a consulta
$consulta = mysqli_query($conn, $query);

if (mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuarios'] = $usu_login;
    header('location:index.php');
} else {
    header('location:index.php?erroLogin');
}
?>
