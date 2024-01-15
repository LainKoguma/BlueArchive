<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: login.php");
}
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Definir la constante BASE_PATH
define('BASE_PATH', realpath(dirname(__FILE__)));

// Incluir el archivo de la barra de navegación lateral
require BASE_PATH . '/vistas/barras/navsidebar.php';

// Obtener los valores de modulo y area desde la URL (sanitizar las entradas)
$modulo = isset($_GET['modulo']) ? filter_var($_GET['modulo'], FILTER_SANITIZE_STRING) : 'inicio';
$area = isset($_GET['area']) ? filter_var($_GET['area'], FILTER_SANITIZE_STRING) : 'index';

// Construir la ruta al archivo específico
$url = BASE_PATH . '/vistas/' . $modulo . $area . '.php';

// Verificar si el archivo existe y requerirlo, o mostrar error 404 si no existe
if(file_exists($url)){
    require $url;
} else {
    require BASE_PATH . '/vistas/inicio/error404.php';
}

// Incluir el archivo del pie de página
require BASE_PATH . '/vistas/barras/footer.php';
?>
