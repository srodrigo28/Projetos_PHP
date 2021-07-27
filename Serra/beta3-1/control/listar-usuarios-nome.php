<?php
require 'Conn.php';

$nome = $_POST['nome'];
$conn = new Conn();
$listar_Usuarios = " SELECT * FROM usuarios WHERE nome=:nome ";


$listar_Usuarios = $conn->getConn()->prepare($listar_Usuarios);
$listar_Usuarios->bindParam(':nome', $nome, PDO::PARAM_STR );
$listar_Usuarios->execute();

while ($row_user = $listar_Usuarios->fetch(PDO::FETCH_ASSOC)):
    echo "ID: " . $row_user['id'] . "<br>";
    echo "Nome: " . $row_user['nome'] . "<br>";
    echo "E-mail: " . $row_user['email'] . "<br>";
    echo "Usuário: " . $row_user['usuario'] . "<br>";
    echo "Inserido: " . date('d/m/Y', strtotime($row_user['created'])) . "<br>";
    echo "Alterado: " . date('d/m/Y', strtotime($row_user['modified'])) . "<hr>";
endwhile;
