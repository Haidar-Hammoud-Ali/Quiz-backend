<?php
require_once 'config/database.php';

$data = json_decode (file_get_contents("php://input"));
$email = $data ->email;
$password = $data ->password;
?>