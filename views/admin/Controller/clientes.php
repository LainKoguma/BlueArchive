<?php require_once "conexionf.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$accion = $_POST["accion"];
if(isset($_POST["clientes"])){
    $clientes = $_POST["clientes"];
}
else{
    $clientes = null;
}
if(isset($_POST["proyectos"])){
    $proyectos = $_POST["proyectos"];
}
else{
    $proyectos = null;
}
if(isset($_POST["id"])){
    $id = $_POST["id"];
}
else{
    $id = null;
}


if($accion == "guardarservicios"){

    if(isset($id)){

        $query = "SELECT id from u946450619_Koguma.clientes where id = '$id' ";
        $resultid = mysqli_query($link, $query);

        if(mysqli_num_rows($resultid) > 0){
            $sql = "UPDATE u946450619_Koguma.clientes SET clientes = '$clientes', proyectos = '$proyectos' where id = '$id';";
            $result = mysqli_query($link, $sql);
                
            if($result == true) {
                $msg = "si";
            }
            else{
                $servicios = "sinservicios";
            }
        }
        else{
            
            $sql = "INSERT INTO u946450619_Koguma.clientes (clientes, proyectos) values('$clientes','$proyectos')";
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

        $query = "SELECT id from u946450619_Koguma.clientes where id = $id ";
        $resultid = mysqli_query($link, $query);

        if(mysqli_num_rows($resultid) > 0){
            $sql = "DELETE from u946450619_Koguma.clientes where id = $id";
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
    
    $sql = "SELECT * from u946450619_Koguma.clientes";
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
    
    $sql = "SELECT * from u946450619_Koguma.clientes where id = $id;";
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