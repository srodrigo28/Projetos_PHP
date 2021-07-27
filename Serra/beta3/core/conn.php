<?php
$dsn = 'mysql:host=mysql669.umbler.com:41890;dbname=serradb';
$user = 'serradb';
$password = '2020serradb';
try {
    $conn = new PDO( $dsn, $user, $password,
    array ( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ) );
   // echo "Sucesso !!!";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>