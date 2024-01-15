<?php require_once "conexionf.php";
$accion = $_POST["accion"];

if($accion == "loadservices"){
    $sql = "SELECT * FROM servicios";
    $result = mysqli_query($link, $sql);

    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            $servicios[] = $fila;
        }
        $msg = sizeof($servicios);
    }
    else{
        $servicios = "sinservicios";
    }
    
    $mensaje = array(
        'respuesta' => $servicios,
        'msg' => $msg
    );

}
    header('Content-Type: application/json');

    echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
?>