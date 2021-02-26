<div class="content-wrapper">
<?=$this->renderSection('table_est') ?>
  <div class="container table-responsive">
    <table class="table table-hover table-bordered table-condensed table-dark">
      <thead>
        <tr>
          <th><i class="fas fa-sort-amount-down"></i</th>
          <th>Nombres <i class="fas fa-file-signature float-right py-1"></i></th>
          <th>Apellidos <i class="fas fa-file-signature float-right py-1"></i></th>
          <th>Edad   <i class=" fas fa-blind float-right py-1"></i></th>
          <th>Correo <i class="fas fa-envelope float-right py-1"></i></th>
          <th>Carrera <i class="fas fa-user-graduate float-right py-1"></i></th>
          <th>Código <i class="fas fa-id-card float-right py-1"></i></th>
          <th>Teléfono <i class="fas fa-phone-square float-right py-1"></i></th>
          <th>Ciclo <i class="fas fa-graduation-cap float-right py-1"></i></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos_est as $key): ?>
          <td><?=$key->estu_id?></td>
          <td><?=$key->estu_nombres?></td>
          <td><?=$key->estu_apellidos?></td>
          <td><?=$key->estu_edad?></td>
          <td><?=$key->estu_correo?></td>
          <td><?=$key->estu_carrera?></td>
          <td><?=$key->estu_codigo?></td>
          <td><?=$key->estu_telf?></td>
          <td><?=$key->estu_ciclo?></td>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>