<?php
require_once 'config/database.php';

$data = json_decode(file_get_contents("php://input"));
$title = $data->title;
$user_id = $data->user_id;
?>