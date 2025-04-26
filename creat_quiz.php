<?php
require_once 'config/database.php';

$data = json_decode(file_get_contents("php://input"));
$title = $data->title;
$user_id = $data->user_id;

try {
    $sql = "INSERT INTO quizzes (title, user_id) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $user_id]);

    echo json_encode(["message" => "Quiz created"]);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>