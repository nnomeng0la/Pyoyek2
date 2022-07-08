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
                            <h3 class="card-title">Kelola Kegiatan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <a class="btn btn-outline-success fas fa-edit" href="<?php echo base_url('index.php/kegiatan/create') ?>" role="button"> Tambah Kegiatan</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th>NO</th> -->
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Kapasitas</th>
                                        <th>Harga Tiket</th>
                                        <th>Tanggal</th>
                                        <th>Narasumber</th>
                                        <th>Tempat</th>
                                        <th>Pic</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $nomor = 1;
                                    foreach ($list_kegiatan as $kegiatan) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $kegiatan->id ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->judul ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->kapasitas ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->harga_tiket ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->tanggal ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->narasumber ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->tempat ?>
                                            </td>
                                            <td>
                                                <?= $kegiatan->pic ?>
                                            </td>

                                            <td>
                                                <a class=" btn-secondary btn-xs " href="<?php echo base_url('index.php/kegiatan/view?id='. $kegiatan->id)?>" role="button">View</a>|
                                                <a class=" btn-danger btn-xs " href="<?php echo base_url('index.php/kegiatan/delete?id='. $kegiatan->id)?>" onclick="if(!confirm('Anda yakin akan menghapus Kegiatan <?= $kegiatan->judul ?> dengan ID <?= $kegiatan->id ?> ?')) {return false}" role="button">Delete</a>|

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