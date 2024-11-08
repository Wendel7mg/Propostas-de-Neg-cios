<?php

#iniciar sessão
session_start();

# Base de dados
include 'db.php';

# funções
include 'funcao.php';

# Cabeçalho
include 'header.php';

# Auto-Recarregamento página
header("refresh: 1800;");

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'cadastros';
	}
}
else{
	$pagina = 'home';
}

switch ($pagina) {
	case 'cadastros': include 'views/cadastros.php'; break;
	case 'novoCadastro': include 'views/novoCadastro.php'; break;
	case 'editaCadastro': include 'views/editaCadastro.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';