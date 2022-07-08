<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Kegiatan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan') ?>">Backend</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan') ?>">Daftar Kegiatan</a></li>
                        <li class="breadcrumb-item active">Detali Kegiatan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">

                <div class="row mb-2">
                    <div class="col-sm-4 border text-center">
                        <img class="w-100 h-100 p-2" src="<?php echo base_url('foto/' . $kegiatan->foto_flyer) ?>" alt="<?= $kegiatan->foto_flyer ?>">


                    </div>
                    <div class="col-sm-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?= $kegiatan->id ?></td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td><?= $kegiatan->judul ?></td>
                                </tr>
                                <tr>
                                    <td>Kapasitas</td>
                                    <td><?= $kegiatan->kapasitas ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Tiket</td>
                                    <td><?= $kegiatan->harga_tiket ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td><?= $kegiatan->tanggal ?></td>
                                </tr>
                                <tr>
                                    <td>Narasumber</td>
                                    <td><?= $kegiatan->narasumber ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td><?= $kegiatan->tempat ?></td>
                                </tr>
                                <tr>
                                    <td>Pic</td>
                                    <td><?= $kegiatan->pic ?></td>
                                </tr>
                                <tr>
                                    <td>Foto Flyer</td>
                                    <td><?= $kegiatan->foto_flyer ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis ID</td>
                                    <td><?= $kegiatan->jenis_id ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

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