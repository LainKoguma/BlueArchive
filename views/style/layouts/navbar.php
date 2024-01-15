<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->
<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
$servername = "srv1134.hstgr.io";
$username = "u946450619_Koguma";
$password = "888p7unv1En";
$dbname = "u946450619_Koguma";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2" id="direccion"></i> </small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2" id="telefono"></i> </small>
                <small class="text-light"><i class="fa fa-envelope-open me-2" id="correo"></i> </small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"><span id="tituloprincipal" style="font-family: 'Quicksand', sans-serif; font-weight:normal;"></span></i></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- <div class="navbar-nav ms-auto py-0">
                    <a href="user/index.html" class="nav-item nav-link active">Home</a>
                    <a href="user/about.html" class="nav-item nav-link">About</a>
                    <a href="user/service.html" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>--->
        </div>
        <!--<butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
</div>
</nav>
<?php
// Consulta para obtener los elementos del carrusel
$sql = "SELECT * FROM u946450619_Koguma.indx_carr";
$result = $conn->query($sql);

if (!$result) {
    // Si hay un error en la consulta SQL, muestra una imagen por defecto y un mensaje de error
    $imagePath = $_SERVER['DOCUMENT_ROOT'] .'/BlueArchive/views/style/img/error-image.jpg'; // Imagen de error por defecto
    $error_message = "Error en la consulta SQL: " . $conn->error;
} else {
    // Si la consulta se realiza correctamente, procesa los resultados y carga las imágenes
?>

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $first = true; // Para controlar el primer elemento activo
        while ($row = $result->fetch_assoc()) {
            $activeClass = $first ? "active" : ""; // Asignar la clase "active" al primer elemento
            $first = false;
            
            // Verificar si la imagen existe en el directorio o usar una imagen por defecto
            $imagePath = file_exists($row['ubicacion']) ? $row['ubicacion'] : 'style/img/carousel-1.jpg';
        ?>
        <div class="carousel-item <?php echo $activeClass; ?>">
            <img class="w-100" src="<?php echo $imagePath; ?>" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo $row['titulogrande']; ?>
                    </h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php echo $row['titulomini']; ?></h1>

                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script>
$("document").ready(function() {
    obtenertitulo();
    obtenerdatosdelaempresa();
})

var dir = document.getElementById("direccion")
var tel = document.getElementById("telefono")
var mail = document.getElementById("correo")
var tp = document.getElementById("tituloprincipal")

function obtenertitulo() {

    //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
    datos = {
        "accion": "obtenertitulo"
    };

    $.ajax({
        url: "style/layouts/consultardistribucion.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        tp.innerText = " " + mensaje.Nombre[0];
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("AJAX Error:", textStatus, errorThrown);
    });


}

function obtenerdatosdelaempresa() {

    //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
    datos = {
        "accion": "obtenerdatosdelaempresa"
    };

    $.ajax({
        url: "style/layouts/consultardistribucion.php",
        type: "POST",
        data: datos
    }).done(function(mensaje) {
        dir.innerText = " " + mensaje.direccion[0];
        tel.innerText = " " + mensaje.telefono[0];
        mail.innerText = " " + mensaje.correo[0];
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("AJAX Error:", textStatus, errorThrown);
    });


}
</script>

<?php
// Cerrar el bloque "else" para el caso de que la consulta se realice correctamente
}
// Cerrar la conexión a la base de datos
$conn->close();
?>



</div>
</div>
<!-- Navbar & Carousel End -->