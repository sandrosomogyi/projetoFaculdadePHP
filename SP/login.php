<?php

include('bootstrap.php');

if (logado()) {
  header("Location: " . URL_SITE . '/index.php?view=home');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= NOME ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= URL_ASSETS ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= URL_ASSETS ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="<?= URL_SITE . '/index.php?view=login' ?>" method="post">
                <div class="form-group">
                  <label class="label">Nome de Usuario</label>
                  <div class="input-group">
                    <input type="text" name="login" class="form-control" placeholder="Nome de Usuario">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Senha</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Entrar</button>
                </div>
              </form>
        </div>
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">LEBU 2018
              <a href="https://www.unip.br/" target="_blank">UNIP</a>. Laboratório Escola de Biomedicina da UNIP.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-right">   Made by "ASPA" 
            </span>
    </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= URL_ASSETS ?>/vendors/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="<?= URL_ASSETS ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= URL_ASSETS ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= URL_ASSETS ?>/js/off-canvas.js"></script>
  <script src="<?= URL_ASSETS ?>/js/misc.js"></script>
  <!-- endinject -->
    <?php if (isset($_GET['type'])) {
      $type = $_GET['type'];
      $titulo = $_GET['titulo'];
      $msg = $_GET['msg'];
      ?>
        <script>
                swal(
                  '<?= $titulo ?>',
                  '<?= $msg ?>',
                  '<?= $type ?>'
                )
        </script>";
    <?php 
  } ?>
</body>

</html>