<?php 
    function conection(){
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'help_enem';
 
    $dsn = "mysql:host={$host};dbname={$banco}";
    
    try {
        $pdo = new PDO($dsn, $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $pdo;
            } 
    
    catch (PDOException $e) {  
        die($e->getMessage());
    }
}
?>