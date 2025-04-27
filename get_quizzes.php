<?php
require_once 'config/database.php';

try{
    $getallquiz = "SELECT * FROM quizzes";
    $statmnt = $pdo->query($getallquiz);
    $quizzes = $statmnt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($quizzes);
}catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>