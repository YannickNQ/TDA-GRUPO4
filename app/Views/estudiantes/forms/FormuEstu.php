<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('')?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('')?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('')?>/public/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Select2 -->
     <link rel="stylesheet" href="<?= base_url('')?>/public/dist/css/select2.min.csss">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <style>
      ::placeholder{
        color:white;
      }
    </style>
    <title>Registrar Estudiante</title>
</head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <h2><b>Registrar Estudiante</b></h2>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body bg-teal">
        <p class="login-box-msg">Bienvenido! Rellena tus datos para crear tu usuario</p>
        <form action="<?= base_url('Estudiante/registro')?>" method="post">
            <div class="input-group mb-3" >
            <input type="text" id="nombres"  class="form-control " placeholder="Nombres">
            <div class="input-group-append">
                <div class="input-group-text bg-dark ">
                <span class="fas fa-address-book "></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="text" id="apellidos" class="form-control " placeholder="Apellidos">
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-address-book"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="text" id="edad" class="form-control " placeholder="Edad">
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="email" id="correo" class="form-control " placeholder="Correo E-mail">
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-at"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <select class="form-select " aria-label=".form-select-sm example" >
              <option selected>Escuela Profesional</option>
              <option value="1">Ingenieria de Sistemas</option>
              <option value="2">Ingenieria Mécanica Electrica</option>
              <option value="3">Ingeniera Electrónica</option>
            </select>
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-university"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="text" id="codigo" class="form-control " placeholder="Codigo de Estudiante">
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-id-card"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="text" id="celular" class="form-control " placeholder="Numero Telefonico">
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-phone-square"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <select class="form-select " aria-label=".form-select-sm example" >
              <option selected>Ciclo Actual</option>
              <option value="1">I Semestre</option>
              <option value="2">II Semestre</option>
              <option value="3">III Semestre</option>
              <option value="4">IV Semestre</option>
              <option value="5">V Semestre</option>
              <option value="6">VI Semestre</option>
              <option value="7">VII Semestre</option>
              <option value="8">VIII Semestre</option>
              <option value="9">IX Semestre</option>
              <option value="10">X Semestre</option>
            </select>
            <div class="input-group-append">
                <div class="input-group-text bg-dark">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            
            <!-- /.col -->
            <div class="d-flex justify-content-center col-12">
                
                <button type="submit" class="col-6 btn btn-outline-dark btn-sm btn-block">Registrar</button>
                
            </div>
            
            <!-- /.col -->
            </div>
        </form>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <script src="<?= base_url('')?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('')?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('')?>/public/dist/js/adminlte.min.js"></script>

    </body>
</body>
</html>