<?php

// http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/
require_once ("conn.php");

// CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
$stmt = $conn->prepare( //Prepara a Conexão pe campos do banco de dados
    ' INSERT INTO tb_abastercer (
		motorista, orimetro, insumo, litros) 
    VALUES ( :motorista, :orimetro, :insumo, :litros )'
    );
    // Recebe os dados via INPUT_POST 
    $motorista  = filter_input(INPUT_POST, 'motorista');
    $orimetro  = filter_input(INPUT_POST, 'orimetro');
    $insumo  = filter_input(INPUT_POST, 'insumo');
    $litros  = filter_input(INPUT_POST, 'litros');
    
    // Faz o BindValue passando os para a variavel
      $stmt->bindValue(':motorista',  $motorista);
      $stmt->bindValue(':orimetro',  $orimetro);
      $stmt->bindValue(':insumo',  $insumo);
      $stmt->bindValue(':litros',  $litros);
      $stmt->execute();
      
    header("Location: ../inicio.php"); 

    exit();