<?php 
    headerAdmin($data);
  //  getModal('modalRoles', $data);

?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fas fa-user-tag"></i><?= $data['page_title']?>
            <button class="btn btn-primary" type="button" onclick="openModal();"> <i class="fas fa-plus-circle"></i> Nuevo </button>
          </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url()?>/Roles"><?= $data['page_title']?></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Roles de Usuarios</div>
          </div>
        </div>
      </div>
    </main>
    <?php footerAdmin($data) ?>