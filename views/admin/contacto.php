<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">

    <?php include("navbar.php"); ?>

    <!-- Main content -->
    <section class="content" style="width: 95%; margin-left:4%;">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Agregar Servicios</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion"
                                    placeholder="La direccion de tu empresa">
                                <input id="exampleInputid" hidden>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" placeholder="Link de twitter">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" placeholder="Link de instagram">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono"
                                    placeholder="Telefono de tu empresa">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook"
                                    placeholder="Link de facebook">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="youtube">YouTube</label>
                                <input type="text" class="form-control" id="youtube"
                                    placeholder="Link de youtube">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="text" class="form-control" id="correo"
                                placeholder="Correo de tu empresa">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="linkedin">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin"
                                    placeholder="Link de linkedin">
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <button class="btn btn-danger btn-lg"
                                    style="width: 50%; margin-top: 5%; margin-left: 30%;" id="agregarservicio"><i
                                        class="fas fa-plus-square" style="margin-right: 10px;"> </i> Agregar
                                    Servicio</button>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
        </div>
        <div id="tablaservicios" style="width: 100%;">

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="../style/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $("document").ready(function() {
        consultaservicios()
    })
    ts = document.getElementById("tablaservicios")

    document.getElementById("agregarservicio").addEventListener('click', () => {
        var id = document.getElementById("exampleInputid").value
        var direccion = document.getElementById("direccion").value
        var twitter = document.getElementById("twitter").value
        var instagram = document.getElementById("instagram").value
        var telefono = document.getElementById("telefono").value
        var facebook = document.getElementById("facebook").value
        var youtube = document.getElementById("youtube").value
        var correo = document.getElementById("correo").value
        var linkedin = document.getElementById("linkedin").value

        datos = {
            "accion": "guardarservicios",
            "id": id,
            "direccion": direccion,
            "twitter": twitter,
            "instagram": instagram,
            "telefono": telefono,
            "facebook": facebook,
            "youtube": youtube,
            "correo": correo,
            "linkedin": linkedin,


        };
        $.ajax({
            url: "Controller/contacto.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {
            if (mensaje.msg == "si") {

                Swal.fire({
                    title: "Listo",
                    text: "Servicio agregado/editado correctamente",
                    icon: "success"
                });
                consultaservicios()

            } else {

            }
        })
    })

    function consultaservicios() {
        var tabla = ''
        //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
        datos = {
            "accion": "consultaservicios"
        };

        $.ajax({
            url: "Controller/contacto.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {
            tabla += `
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Servicios</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Correo</th>
                      <th>Twitter</th>
                      <th>Facebook</th>
                      <th>LinkedIn</th>
                      <th>Instagram</th>
                      <th>Youtube</th>
                    </tr>
                  </thead>
                  <tbody>`
            for (var x = 0; x < mensaje.msg; x++) {
                tabla += '<tr>'
                tabla += '<td>' + mensaje.fila[x]["id"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["direccion"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["telefono"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["correo"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["twitter"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["facebook"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["linkedin"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["instagram"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["youtube"] + '</td>'
                tabla +=
                    '<td><button class="btn btn-success" onclick="editservices(' + mensaje.fila[x]["id"] +
                    ')"><i class="fas fa-edit"></i></button></td>'
                tabla +=
                    '<td><button class="btn btn-danger" onclick="deleteservices(' + mensaje.fila[x]["id"] +
                    ')"><i class="far fa-trash-alt"></i></button></td>'
                tabla += '</tr>'
            }
            tabla += `
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>`
            ts.innerHTML = tabla
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX Error:", textStatus, errorThrown);
        });
    }

    function editservices(id) {

        var idserv = id
        var idservice = document.getElementById("exampleInputid")
        var direccion = document.getElementById("direccion")
        var twitter = document.getElementById("twitter")
        var instagram = document.getElementById("instagram")
        var telefono = document.getElementById("telefono")
        var facebook = document.getElementById("facebook")
        var youtube = document.getElementById("youtube")
        var correo = document.getElementById("correo")
        var linkedin = document.getElementById("linkedin")
        datos = {
            "accion": "editarservicio",
            "id": idserv
        };
        $.ajax({
            url: "Controller/contacto.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {

            idservice.value = mensaje.fila[0]["id"]
            direccion.value = mensaje.fila[0]["direccion"]
            twitter.value = mensaje.fila[0]["twitter"]
            instagram.value = mensaje.fila[0]["instagram"]
            telefono.value = mensaje.fila[0]["telefono"]
            facebook.value = mensaje.fila[0]["facebook"]
            youtube.value = mensaje.fila[0]["youtube"]
            correo.value = mensaje.fila[0]["correo"]
            linkedin.value = mensaje.fila[0]["linkedin"]

        })
    }

    function deleteservices(id) {
        var id = id
        datos = {
            "accion": "deleteservicio",
            "id": id
        };
        $.ajax({
            url: "Controller/contacto.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {
            if (mensaje.msg == "si") {

                Swal.fire({
                    title: "Listo",
                    text: "Registro eliminado correctamente",
                    icon: "success"
                });
                consultaservicios()


            } else {

            }
        })
    }
    </script>
</body>

</html>