<?php
	function conectaBanco($servername, $username, $password, $banco) {

	// Cria uma conexão com nome servername, com usuário de nome username, com senha de nome password e banco de dados com nome banco.

	$conn = new mysqli($servername, $username, $password, $banco);

	//tenta criar conexão com nome conn

	if ($conn->connect_error) {

		die("Falha na conexão: " . $conn->connect_error);

		//verifica se a função teve algum problema

	}


return $conn;

//retorna o resultado da conexão

}
?>
