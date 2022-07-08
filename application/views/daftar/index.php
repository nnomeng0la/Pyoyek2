<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Backend</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Backend</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Pendaftaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a class="btn btn-outline-success fas fa-edit" href="<?php echo base_url('index.php/daftar/create') ?>" role="button">Create</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th>NO</th> -->
                                        <th>ID</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Alasan</th>
                                        <th>Users ID</th>
                                        <th>Kegiatan ID</th>
                                        <th>Kategori Peserta ID</th>
                                        <th>No Sertifikat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $nomor = 1;
                                    foreach ($list_daftar as $daftar) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $daftar->id ?>
                                            </td>
                                            <td>
                                                <?= $daftar->tanggal_daftar ?>
                                            </td>
                                            <td>
                                                <?= $daftar->alasan ?>
                                            </td>
                                            <td>
                                                <?= $daftar->users_id ?>
                                            </td>
                                            <td>
                                                <?= $daftar->kegiatan_id ?>
                                            </td>
                                            <td>
                                                <?= $daftar->kategori_peserta_id ?>
                                            </td>
                                            <td>
                                                <?= $daftar->nosertifikat ?>
                                            </td>
                                            <td>
                                                <a class=" btn-secondary btn-xs " href="<?php echo base_url('index.php/daftar/view?id='. $daftar->id)?>" role="button">View</a>|
                                                <a class=" btn-primary btn-xs " href="<?php echo base_url('index.php/daftar/edit?id='. $daftar->id)?>" role="button">Edit</a>|
                                                <a class=" btn-danger btn-xs " href="<?php echo base_url('index.php/daftar/delete?id='. $daftar->id)?>" onclick="if(!confirm('Anda yakin akan menghapus Pendaftaran dengan ID <?= $daftar->id ?> ?')) {return false}" role="button">Delete</a>|

                                            </td>
                                        </tr>
                                    <?php
                                        // $nomor++;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->