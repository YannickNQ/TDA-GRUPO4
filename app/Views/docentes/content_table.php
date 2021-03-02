<style link="http://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></style>
<style link="http://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></style>
  <div class="container-fluid table-responsive">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Lista de los docentes</h3>
      </div>
      <div class="card-body">
        <table id="#aea" class="table table-hover table-bordered table-sm shadow">
          <thead class="thead-inverse thead-light">
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
                  <div class="d-flex justify-content-around">
                    <button type="button" href="<?= base_url() ?>/Docente/Editar/<?= $key->doce_id ?>" class="btn btn-warning btn-sm editar mr-2" data-toggle="modal" data-target="#Modal<?= $key->doce_id ?>"><i class="fas fa-edit"></i></button>
                    <div class="modal fade" id="Modal<?= $key->doce_id ?>" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content text-dark">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">EDITANDO DOCENTE <?= $key->doce_id ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="<?= base_url('/Docente/Eliminar/' . $key->doce_id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                  </div>
                </td>
              <tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    window.onload = function() {
      $('.editar').click(function() {
        $('.modal-body').load($(this).attr('href') + " card");
      });
      // $('#aea').dataTable();
    };
  </script>