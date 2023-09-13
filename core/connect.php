<?php

require_once 'setting.php';

$dsn = 'mysql:host='. DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT.';charset='.CHARSET;
$option = [
    PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {  
    $pdo = new PDO ($dsn, DB_USER, DB_PASSWORD, $option);

} catch (PDOException $exception) {
    echo $exception->getMessage();
    exit();
}
