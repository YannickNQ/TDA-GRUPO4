<div class="content-wrapper">
<?=$this->renderSection('table_est') ?>
  <div class="container table-responsive">
    <table class="table table-hover table-bordered table-condensed">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Edad</th>
          <th>Correo</th>
          <th>Carrera</th>
          <th>Código</th>
          <th>Teléfono</th>
          <th>Ciclo</th>
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