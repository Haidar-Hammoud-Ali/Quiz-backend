<?php
$host = 'localhost';
$database = 'quiz_app';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO("mysql:host=$host;db=$database", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>