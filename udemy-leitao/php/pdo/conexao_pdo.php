<?php
    function novaConexao($db = 'curso_php'){
        $srv = 'localhost';
        $usr = 'root';
        $pwd = '';

        try{
            $conexao = new PDO("mysql:host=$srv; dbname=$db",
            $usr, $pwd );
        }catch (PDOException $e){
            die('Erro: ' . $e->getMessage());
        }
    }
novaConexao();
echo "Fim";

?>