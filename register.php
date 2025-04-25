require_once 'config/database.php';

$data = json_decode(file_get_contents("php://input"));

$name=$data-> name;
$email=$data-> email;
password=$data -> password_hash($data->password, PASSWORD_DEFAULT);
