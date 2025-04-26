<?php
require_once 'config/database.php';

$data json_decode(file_get_contents("php://input"));

$question_id = $data->question_id;
$new_question_text = $data->new_question_text;
$new_correct_answer = $data->new_correct_answer;
?>