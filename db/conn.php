<?php

    //$host = '127.0.0.1'; 
    //$db = 'webadmin_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

    //$host = 'sql5.freesqldatabase.com'; 
    //$db = 'sql5484242';
    //$user = 'sql5484242';
    //$pass = 'wwLS35FiAe';
    //$charset = 'utf8mb4';

    $host = 'remotemysql.com'; 
    $db = 'rnqYOBtBAs';
    $user = 'rnqYOBtBAs';
    $pass = 'GDyTz80MLq';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>


