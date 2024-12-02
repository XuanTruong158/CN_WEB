<?php
$host = '127.0.0.1';
$db   = 'btvn2';
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

function getDB(){
    global $host, $db, $user, $pass, $charset;
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (\PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
        return null;
    }
}
?>
