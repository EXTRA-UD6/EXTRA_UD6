<?php 

    $username='root';
    $password='root';
    $host='bd';
    $dbname='ud6_extra_bd';
    $charset='utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,  
    ];

    try {
        $pdo = new PDO($dsn,$username,$password);

    } catch (PDOException $e) {
        die("Error: no se ha podido conectar con la base de datos");
        
    }

?>