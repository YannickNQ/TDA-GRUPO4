<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login <?php echo suma(3,2)?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>/public/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/Login/css/main.css">
<!--===============================================================================================-->
  <!-- SweetAlert -->
  <link rel="stylesheet" href="<?php echo base_url('/public/sweetalert2/dist/sweetalert2.min.css') ?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url()?>/public/Login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-54 p-b-54">
				<!-- <form action="<?php// echo base_url('/Ingresar')?>" class="login100-form validate-form" method="POST"> -->
            <form action="<?php echo base_url('Login/IniciandoSesion')?>" class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-49">Iniciar Sesión</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Ingrese su nombre de usuario" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-30" data-validate="Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="Repita su contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Ingresar
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-30">
						<span class="txt1 p-b-17">
							Registrate aqui
						</span>

						<a href="<?php echo base_url()?>/Registrar" class="txt2">
							Registrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>/public/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>/public/Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>/public/Login/js/main.js"></script>
	<!-- SweetAlert -->
	<script src="<?php echo base_url('/public/sweetalert2/dist/sweetalert2.min.js') ?>"></script>
	<script>
    let mess = "<?php echo isset($message)?$message:"a"?>";
    if(mess == "success"){
			Swal.fire({
				title: 'Bien!',
				text: 'El Usuario se registro correctamente',
				icon: 'success',
				confirmButtonText: 'Ok',
			});
    }
</script>
</body>
</html>