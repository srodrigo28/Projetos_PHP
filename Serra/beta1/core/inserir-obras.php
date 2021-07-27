<?php
// http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/

require_once ("conn.php");

$stmt = $conn->prepare(
    'INSERT INTO tb_obra (
		obra, cnpj, resp, telefone, email, cep, complemento, 
		endereco, bairro, cidade, estado) 
    VALUES ( :obra, :cnpj, :resp, :telefone, :email, :cep,
		     :complemento, :endereco, :bairro, :cidade, :estado	)'
);
 
    $obra   = filter_input(INPUT_POST, 'obra');
    $cnpj   = filter_input(INPUT_POST, 'cnpj');
	$resp   = filter_input(INPUT_POST, 'resp');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email    = filter_input(INPUT_POST, 'email');
	$cep      = filter_input(INPUT_POST, 'cep');
	$complemento = filter_input(INPUT_POST, 'complemento');
	$endereco = filter_input(INPUT_POST, 'endereco');
	$bairro   = filter_input(INPUT_POST, 'bairro');
	$cidade   = filter_input(INPUT_POST, 'cidade');
	$estado   = filter_input(INPUT_POST, 'estado');
    
    
    $stmt->bindValue(':obra',  $obra);
    $stmt->bindValue(':cnpj',  $cnpj);
	$stmt->bindValue(':resp',  $resp);
    $stmt->bindValue(':telefone', 	$telefone);
    $stmt->bindValue(':email', $email);
	$stmt->bindValue(':cep',   $cep);
	$stmt->bindValue(':complemento',$complemento);
    $stmt->bindValue(':endereco',   $endereco);
	$stmt->bindValue(':bairro',$bairro);
    $stmt->bindValue(':cidade',$cidade);
	$stmt->bindValue(':estado',$estado);
    

    $stmt->execute();

    echo "<script>alert('Adicionado com sucesso');</script>";

    header("Location: https://projapp.com.br/beta1/"); 
    exit();

?>