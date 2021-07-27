<?php
    function novaConexao($db = 'curso_php'){
        $srv = 'localhost';
        $usr = 'root';
        $pwd = '';

        $conn = new mysqli($srv, $usr, $pwd, $db);

        if($conn->connect_error){
            die ('Erro: ' . $conn->connect_error);
        }
        return $conn;

    }




?>