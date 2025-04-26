<?php
require_once 'config/database.php'

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
$question_text = $data->question_text;
$correct_answer = $data->correct_answer;

try {
    $sql= "INSERT INTO questions (quiz_id, question_text, correct_answer) VALUES (?, ?, ?)"
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$quiz_id, $question_text, $correct_answer]);
    echo json_encode(["message" => "Question added"]);
}
?>