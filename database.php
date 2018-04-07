<?php


function connectToDB() {
    $host = 'us-cdbr-iron-east-05.cleardb.net';
    $db   = 'heroku_957308e01d89bd4';
    $user = 'b75ccbea7c3dd4';
    $pass = 'f7bfd663';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
    return $pdo; 
}


?>