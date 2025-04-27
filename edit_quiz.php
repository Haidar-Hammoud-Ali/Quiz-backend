<?php
require_once 'config/database.php';
$userdata = file_get_contents("php://input");
$userdata = json_decode($userdata);

$quiz_id = $data->quiz_id;
$new_title = $data->new_title;


$editquiz = "UPDATE quizzes SET title = ? WHERE id = ?";
$statmnt = $pdo->prepare($editquiz);
$statmnt->execute([$newtitle, $quizid]);

?>