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
                                <label for="exampleInputEmail1">Nombre del servicio</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Servicio que ofreces">
                                <input id="exampleInputid" hidden>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="exampleInputRedirige">A donde Redirige</label>
                                <input type="text" class="form-control" id="exampleInputRedirige" placeholder="">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descripcion del servicio</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Una pequeña descripcion del servicio que ofreces">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="exampleInputContacto">Es un apartado de contacto?</label>
                                <input type="text" class="form-control" id="exampleInputContacto"
                                    placeholder="Telefono">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen de referencia</label>
                                <input type="file" class="form-control" id="exampleInputFile" placeholder="tuarchivo">
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
        var titulo = document.getElementById("exampleInputEmail1").value
        var descripcion = document.getElementById("exampleInputPassword1").value

        var redirige = document.getElementById("exampleInputRedirige").value
        var contacto = document.getElementById("exampleInputContacto").value
        datos = {
            "accion": "guardarservicios",
            "id": id,
            "titulo": titulo,
            "descripcion": descripcion,
            "redirige": redirige,
            "contacto": contacto
        };
        $.ajax({
            url: "Controller/servicios.php",
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
            url: "Controller/servicios.php",
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
              <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Servicio</th>
                      <th>Descripcion</th>
                      <th>Imagen</th>
                      <th>Redirige a </th>
                      <th>Contacto</th>
                    </tr>
                  </thead>
                  <tbody>`
            for (var x = 0; x < mensaje.msg; x++) {
                tabla += '<tr>'
                tabla += '<td>' + mensaje.fila[x]["titulo"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["descripcion"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["imagen"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["redirige"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["iscontacto"] + '</td>'
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
        var titulo = document.getElementById("exampleInputEmail1")
        var descripcion = document.getElementById("exampleInputPassword1")
        var file = document.getElementById("exampleInputFile")
        var redirige = document.getElementById("exampleInputRedirige")
        var contacto = document.getElementById("exampleInputContacto")
        datos = {
            "accion": "editarservicio",
            "id": idserv
        };
        $.ajax({
            url: "Controller/servicios.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {

            idservice.value = mensaje.fila[0]["id"]
            titulo.value = mensaje.fila[0]["titulo"]
            descripcion.value = mensaje.fila[0]["descripcion"]
            redirige.value = mensaje.fila[0]["redirige"]
            contacto.value = mensaje.fila[0]["iscontacto"]

        })
    }

    function deleteservices(id) {
        var id = id
        datos = {
            "accion": "deleteservicio",
            "id": id
        };
        $.ajax({
            url: "Controller/servicios.php",
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