<?php
require_once 'config/database.php';

$data = json_decode (file_get_contents("php://input"));
$email = $data ->email;
$password = $data ->password;

try{
    $sql= "SELECT * FROM users WHERE email =?";
    $stmt= $pdo ->prepare ($sql);
    $stmt -> execute ([$email]);
    $user= $stmt ->fetch (PDO::FETCH_ASSOC);



}
?>