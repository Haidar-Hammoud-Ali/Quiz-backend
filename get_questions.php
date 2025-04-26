<?php
require_once 'config/database.php'

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
try {
    $sql = "SELECT * FROM questions WHERE quiz_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$quiz_id]);
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($questions);
?>