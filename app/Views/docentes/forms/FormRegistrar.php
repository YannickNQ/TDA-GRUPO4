<div class="card col-5 mx-auto">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Bienvenido! Llena tus datos para que sean registrados</p>
    <form action="<?= base_url('Docente/Registrar') ?>" method="post">
      <!-- nombres -->
      <div class="input-group mb-3">
        <input type="text" id="nombres" class="form-control " placeholder="Nombres" name="nombres">
        <div class="input-group-append">
          <div class="input-group-text bg-dark ">
            <span class="fas fa-address-book "></span>
          </div>
        </div>
      </div>
      <!-- apellidos -->
      <div class="input-group mb-3">
        <input type="text" id="apellidos" class="form-control " placeholder="Apellidos" name="apellidos">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-address-book"></span>
          </div>
        </div>
      </div>
      <!-- dni -->
      <div class="input-group mb-3">
        <input type="text" id="dni" class="form-control " placeholder="DNI" name="dni">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-id-card"></span>
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
      <!-- telef -->
      <div class="input-group mb-3">
        <input type="text" id="celular" class="form-control " placeholder="Numero Telefonico" name="telef">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-phone-square"></span>
          </div>
        </div>
      </div>
      <!-- grado -->
      <div class="form-group">
        <div class="input-group">
          <select class="form-select form-control" aria-label=".form-select-sm example" name="grado">
            <option selected disabled>Grado de Instrucción</option>
            <option value="Magister">Magister</option>
            <option value="Bachiller">Bachiller</option>
            <option value="Licenciado/a">Licenciado/a</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text bg-dark">
              <span class="fas fa-university"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- titulo -->
      <div class="input-group mb-3">
        <input type="text" id="titulo" class="form-control " placeholder="Titulo" name="titulo">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <!-- nacionalidad -->
      <div class="input-group mb-3">
        <input type="text" id="nacion" class="form-control " placeholder="Nacionalidad" name="nacionalidad">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-flag"></span>
          </div>
        </div>
      </div>
      <!-- edad -->
      <div class="input-group mb-3">
        <input type="text" id="edad" class="form-control " placeholder="Edad" name="edad">
        <div class="input-group-append">
          <div class="input-group-text bg-dark">
            <span class="fas fa-envelope"></span>
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