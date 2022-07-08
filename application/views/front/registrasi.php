<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2037/2037690.png" />

    <title> WEB EO | SI08 </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?php echo base_url('dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url('index.php/front') ?>" class="nav-link">Home</a>
                </li>
                <?php
                if ($this->session->has_userdata('USERNAME')) {
                ?>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="<?php echo base_url('index.php/login/logout') ?>" class="nav-link text-danger">Logout</a>
                    </li>
                <?php
                }
                ?>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <?php
        ?>

        <?php
        ?>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('index.php/front') ?>" class="brand-link">
                <img src="https://cdn-icons-png.flaticon.com/512/2037/2037690.png" alt="WEB EO | SI08 Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">WEB EO | SI08</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://png.pngtree.com/png-vector/20190307/ourlarge/pngtree-vector-administration-icon-png-image_755744.jpg" class="img-circle elevation-2" alt="Admin Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php
                            if ($this->session->has_userdata('USER')) {
                                echo $this->session->userdata('USERNAME');
                                echo ' - ' . $this->session->userdata('ROLE');
                            }

                            ?>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <?php

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Registrasi Kegiatan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/front') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Registrasi Kegiatan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Registrasi Kegiatan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <?php echo form_open('daftar/save') ?>

                            <div class="form-group row">
                                <label for="alasan" class="col-4 col-form-label">Alasan</label>
                                <div class="col-8">
                                    <input id="alasan" name="alasan" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="users_id" class="col-4 col-form-label">User ID</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">

                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <select id="users_id" name="users_id" class="custom-select">
                                            <?php
                                            $nomor = 1;
                                            foreach ($list_users as $users) {
                                            ?>
                                                <option value="<?= $users->id ?>"><?= $users->username ?> | ID: <?= $users->id ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kegiatan_id" class="col-4 col-form-label">Kegiatan ID</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-id-card"></i>
                                            </div>
                                        </div>
                                        <select id="kegiatan_id" name="kegiatan_id" class="custom-select">
                                            <?php
                                            $nomor = 1;
                                            foreach ($list_kegiatan as $kegiatan) {
                                            ?>
                                                <option value="<?= $kegiatan->id ?>"><?= $kegiatan->judul ?> | ID: <?= $kegiatan->id ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori_peserta_id" class="col-4 col-form-label">Kategori Peserta ID</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
                                            <?php
                                            $nomor = 1;
                                            foreach ($list_kategori_peserta as $kategori_peserta) {
                                            ?>
                                                <option value="<?= $kategori_peserta->id ?>"><?= $kategori_peserta->nama ?> | ID: <?= $kategori_peserta->id ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nosertifikat" class="col-4 col-form-label">No Sertifikat</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-id-card"></i>

                                            </div>
                                        </div>
                                        <input id="nosertifikat" name="nosertifikat" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                            <?php echo form_close() ?>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>

                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <?php
        ?>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="<?php echo base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/jszip/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('dist/js/demo.js') ?>"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>