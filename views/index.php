<?php 
require  $_SERVER['DOCUMENT_ROOT'] .'/BlueArchive/views/style/layouts/header.php';
?>
<body>
    <!-- Nav & Carrousel-->

    <?php 
  //function para ir al admin

    if (isset($_GET['pass'])) {
        $check = $_GET['pass'];
        // Verificar si el valor del parámetro es numérico y coincide con el valor esperado
        if (is_numeric($check) && $check == 30000) {
            header('Location: admin/index.php');
            exit(); // Importante: salir del script después de la redirección
        } else {
          
        }
    }
    ?>
<?php require  $_SERVER['DOCUMENT_ROOT'] .'/BlueArchive/views/style/layouts/navbar.php';?>

<?php 
require_once $_SERVER['DOCUMENT_ROOT'] ."/BlueArchive/views/user/index.php";

//require $_SERVER['DOCUMENT_ROOT']."/BlueArchive/user/index.php";
/*
  $modulo = $_GET['modulo'];
   $area = $_GET['area'];
   
   if ($modulo != '' && $area != '') {
       $fileToInclude = $modulo . '/' . $area . '.php';
   
       if (file_exists($fileToInclude)) {
           require $fileToInclude;
       } else {
           require 'error.php'; // Redirige a error.php si el archivo no existe.
           exit();
       }
   } else {
    require 'error.php'; // Redirige a error.php si falta algún valor.
       exit();
   }*/
?>


<?php 
require $_SERVER['DOCUMENT_ROOT'] .'/BlueArchive/views/style/layouts/footer.php';
?>
</body>
</html>