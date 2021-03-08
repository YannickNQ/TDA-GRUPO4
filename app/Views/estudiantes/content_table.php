  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Lista de los Estudiantes</h3>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover table-bordered table-sm shadow">
          <thead class="thead-inverse">
            <tr>
              <th><i class="fas fa-sort-amount-down"></i></th>
              <th>
                <div class="d-flex justify-content-between">Nombres<i class="fas fa-file-signature d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Apellidos<i class="fas fa-file-signature d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Edad<i class=" fas fa-blind d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Correo<i class="fas fa-envelope d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Carrera<i class="fas fa-user-graduate d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Código<i class="fas fa-id-card d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Teléfono<i class="fas fa-phone-square d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">Ciclo<i class="fas fa-graduation-cap d-inline py-1"></i></div>
              </th>
              <th>
                <div class="d-flex justify-content-between">F. Nacimiento<i class="fas fa-graduation-cap d-inline py-1"></i></div>
              </th>
              <th class="text-center">Option</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datos_est as $key) : ?>
              <tr>
                <td><?= $key->estu_id ?></td>
                <td><?= $key->estu_nombres ?></td>
                <td><?= $key->estu_apellidos ?></td>
                <td><?= $key->estu_edad ?></td>
                <td><?= $key->estu_correo ?></td>
                <td><?= $key->estu_carrera ?></td>
                <td><?= $key->estu_codigo ?></td>
                <td><?= $key->estu_telf ?></td>
                <td><?= $key->estu_ciclo ?></td>
                <td><?= $key->estu_nac ?></td>
                <td>
                  <div class="d-flex justify-content-around">
                    <button type="button" href="<?= base_url() ?>/Estudiante/Editar/<?= $key->estu_id ?>" class="btn btn-warning btn-sm editar" data-toggle="modal" data-target="#Modal<?= $key->estu_id ?>"><i class="fas fa-edit"></i></button>
                    <div class="modal fade" id="Modal<?= $key->estu_id ?>" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content text-dark">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">EDITANDO ESTUDIANTE <?= $key->estu_id ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="<?= base_url('/EliminarPorId' . '/' . $key->estu_id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<script>
  window.onload = function() {
    $('.editar').click(function() {
      $('.modal-body').load($(this).attr('href') + "  .login-card-body");
    })
  }
</script>