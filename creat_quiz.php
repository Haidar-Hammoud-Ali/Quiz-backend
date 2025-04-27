<?php
require_once 'config/database.php';

$userdata = file_get_contents("php://input");
$userdata= json_decode($userdata);
$quiztitle = $data->title;
$quizuser_id = $data->user_id;

$myQuery="INSERT INTO quizzes (title, user_id) VALUES (?, ?) ";

$statmnt = $pdo->prepare($myQuery);
$statmnt->execute([$quiztitle, $quizuser_id]);

echo json_encode(["message" => "Your Quiz Created"]);
?>