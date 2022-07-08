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
                            <h3 class="card-title">Kelola Referensi Kategori Peserta</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a class="btn btn-outline-success fas fa-edit" href="<?php echo base_url('index.php/kategori_peserta/create') ?>" role="button">Tambah Jenis Kegiatan</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_kategori_peserta as $kategori_peserta) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $kategori_peserta->id ?>
                                            </td>
                                            <td>
                                                <?= $kategori_peserta->nama ?>
                                            </td>
                                            <td>
                                                <a class=" btn-secondary btn-xs " href="<?php echo base_url('index.php/kategori_peserta/view?id='. $kategori_peserta->id)?>" role="button">View</a>|
                                                <a class=" btn-primary btn-xs " href="<?php echo base_url('index.php/kategori_peserta/edit?id='. $kategori_peserta->id)?>" role="button">Edit</a>|
                                                <a class=" btn-danger btn-xs " href="<?php echo base_url('index.php/kategori_peserta/delete?id='. $kategori_peserta->id)?>" onclick="if(!confirm('Anda yakin akan menghapus Kategori <?= $kategori_peserta->nama ?> dengan ID <?= $kategori_peserta->id ?> ?')) {return false}" role="button">Delete</a>|

                                            </td>
                                        </tr>

                                    <?php
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