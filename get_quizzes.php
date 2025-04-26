<?php
require_once 'config/database.php';

try{
    $sql = "SELECT * FROM quizzes";
    $stmt = $pdo->query($sql);
    $quizzes = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>