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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Update Kelola Pendaftaran</h3>

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
                    <?php
                    $hidden = ['idedit' => $daftaredit->id];
                    ?>

                    <?php echo form_open('daftar/save', "", $hidden) ?>
                    <div class="form-group row">
                        <label for="alasan" class="col-4 col-form-label">Alasan</label>
                        <div class="col-8">
                            <input value="<?= $daftaredit->alasan ?>" id="alasan" name="alasan" type="text" class="form-control">
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
                                <input value="<?= $daftaredit->nosertifikat ?>" id="nosertifikat" name="nosertifikat" type="text" class="form-control">
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