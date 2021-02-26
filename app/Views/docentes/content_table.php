<div class="content-wrapper">
<?=$this->renderSection('table_doc') ?>
  <div class="container table-responsive">
    <table class="table table-hover table-bordered table-condensed">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>DNI</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>Grado</th>
          <th>Título</th>
          <th>Nacionalidad</th>
          <th>Edad</th>
          <th>Fecha de Union</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos_doc as $key): ?>
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
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>