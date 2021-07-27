<?php 

try {

	$conexao = new PDO("mysql:dbname=pdo;host=localhost", "root", "");
	
} catch (Exception $e) {
	echo "Erro ao conectar com o Banco de Dados! ".$e;
}



 ?>