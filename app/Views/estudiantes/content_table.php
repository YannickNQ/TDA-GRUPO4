<div class="content-wrapper">
  <?= $this->renderSection('table_est') ?>
  <div class="container table-responsive">
    <table class="table table-hover table-bordered table-dark table-striped table-sm">
      <thead>
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
          <th class="text-center">Option</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos_est as $key) : ?>
          <td><?= $key->estu_id ?></td>
          <td><?= $key->estu_nombres ?></td>
          <td><?= $key->estu_apellidos ?></td>
          <td><?= $key->estu_edad ?></td>
          <td><?= $key->estu_correo ?></td>
          <td><?= $key->estu_carrera ?></td>
          <td><?= $key->estu_codigo ?></td>
          <td><?= $key->estu_telf ?></td>
          <td><?= $key->estu_ciclo ?></td>
          <td>
            <div class="d-flex justify content-around">
              <div class="btn btn-warning btn-sm">Edit</div>
              <div class="btn btn-danger btn-sm">Delete</div>
            </div>
          </td>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>