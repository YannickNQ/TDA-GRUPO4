<div class="login-box mr-auto ml-auto">
  <div class="login-logo">
    <h2><b>Registrar Docente</b></h2>
  </div>
  <!-- Card FormEditar -->
  <div class="card">
    <div class="card-body login-card-body">
      <form action="<?= base_url('Estudiante/Actualizar') ?>" method="post">
        <!-- id -->
        <input type="number" style="display:none;" name="id" value="<?= $datos_estu[0]->estu_id ?>">
        <!-- nombres -->
        <div class="input-group mb-3">
          <input type="text" id="nombres" class="form-control " placeholder="nombres" name="nombres" value="<?= $datos_estu[0]->estu_nombres ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
        </div>
        <!-- apellidos -->
        <div class="input-group mb-3">
          <input type="text" id="apellidos" class="form-control " placeholder="apellidos" name="apellidos" value="<?= $datos_estu[0]->estu_apellidos ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <!-- edad -->
        <div class="input-group mb-3">
          <input type="text" id="edad" class="form-control " placeholder="edad" name="edad" value="<?= $datos_estu[0]->estu_edad ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-phone-square"></span>
            </div>
          </div>
        </div>
        <!-- correo -->
        <div class="input-group mb-3">
          <input type="email" id="correo" class="form-control " placeholder="Correo E-mail" name="correo" value="<?= $datos_estu[0]->estu_correo ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-at"></span>
            </div>
          </div>
        </div>
        <!-- carrera -->
        <div class="input-group mb-3">
          <input type="text" id="carrera" class="form-control " placeholder="carrera" name="carrera" value="<?= $datos_estu[0]->estu_carrera ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- codigo -->
        <div class="input-group mb-3">
          <input type="text" id="codigo" class="form-control " placeholder="codigo" name="codigo" value="<?= $datos_estu[0]->estu_codigo ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- telefono -->
        <div class="input-group mb-3">
          <input type="text" id="telefono" class="form-control " placeholder="telefono" name="telefono" value="<?= $datos_estu[0]->estu_telf ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-flag"></span>
            </div>
          </div>
        </div>
        <!-- ciclo -->
        <div class="input-group mb-3">
          <input type="text" id="ciclo" class="form-control " placeholder="ciclo" name="ciclo" value="<?= $datos_estu[0]->estu_ciclo ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- nacimiento -->
        <div class="input-group mb-3">
          <input type="date" id="nacimiento" class="form-control " placeholder="Fecha de Nacimiento" name="nacimiento" value="<?= $datos_estu[0]->estu_nac ?>">
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-calendar-alt"></span>
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