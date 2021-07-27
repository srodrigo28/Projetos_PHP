<?php
    require_once "conexao_mysqli.php";

    $conn = novaConexao();
    $sql_create_db = 'CREATE DATABASE curso_php';
    $sql_drop = 'drop database curso_php';
    //$sql_show_database = 'SHOW DATABASES';
    $sql_create_table = "CREATE TABLE IF NOT EXISTIS cadastro(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        nasc DATE,
        email VARCHAR(100),
        filhos INT,
        salario FLOAT
    )";

    $resultado = $conn->query($sql_create_db);
    
    if($resultado){
        echo "Sucesso :)";
    } else {
        "Erro: " . $conn->error;
    }


?>