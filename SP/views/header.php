<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Biomedicina</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?= URL_ASSETS ?>/vendors/iconfonts/font-awesome/css/font-awesome.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= URL_ASSETS ?>/css/style.css">
    <link rel="stylesheet" href="<?= URL_ASSETS ?>/css/custom.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= URL_ASSETS ?>/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="http://www.unip.br/presencial/ensino/graduacao/tradicionais/bio_biomedicina.aspx">
                <img src="<?= URL_ASSETS ?>/images/Logotipo Biomedicina.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="http://www.unip.br/presencial/ensino/graduacao/tradicionais/bio_biomedicina.aspx">
                <img src="<?= URL_ASSETS ?>/images/Logotipo Biomedicina mini.png" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Bem Vindo, <?= username(); ?> !</span>
                        <i class="fa fa-user-circle-o" style="font-size: 25px;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a href="<?= URL_SITE.'/index.php?view=logout' ?>" class="dropdown-item">
                            Sair
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <?php get_menu() ?>
            </ul>
        </nav>