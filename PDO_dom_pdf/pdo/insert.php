<?php 

require_once("conexao.php");


//MÉTODO PREPARE (UTILIZA PARAMETROS)
/*
$res = $conexao->prepare("insert into clientes (nome, telefone, endereco) values (:nome, :telefone, :endereco)");

$res->bindValue(":nome", "Marcela");
$res->bindValue(":telefone", "5555");
$res->bindValue(":endereco", "Rua C");

$res->execute();
*/

//BIND PARAM ACEITA APENAS VARIAVEIS
/*
$nome = 'Fábio';
$telefone = '33333333';
$endereco = 'Rua A';
$res->bindparam(":nome", $nome);
$res->bindparam(":telefone", $telefone);
$res->bindparam(":endereco", $endereco);

$res->execute();
*/


//MÉTODO QUERY (NÃO UTILIZA PARAMETROS, VOCÊ PASSA DIRETO O VALOR DE FORMA RÁPIDA E PRÁTICA)
$conexao->query("insert into clientes (nome, telefone, endereco) values ('Paula', '3333-3333', 'Rua A')");


 ?>