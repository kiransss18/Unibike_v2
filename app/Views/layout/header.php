<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unibike | <?php echo $title ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo1.png">

    <base href="<?php echo base_url('assets') ?>/">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="dist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="">
        </script>

    <script src="https://unpkg.com/leaflet.heat@0.2.0/dist/leaflet-heat.js"></script>

    <div class="wrapper">


        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url(); ?>assets/images/logo.png" height="60">
        </div>

        <nav class="main-header navbar navbar-expand" style="background-color: #e9effd" ;>

            <ul class=" navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="data:image/jpeg;base64,<?= base64_encode(user()->user_image) ?>" class="img-circle"
                            width="40px" alt="User Image">
                    </a>
                    <ul class="dropdown-menu">

                        <li class="user-header">
                            <img src="data:image/jpeg;base64,<?= base64_encode(user()->user_image) ?>"
                                class="img-circle" width="40px" alt="User Image">
                            <div class="text-center">
                                <?= user()->username; ?>
                                <div class="text-center">
                                    <?php if (in_groups('superAdmin')) {
                                        echo '<p class="badge badge-dark text-center">Super Admin</p>';
                                    } elseif (in_groups('admin')) {
                                        echo '<p class="badge badge-info text-center">Admin Unibike</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <br>
                        </li>

                        <li class="user-footer">
                            <div class="text-center">
                                <div class="row">
                                    <?php if (in_groups('admin')): ?>
                                        <div class="col-sm">
                                            <a href="<?php echo base_url('profile'); ?>"
                                                class="btn btn-default btn-flat"><?php echo lang('profile'); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-sm">
                                        <a href="<?php echo base_url('logout'); ?>"
                                            class="btn btn-default btn-flat"><?php echo lang('logout'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

        <div class="content-wrapper">