<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pendaftaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detali Pendaftaran</li>
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
                    <div class="col-sm-12">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?= $daftar->id ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Daftar</td>
                                    <td><?= $daftar->tanggal_daftar ?></td>
                                </tr>
                                <tr>
                                    <td>Alasan</td>
                                    <td><?= $daftar->alasan ?></td>
                                </tr>
                                <tr>
                                    <td>Users ID</td>
                                    <td><?= $daftar->users_id ?></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan ID</td>
                                    <td><?= $daftar->kegiatan_id ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori Peserta ID</td>
                                    <td><?= $daftar->kategori_peserta_id ?></td>
                                </tr>
                                <tr>
                                    <td>No Sertifikat</td>
                                    <td><?= $daftar->nosertifikat ?></td>
                                </tr>

                                <!-- <td>Predikat</td> -->

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