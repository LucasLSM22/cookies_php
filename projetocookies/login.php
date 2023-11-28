<?php
//Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Recebe os dados do formulário
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Altera o nome do cookie
	$cookie_usuario = "usuario";
	$cookie_senha = "senha";

	// Altera o tempo de expiração do cookie
	$cookie_time = time() + (86400 * 30); // 86400 = 1 day

	// Cria o cookie "dados_usuario"
	setcookie($cookie_usuario, $username, $cookie_time, "/");

	// Cria o cookie "dados_senha"
	setcookie($cookie_senha, $password, $cookie_time, "/");

	// Redireciona para a página de boas-vindas
	header('Location: telavotacao.php');
	exit;
} ?>