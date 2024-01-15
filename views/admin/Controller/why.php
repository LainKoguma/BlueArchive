<?php require_once "conexionf.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$accion = $_POST["accion"];
if(isset($_POST["contenido"])){
    $contenido = $_POST["contenido"];
}
else{
    $contenido = null;
}
if(isset($_POST["descripcion"])){
    $descripcion = $_POST["descripcion"];
}
else{
    $descripcion = null;
}
$accion = $_POST["accion"];
if(isset($_POST["contenido"])){
    $contenido = $_POST["contenido"];
}
else{
    $contenido = null;
}
if(isset($_POST["tipo"])){
    $tipo = $_POST["tipo"];
}
else{
    $tipo = null;
}
if(isset($_POST["id"])){
    $id = $_POST["id"];
}
else{
    $id = null;
}


if($accion == "guardarservicios"){

    if(isset($id)){

        $query = "SELECT id from u946450619_Koguma.why where id = '$id' ";
        $resultid = mysqli_query($link, $query);

        if(mysqli_num_rows($resultid) > 0){
            $sql = "UPDATE u946450619_Koguma.why SET texto = '$contenido', descripcion = '$descripcion', tipo = '$tipo' where id = '$id';";
            $result = mysqli_query($link, $sql);
                
            if($result == true) {
                $msg = "si";
            }
            else{
                $servicios = "sinservicios";
            }
        }
        else{
            
            $sql = "INSERT INTO u946450619_Koguma.why (texto, descripcion, tipo) values('$contenido','$descripcion','$tipo')";
            $result = mysqli_query($link, $sql);

            if($result == true) {
                $msg = "si";
            }
            else{
                $servicios = "sinservicios";
            }
        }
    }
    
    $mensaje = array(
        'msg' => $msg
    );

}
if($accion == "deleteservicio"){

    if(isset($id)){

        $query = "SELECT id from u946450619_Koguma.why where id = $id ";
        $resultid = mysqli_query($link, $query);

        if(mysqli_num_rows($resultid) > 0){
            $sql = "DELETE from u946450619_Koguma.why where id = $id";
            $result = mysqli_query($link, $sql);
                
            if($result == true) {
                $msg = "si";
            }
            else{
                $servicios = "sinservicios";
            }
        }
        else{
            
        }
    }
    
    $mensaje = array(
        'msg' => $msg
    );

}
if ($accion == "consultaservicios") {
    
    $sql = "SELECT * from u946450619_Koguma.why";
    $result = mysqli_query($link, $sql);
    
    while ($fila = $result->fetch_assoc()) {
        $elementos[] = $fila;
    }
    
    $msg = sizeof($elementos); 
    $mensaje = array(
        'fila' => $elementos,
        'msg' => $msg
    );
}
if ($accion == "editarservicio") {
    
    $sql = "SELECT * from u946450619_Koguma.why where id = $id;";
    $result = mysqli_query($link, $sql);
    
    while ($fila = $result->fetch_assoc()) {
        $elementos[] = $fila;
    }
    
    $msg = sizeof($elementos); 
    $mensaje = array(
        'fila' => $elementos,
        'msg' => $msg
    );
}

    header('Content-Type: application/json');

    echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
?>