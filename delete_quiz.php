<?php
require_once 'config/database.php';

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
 try {
    $sql = "DELETE FROM quizzes WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$quiz_id]);
    echo json_encode(["message" => "Quiz deleted"]);
 }
?>