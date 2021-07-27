<?php 

require_once("conexao.php");


//MÉTODO PREPARE (UTILIZA PARAMETROS)

$res = $conexao->prepare("delete from clientes where id = :id");
$res->bindValue(":id", "4");
$res->execute();
if($res != ''){
	echo "Excluido com sucesso!!";
}



//MÉTODO QUERY (NÃO UTILIZA PARAMETROS, VOCÊ PASSA DIRETO O VALOR DE FORMA RÁPIDA E PRÁTICA)
/*
$res = $conexao->query("delete from clientes where id = 2");
if($res != ''){
	echo "Excluido com sucesso!!";
}
*/

 ?>