<?php
require_once 'config/database.php'

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
$question_text = $data->question_text;
$correct_answer = $data->correct_answer;

?>