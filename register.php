require_once 'config/database.php';

$data = json_decode(file_get_contents("php://input"));

$name=$data-> name;
$email=$data-> email;
password=$data -> password_hash($data->password, PASSWORD_DEFAULT);

try {
    $sql= "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt= $pdo->prepare ($sql);
    $stmt->execute ([$name, $email, $password]);
    
    echo json_encode (["message" => "Regested success"]);
}