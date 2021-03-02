<!DOCTYPE html>
<html>

<body class="hold-transition login-page">
  <div class="login-box mx-auto">
    <!-- <div class="login-logo">
            <h2><b>Registrar Docente</b></h2>
        </div> -->
    <!-- /.login-logo -->
    <div class="card mt-2">
      <div class="card-body login-card-body bg-gradient-red ">
        <p class="login-box-msg">Bienvenido! Rellena tus datos para que sean registrados</p>
        <form action="<?= base_url('Estudiante/Registrar') ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" id="nombres" class="form-control" placeholder="ID" name="id">
            <div class="input-group-append">
              <div class="input-group-text bg-dark ">
                <span class="fas fa-address-book "></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="nombres" class="form-control " placeholder="nombres" name="nombres">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-address-book"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="apellidos" class="form-control " placeholder="apellidos" name="apellidos">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-id-card"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="edad" class="form-control " placeholder="edad" name="edad">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-phone-square"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" id="correo" class="form-control " placeholder="Correo E-mail" name="correo">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-at"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="carrera" class="form-control " placeholder="carrera" name="carrera">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="codigo" class="form-control " placeholder="codigo" name="codigo">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="telefono" class="form-control " placeholder="telefono" name="telefono">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-flag"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="ciclo" class="form-control " placeholder="ciclo" name="ciclo">
            <div class="input-group-append">
              <div class="input-group-text bg-dark">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
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