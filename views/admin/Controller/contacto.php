<?php require_once "conexionf.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$accion = $_POST["accion"];
if(isset($_POST["direccion"])){
    $direccion = $_POST["direccion"];
}
else{
    $direccion = null;
}
if(isset($_POST["twitter"])){
    $twitter = $_POST["twitter"];
}
else{
    $twitter = null;
}
if(isset($_POST["instagram"])){
    $instagram = $_POST["instagram"];
}
else{
    $instagram = null;
}
if(isset($_POST["telefono"])){
    $telefono = $_POST["telefono"];
}
else{
    $telefono = null;
}
if(isset($_POST["facebook"])){
    $facebook = $_POST["facebook"];
}
else{
    $facebook = null;
}
if(isset($_POST["youtube"])){
    $youtube = $_POST["youtube"];
}
else{
    $youtube = null;
}
if(isset($_POST["correo"])){
    $correo = $_POST["correo"];
}
else{
    $correo = null;
}
if(isset($_POST["linkedin"])){
    $linkedin = $_POST["linkedin"];
}
else{
    $linkedin = null;
}
if(isset($_POST["id"])){
    $id = $_POST["id"];
}
else{
    $id = null;
}


if($accion == "guardarservicios"){

    if(isset($id)){

        $query = "SELECT id from u946450619_Koguma.contacto where id = '$id' ";
        $resultid = mysqli_query($link, $query);

        if(mysqli_num_rows($resultid) > 0){
            $sql = "UPDATE u946450619_Koguma.contacto SET direccion = '$direccion', twitter = '$twitter', instagram = '$instagram', telefono = '$telefono', facebook = '$facebook', youtube = '$youtube', correo = '$correo', linkedin = '$linkedin' where id = '$id';";
            $result = mysqli_query($link, $sql);
                
            if($result == true) {
                $msg = "si";
            }
            else{
                $servicios = "sinservicios";
            }
        }
        else{
            
            $sql = "INSERT INTO u946450619_Koguma.contacto (direccion,twitter,instagram,telefono,facebook,youtube,correo,linkedin) values('$direccion','$twitter','$instagram','$telefono','$facebook','$youtube','$correo','$linkedin')";
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

        $query = "SELECT id from u946450619_Koguma.contacto where id = $id ";
        $resultid = mysqli_query($link, $query);

        if(mysqli_num_rows($resultid) > 0){
            $sql = "DELETE from u946450619_Koguma.contacto where id = $id";
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
    
    $sql = "SELECT * from u946450619_Koguma.contacto";
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
    
    $sql = "SELECT * from u946450619_Koguma.contacto where id = $id;";
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