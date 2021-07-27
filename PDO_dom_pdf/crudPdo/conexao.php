<?php 

try {

	
	$conexao = new PDO("mysql:dbname=crud;host=localhost", "root", "");
	
} catch (Exception $e) {
	echo "Erro ao conectar com o Banco de Dados! ".$e;
}



 ?>