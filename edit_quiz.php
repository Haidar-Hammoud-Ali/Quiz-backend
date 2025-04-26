<?php
require_once 'config/database.php';
$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
$new_title = $data->new_title;
?>