<?= $this->extend('Template/Inicio') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?=$title?></h1>
      </div>
      <!-- /.col -->
      <?php if($registrarDoc):?>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li><a href="<?= base_url() ?>/Docente/FormRegistrar" class="btn btn-outline-dark">Registrar Docente <i class="fas fa-user-plus"></i></a></li>
        </ol>
      </div>
      <?php endif;?>
      <!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
  <?= $this->include('docentes/'.$content) ?>
</div>
<?= $this->endSection() ?>