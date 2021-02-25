<div class="container">
  <table class="table table-hover table-responsive">
    <thead>
      <tr>
        <td>#</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Edad</td>
        <td>Correo</td>
        <td>Carrera</td>
        <td>Código</td>
        <td>Teléfono</td>
        <td>Ciclo</td>
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