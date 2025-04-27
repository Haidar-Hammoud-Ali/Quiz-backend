<?php
require_once 'config/database.php';

$userdata= file_get_contents("php://input");
$userdata = json_decode($userdata);


?>