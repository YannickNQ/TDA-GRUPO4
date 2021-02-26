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
    <title>Registrar</title>
</head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url('Login/Registrar')?>"><b>Registrar</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">Comienza a llenar tu datos</p>

        <form action="<?= base_url('Login/Registrar')?>" method="post">
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Nombre del Usuario">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-address-book"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Confirm Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <!-- /.col -->
            <div class="d-flex justify-content-center col-12">
                
                <button type="submit" class="col-6 btn btn-outline-primary btn-sm btn-block">Registrar</button>
                
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