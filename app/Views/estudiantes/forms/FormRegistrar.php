<div class="card col-5 mx-auto">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Bienvenido! Llena tus datos para que sean registrados</p>
    <form action="<?= base_url('Estudiante/Registrar') ?>" method="post">
      <!-- nombres -->
      <div class="input-group mb-3">
        <input type="text" id="nombres" class="form-control " placeholder="nombres" name="nombres">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-address-book"></span>
          </div>
        </div>
      </div>
      <!-- apellidos -->
      <div class="input-group mb-3">
        <input type="text" id="apellidos" class="form-control " placeholder="apellidos" name="apellidos">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-id-card"></span>
          </div>
        </div>
      </div>
      <!-- edad -->
      <div class="input-group mb-3">
        <input type="text" id="edad" class="form-control " placeholder="edad" name="edad">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-phone-square"></span>
          </div>
        </div>
      </div>
      <!-- correo -->
      <div class="input-group mb-3">
        <input type="email" id="correo" class="form-control " placeholder="Correo E-mail" name="correo">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-at"></span>
          </div>
        </div>
      </div>
      <!-- carrera -->
      <div class="input-group mb-3">
        <input type="text" id="carrera" class="form-control " placeholder="carrera" name="carrera">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <!-- codigo -->
      <div class="input-group mb-3">
        <input type="text" id="codigo" class="form-control " placeholder="codigo" name="codigo">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <!-- telefono -->
      <div class="input-group mb-3">
        <input type="text" id="telefono" class="form-control " placeholder="telefono" name="telefono">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-flag"></span>
          </div>
        </div>
      </div>
      <!-- ciclo -->
      <div class="input-group mb-3">
        <input type="text" id="ciclo" class="form-control " placeholder="ciclo" name="ciclo">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <!-- nacimiento -->
      <div class="input-group mb-3">
        <input type="date" id="nacimiento" class="form-control" placeholder="Fecha de Nacimiento" name="nacimiento">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-calendar-alt"></span>
          </div>
        </div>
      </div>
      <!-- submit -->
      <div class="d-flex justify-content-center col-12">
        <button type="submit" class="col-6 btn btn-dark btn-sm btn-block">Registrar</button>
      </div>
    </form>
  </div>
</div>