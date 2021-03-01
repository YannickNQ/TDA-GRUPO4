<div class="container-fluid table-responsive">
  <table class="table table-hover table-bordered table-striped table-sm shadow">
    <thead>
      <tr>
        <th><i class="fas fa-sort-amount-down"></i></th>
        <th>
          <div class="d-flex justify-content-between">Nombres <i class="d-inline py-1 fas fa-file-signature"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Apellidos <i class="d-inline py-1 fas fa-file-signature"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">DNI <i class="d-inline py-1 fas fa-id-card"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Correo <i class="d-inline py-1 fas fa-envelope"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Teléfono <i class="d-inline py-1 fas fa-phone-square"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Grado <i class="d-inline py-1 fas fa-user-graduate"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Título <i class="d-inline py-1 fas fa-graduation-cap"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Nacionalidad <i class="d-inline py-1 fas fa-globe"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Edad <i class="d-inline py-1 fas fa-blind"></i></div>
        </th>
        <th>
          <div class="d-flex justify-content-between">Ingreso <i class="d-inline py-1 fas fa-calendar-check"></i></div>
        </th>
        <th class="text-center">Option</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datos_doc as $key) : ?>
        <tr>
          <td><?= $key->doce_id ?></td>
          <td><?= $key->doce_nombre ?></td>
          <td><?= $key->doce_apellidos ?></td>
          <td><?= $key->doce_dni ?></td>
          <td><?= $key->doce_correo ?></td>
          <td><?= $key->doce_telf ?></td>
          <td><?= $key->doce_grado ?></td>
          <td><?= $key->doce_titulo ?></td>
          <td><?= $key->doce_nacion ?></td>
          <td><?= $key->doce_edad ?></td>
          <td><?= $key->doce_fechaint ?></td>
          <td>
            <div class="d-flex justify content-around">
              <button type="button" href="<?=base_url()?>/Docente/Editar/<?= $key->doce_id ?>" class="btn btn-warning btn-sm editar" data-toggle="modal" data-target="#Modal<?= $key->doce_id ?>">Edit</button>
              <div class="modal fade" id="Modal<?= $key->doce_id ?>" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content text-dark">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel">EDITAR DOCENTE <?= $key->doce_id ?></h5>
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
              <div class="btn btn-danger btn-sm">Delete</div>
            </div>
          </td>
        <tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script>
  window.onload = function() {
    $('.editar').click(function() {
      $('.modal-body').load($(this).attr('href') + "  .login-card-body");
    })
  }
</script>