<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlueSenchi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="style/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="style/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="style/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php $_SERVER['PHP_SELF']; ?>" class="h1"><b>Blue</b>Seichi</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Inicio de Session para Admin</p>

                <form>
                    <div class="input-group mb-3">
                        <input class="form-control" id="user" placeholder="User">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span id="showPassword" class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recordarme
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="button" id="ingresar" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <!-- /.social-auth-links -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <script>
    const passwordInput = document.getElementById('password');
    const showPasswordButton = document.getElementById('showPassword');
    const LogInButton = document.getElementById('ingresar');

    showPasswordButton.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordButton.textContent = '';
        } else {
            passwordInput.type = 'password';
            showPasswordButton.textContent = '';
        }
    });

    LogInButton.addEventListener('click', () => {
      var userInput = document.getElementById('user').value;
      var password = document.getElementById('password').value;
        datos = {
            "usuario": userInput,
            "password": password
        };
        $.ajax({
            url: "Controller/login.php",
            type: "POST",
            data: datos
        }).done(function(mensaje) {
          if(mensaje.sino == "si"){
            location.href = "./index.php"
          }else{
            alert("ni tienes cuenta padrino")
          }
        
        })
    })
    </script>

    <!-- jQuery -->
    <script src="style/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="style/dist/js/adminlte.min.js"></script>
</body>

</html>