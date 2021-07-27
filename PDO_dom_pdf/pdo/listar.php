<?php 

require_once("conexao.php");

$res = $conexao->query("SELECT * from clientes");

//SOMENTE UM RESULTADO
//$dados = $res->fetch();

//VARIAS LINHAS OU RESULTADOS
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < count($dados); $i++) { 
	foreach ($dados[$i] as $key => $value) {
	echo $key. " - ".$value. "<br>";

	}	
	echo $dados[$i]['nome']. "<br><br>";
}


/*
echo "<pre>";
print_r($dados);
echo "</pre>";
*/

 ?>