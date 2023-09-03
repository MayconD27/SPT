<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'spt');





try{
    $bd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" 
    . DB_NAME, DB_USERNAME, DB_PASSWORD, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', SESSION SQL_BIG_SELECTS=1", 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_PERSISTENT => true
        )
    );
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}