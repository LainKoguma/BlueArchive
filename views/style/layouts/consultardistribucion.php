<?php require_once "conexionf.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$accion = $_POST["accion"];

    if ($accion == "obtenertitulo") {
    
        $sql = "SELECT Nombre from u946450619_Koguma.contenido";
        $result = mysqli_query($link, $sql);
        
        $titulos = array(); // Array to store titles
    
        while ($row = mysqli_fetch_array($result)) {
            $Nombre[] = $row["Nombre"];
        }
        
        $mensaje = array(
            'Nombre' => $Nombre,
        );
    }
    if ($accion == "obtenerdatosdelaempresa") {
    
        $sql = "SELECT * from u946450619_Koguma.contacto";
        $result = mysqli_query($link, $sql);
    
        while ($row = mysqli_fetch_array($result)) {
            $direccion[] = $row["direccion"];
            $telefono[] = $row["telefono"];
            $correo[] = $row["correo"];
        }
        
        $mensaje = array(
            'direccion' => $direccion,
            'telefono' => $telefono,
            'correo' => $correo,
        );
    }
    if ($accion == "obtenerclientes") {
    
        $sql = "SELECT * from u946450619_Koguma.clientes";
        $result = mysqli_query($link, $sql);
    
        while ($row = mysqli_fetch_array($result)) {
            $clientes[] = $row["clientes"];
            $proyectos[] = $row["proyectos"];
        }
        
        $mensaje = array(
            'clientes' => $clientes,
            'proyectos' => $proyectos,
        );
    }
    if ($accion == "obteneracercade") {
    
        $sql = "SELECT * from u946450619_Koguma.acerca";
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
    if ($accion == "obtenerwhy") {
    
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
    if ($accion == "obtenerquote") {
    
        $sql = "SELECT * from u946450619_Koguma.quote";
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
    if ($accion == "obtenertitulofooter") {
    
        $sql = "SELECT Nombre from u946450619_Koguma.contenido";
        $result = mysqli_query($link, $sql);
        
        $titulos = array(); // Array to store titles
    
        while ($row = mysqli_fetch_array($result)) {
            $Nombre[] = $row["Nombre"];
        }
        
        $mensaje = array(
            'Nombre' => $Nombre,
        );
    }
    if ($accion == "obtenerdatosdelaempresafooter") {
    
        $sql = "SELECT * from u946450619_Koguma.contacto";
        $result = mysqli_query($link, $sql);
    
        while ($row = mysqli_fetch_array($result)) {
            $direccion[] = $row["direccion"];
            $telefono[] = $row["telefono"];
            $correo[] = $row["correo"];
        }
        
        $mensaje = array(
            'direccion' => $direccion,
            'telefono' => $telefono,
            'correo' => $correo,
        );
    }

    mysqli_close($link); // Close the database connection
    
    header('Content-Type: application/json');
    echo json_encode($mensaje, JSON_FORCE_OBJECT);

?>