<?php
require_once 'config/database.php';

$userdata = file_get_contents("php://input");
$userdata = json_decode($userdata);

$questionid = $data->questionid;
$newcorrectanswer = $data->newcorrectanswer;
$newquestiontext = $data->newquestiontext;

$editquestion = "UPDATE questions SET question_text = ?, correct_answer = ? WHERE id = ?";
$statmnt = $pdo->prepare($editquestion);
$statmnt->execute([$newquestiontext, $newcorrectanswer, $questionid]);

echo json_encode(["message" => "Question updated successfully"]);
?>