<?php
require_once 'config/database.php';

$userdata = file_get_contents("php://input");
$userdata = json_decode($userdata);

$quizid = $userdata->quizid;

$deletquiz = "DELETE FROM quizzes WHERE id = ?";
$statmnt = $pdo->prepare($deletquiz);
$statmnt->execute([$quizid]);
echo json_encode(["message" => "Quiz was deleted successfully"]);

?>