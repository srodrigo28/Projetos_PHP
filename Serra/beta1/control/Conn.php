<?php

/**
 * Conexão com banco de Daods Maria DB.
 *
 * @Produzido por Seb Soluções
 */
class Conn {
    public static $Host = "localhost";  // Servidor
    public static $User = "root";       // Usuário
    public static $Pass = "";           // Senha
    public static $Dbname = "celke";    // Nome do Banco de dados
    private static $Connect = null;     // Instanciando uma variavel conexão
    
    private static function Conectar() { // Cria uma conexão
        try {
            if(self::$Connect == null):
                self::$Connect = new PDO('mysql:host=' . self::$Host .
                    ';dbname='.self::$Dbname, self::$User, self::$Pass);
            endif;            
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            echo 'Código: ' .   $ex->getCode();
            echo 'Linha: ' .    $ex->getLine();
            die;
        }       
        return self::$Connect;
    }
    public function getConn() { //Acessa a conexão com metodo conectar;
        return self::Conectar();
    }
}
