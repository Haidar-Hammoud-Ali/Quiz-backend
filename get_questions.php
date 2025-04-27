<?php
require_once 'config/database.php';

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;

$getq = "SELECT * FROM questions WHERE quizid = ?";
$statmnt = $pdo->prepare($getq);
$statmnt->execute([$quizid]);
$questions = $statmnt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($questions);

?>