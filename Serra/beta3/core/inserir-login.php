<?php
echo '<h1>Bem Vindo</h1>';
// http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/
require_once ("conn.php");

$stmt = $conn->prepare( //Prepara a Conexão pe campos do banco de dados
    'INSERT INTO tb_login (
		nome, senha) 
    VALUES ( :nome, :senha )'
    );

    // Recebe os dados via INPUT_POST 
    $nome   = filter_input(INPUT_POST, 'nome');
    $senha   = filter_input(INPUT_POST, 'senha');

    // Faz o BindValue passando os para a variavel
    $stmt->bindValue(':nome',  $nome);
    $stmt->bindValue(':senha',  $senha);
    $stmt->execute();

    header("Location: ../inicio.php"); 
    exit();

?>