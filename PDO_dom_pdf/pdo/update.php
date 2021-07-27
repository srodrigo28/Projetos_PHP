<?php 

require_once("conexao.php");

//MÉTODO PREPARE (UTILIZA PARAMETROS)
try{
    $res = $conexao->prepare("update clientes set nome = :nome, telefone = :telefone where id = :id");

    $res->bindValue(":nome", "Marcela");
    $res->bindValue(":telefone", "55854-8952");
    $res->bindValue(":id", 1);
    $res->execute();
}catch(PDOException $e){
    echo "  ";
}