<div class="content-wrapper">
<?=$this->renderSection('table_doc') ?>
  <div class="container table-responsive">
    <table class="table table-hover table-bordered table-condensed table-dark">
      <thead>
        <tr>
          <th><i class="fas fa-sort-amount-down"></th>
          <th>Nombres<i class="d-inline fas fa-file-signature"></th>
          <th>Apellidos<i class="d-inline fas fa-file-signature"></th>
          <th>DNI <i class=" fas fa-id-card float-right py-1"></th>
          <th>Correo <i class="fas fa-envelope float-right py-1" ></i></th>
          <th>Teléfono<i class="d-inline fas fa-phone-square"></i></th>
          <th>Grado<i class="d-inline fas fa-user-graduate float-right py-1"></i></th>
          <th>Título<i class="d-inline fas fa-graduation-cap float-right py-1"></i></th>
          <th>Nacionalidad<i class="d-inline fas fa-globe"></i></th>
          <th>Edad<i class="d-inline fas fa-blind"></i></th>
          <th>Ingreso<i class="d-inline fas fa-calendar-check"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos_doc as $key): ?>
          <tr>
          <td><?=$key->doce_id?></td>
          <td><?=$key->doce_nombre?></td>
          <td><?=$key->doce_apellidos?></td>
          <td><?=$key->doce_dni?></td>
          <td><?=$key->doce_correo?></td>
          <td><?=$key->doce_telf?></td>
          <td><?=$key->doce_grado?></td>
          <td><?=$key->doce_titulo?></td>
          <td><?=$key->doce_nacion?></td>
          <td><?=$key->doce_edad?></td>
          <td><?=$key->doce_fechaint?></td>
          <tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>