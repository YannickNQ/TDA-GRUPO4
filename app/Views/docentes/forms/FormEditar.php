<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('') ?>/public/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('') ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('') ?>/public/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url('') ?>/public/dist/css/select2.min.csss">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<style>
		::placeholder {
			color: white;
		}
	</style>
	<title>Editar Docente</title>
</head>

<body class="hold-transition login-page">
	<div class="login-box mr-auto ml-auto">
		<div class="login-logo">
			<h2><b>Editar Docente</b></h2>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<!-- <p class="login-box-msg h4">Bienvenido! Edita tus datos</p> -->
				<form action="<?= base_url('Docente/Actualizar') ?>" method="post">
					<div class="input-group mb-3" style="display:none">
						<input type="text" id="id" class="form-control " placeholder="id" name="id" value="<?= $datos_doc[0]->doce_id ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark ">
								<span class="fas fa-address-book "></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" id="apellidos" class="form-control " placeholder="Apellidos" name="apellidos" value="<?= $datos_doc[0]->doce_apellidos ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-address-book"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" id="dni" class="form-control " placeholder="DNI" name="dni" value="<?= $datos_doc[0]->doce_dni ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-id-card"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="email" id="correo" class="form-control " placeholder="Correo E-mail" name="correo" value="<?= $datos_doc[0]->doce_correo ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-at"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" id="celular" class="form-control " placeholder="Numero Telefonico" name="telef" value="<?= $datos_doc[0]->doce_telf ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-phone-square"></span>
							</div>
						</div>
					</div>

					<div class="input-group mb-3">
						<select class="form-control form-select " aria-label=".form-select-sm example" value="<?= $datos_doc[0]->doce_grado ?>">
							<option selected disabled>Grado de Instrucción</option>
							<option value="Magister">Magister</option>
							<option value="Bachiller">Bachiller</option>
							<option value="Licenciado">Licenciado/a</option>
						</select>
						<div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-university"></span>
              </div>
            </div>
					</div>
					<div class="input-group mb-3">
						<input type="text" id="titulo" class="form-control " placeholder="Titulo" name="titulo" value="<?= $datos_doc[0]->doce_titulo ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" id="nacion" class="form-control " placeholder="Nacionalidad" name="nacion" value="<?= $datos_doc[0]->doce_nacion ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-flag"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" id="edad" class="form-control " placeholder="Edad" name="edad" value="<?= $datos_doc[0]->doce_edad ?>">
						<div class="input-group-append">
							<div class="input-group-text bg-dark">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center col-12">
						<button type="submit" class="col-6 btn btn-outline-dark btn-sm btn-block">Enviar</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.login-card-body -->
	</div>

	<!-- /.login-box -->

	<script src="<?= base_url('') ?>/public/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('') ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('') ?>/public/dist/js/adminlte.min.js"></script>
</body>

</html>