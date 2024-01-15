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
                    <h3 class="card-title">Editar Acerca de</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contenido</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Contenido">
                                <input id="exampleInputid" hidden>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select class="form-control select2" id="tipo" style="width: 100%;" placeholder="Tipo de contenido">
                                    <option id="titulo" value="titulo">Titulo</option>
                                    <option id="caracteristica1" value="caracteristica1">Caracteristica 1</option>
                                    <option id="caracteristica2" value="caracteristica2">Caracteristica 2</option>
                                    <option id="descripcion" value="descripcion">Descripcion</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <button class="btn btn-danger btn-lg"
                                    style="width: 50%; margin-top: 5%; margin-left: 10%;" id="agregarservicio"><i
                                        class="fas fa-plus-square" style="margin-right: 10px;"> </i> Agregar
                                    </button>
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
        var contenido = document.getElementById("exampleInputEmail1").value
        var tipo = document.getElementById("tipo").value
        datos = {
            "accion": "guardarservicios",
            "id": id,
            "contenido": contenido,
            "tipo": tipo,
        };
        $.ajax({
            url: "Controller/quote.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {
            if (mensaje.msg == "si") {

              Swal.fire({
                    title: "Listo",
                    text: "Registro agregado/editado correctamente",
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
            url: "Controller/quote.php",
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
                      <th>Contenido</th>
                      <th>Tipo</th>
                    </tr>
                  </thead>
                  <tbody>`
            for (var x = 0; x < mensaje.msg; x++) {
                tabla += '<tr>'
                tabla += '<td>' + mensaje.fila[x]["id"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["texto"] + '</td>'
                tabla += '<td>' + mensaje.fila[x]["tipo"] + '</td>'
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
        var contenido = document.getElementById("exampleInputEmail1")
        var tipo = document.getElementById("tipo")
        datos = {
            "accion": "editarservicio",
            "id": idserv
        };
        $.ajax({
            url: "Controller/quote.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {

            idservice.value = mensaje.fila[0]["id"]
            contenido.value = mensaje.fila[0]["texto"]
            tipo.value = mensaje.fila[0]["tipo"]
        })
    }

    function deleteservices(id) {
        var id = id
        datos = {
            "accion": "deleteservicio",
            "id": id
        };
        $.ajax({
            url: "Controller/quote.php",
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