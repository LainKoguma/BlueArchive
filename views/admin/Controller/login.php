<?php require_once "conexionf.php";

session_start();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT user from usuarios where user = '$usuario' and password = '$password' ";
$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_array($result)){
    $user = $row["user"];
}

if(isset($user)){
    $sino = "si";
    $_SESSION["username"] = $user;
}
else{
    $sino = "no";
}

$mensaje = array(
    'sino' => $sino
);

header('Content-Type: application/json');

echo json_encode($mensaje, JSON_FORCE_OBJECT);
?>