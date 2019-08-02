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
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= URL_ASSETS ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= URL_ASSETS ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
        <div class="row flex-grow">
          <div class="col-lg-7 mx-auto text-white">
            <div class="row align-items-center d-flex flex-row">
              <div class="col-lg-6 text-lg-right pr-lg-4">
                <h1 class="display-1 mb-0">404</h1>
              </div>
              <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                <h2>DESCULPE!</h2>
                <h3 class="font-weight-light">A página que você procura não foi encontrada.</h3>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center mt-xl-2">
                <a class="text-white font-weight-medium" href="<?= URL_SITE . '/index.php?view=home' ?>">Voltar para o inicio</a>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 mt-xl-2">
                <p class="text-white font-weight-medium text-center">Copyright &copy; <?= date('Y').' '.NOME ?> All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= URL_ASSETS ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= URL_ASSETS ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= URL_ASSETS ?>/js/off-canvas.js"></script>
  <script src="<?= URL_ASSETS ?>/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>