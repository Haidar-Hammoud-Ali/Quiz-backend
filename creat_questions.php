<?php
require_once 'config/database.php';

$userdata = file_get_contents("php://input");
$userdata = json_decode($userdata);

$quizid = $data->quizid;
$questiontext = $data->questiontext;
$correctanswer = $data->correctanswer;


$sql= "INSERT INTO questions (quizid, questiontext, correctanswer) VALUES (?, ?, ?)";
$statmnt = $pdo->prepare($sql);
$statmnt->execute([$quizid, $questiontext, $correctanswer]);
echo json_encode(["message" => "Question added"]);
    
?>