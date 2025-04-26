<?php
require_once 'config/database.php';
$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
$new_title = $data->new_title;

try {
    $sql = "UPDATE quizzes SET title = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$new_title, $quiz_id]);
}catch(PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>