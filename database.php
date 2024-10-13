<?php

$host = 'localhost';
$port = 3306;
$dbName = 'information_management';
$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    $pdo = new PDO ($dsn, $username, $password);

    $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(attribute: PDO::ATTR_DEFAULT_FETCH_MODE, value: PDO::FETCH_ASSOC);


    echo 'Database Connected...';

}   catch(PDOException $e) {
    echo 'Connection Failed...' . $e->getMessage();
}