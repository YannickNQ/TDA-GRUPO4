<div class="login-box mr-auto ml-auto">
	<div class="login-logo">
		<h2><b>Editar Docente</b></h2>
	</div>
	<!-- Card FormEditar -->
	<div class="card">
		<div class="card-body login-card-body">
			<form action="<?= base_url('Docente/Actualizar') ?>" method="post">
				<!-- nombres -->
				<div class="input-group mb-3">
					<input type="text" id="nombres" class="form-control " placeholder="Nombres" name="nombres" value="<?= $datos_doc[0]->doce_nombre ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-address-book"></span>
						</div>
					</div>
				</div>
				<!-- apellidos -->
				<div class="input-group mb-3">
					<input type="text" id="apellidos" class="form-control " placeholder="Apellidos" name="apellidos" value="<?= $datos_doc[0]->doce_apellidos ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-address-book"></span>
						</div>
					</div>
				</div>
				<!-- dni -->
				<div class="input-group mb-3">
					<input type="text" id="dni" class="form-control " placeholder="DNI" name="dni" value="<?= $datos_doc[0]->doce_dni ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-id-card"></span>
						</div>
					</div>
				</div>
				<!-- correo -->
				<div class="input-group mb-3">
					<input type="email" id="correo" class="form-control " placeholder="Correo E-mail" name="correo" value="<?= $datos_doc[0]->doce_correo ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-at"></span>
						</div>
					</div>
				</div>
				<!-- telef -->
				<div class="input-group mb-3">
					<input type="text" id="celular" class="form-control " placeholder="Numero Telefonico" name="telef" value="<?= $datos_doc[0]->doce_telf ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-phone-square"></span>
						</div>
					</div>
				</div>
				<!-- grado -->
				<div class="input-group mb-3">
					<select class="form-control form-select " aria-label=".form-select-sm example" name="grado" value="<?= $datos_doc[0]->doce_grado ?>">
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
				<!-- titulo -->
				<div class="input-group mb-3">
					<input type="text" id="titulo" class="form-control " placeholder="Titulo" name="titulo" value="<?= $datos_doc[0]->doce_titulo ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<!-- nacionalidad -->
				<div class="input-group mb-3">
					<input type="text" id="nacion" class="form-control " placeholder="Nacionalidad" name="nacionalidad" value="<?= $datos_doc[0]->doce_nacion ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-flag"></span>
						</div>
					</div>
				</div>
				<!-- edad -->
				<div class="input-group mb-3">
					<input type="text" id="edad" class="form-control " placeholder="Edad" name="edad" value="<?= $datos_doc[0]->doce_edad ?>">
					<div class="input-group-append">
						<div class="input-group-text bg-dark">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<!-- submit -->
				<div class="d-flex justify-content-center col-12">
					<button type="submit" class="col-6 btn btn-outline-dark btn-sm btn-block">Enviar</button>
				</div>
			</form>
		</div>
	</div>
	<!-- ./endCard -->
</div>