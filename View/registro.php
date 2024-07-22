<?php include_once '../Controller/usuarioController.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HOTEL MAUI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  <a>HOTEL MAUI</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro de Usuarios</p>

      <form action="" method="post">
          <div class="input-group mb-3">
            <input id="txtNombre" name="txtNombre" type="text"  class="form-control" placeholder="Nombre" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input id="txtNombre" name="txtApellido" type="text"  class="form-control" placeholder="Apellido" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Correo Electrónico" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contraseña" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-7">
              
            </div>
            <div class="col-5">
              <button type="submit" id="btnRegistrarme" name="btnRegistrarme"  class="btn btn-primary btn-block">Registrarme</button>
            </div>
          </div>
      </form>

      <a href="login.php" class="text-center">Iniciar sesión</a>
    </div>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/usuarios.js"></script>
</body>
</html>
