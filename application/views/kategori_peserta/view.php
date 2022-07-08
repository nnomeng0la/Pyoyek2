<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Kategori Peserta</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan') ?>">Backend</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kategori_peserta') ?>">Kategori Peserta</a></li>
                        <li class="breadcrumb-item active">Detali Kategori Peserta</li>
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
                                    <td><b>ID</b></td>
                                    <td><?= $kategori_peserta->id ?></td>
                                </tr>
                                <tr>
                                    <td><b>Nama Kategori Peserta</b></td>
                                    <td><?= $kategori_peserta->nama ?></td>
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