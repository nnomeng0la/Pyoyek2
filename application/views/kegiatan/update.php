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
                    <h3 class="card-title">Form Update Kelola Kegiatan</h3>

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
                    $hidden = ['idedit' => $kegiatanedit->judul];
                    ?>


                    <?php echo form_open('kegiatan/save', "", $hidden) ?>
                    <div class="form-group row">
                        <label for="judul" class="col-4 col-form-label">Nama Judul</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input value="<?= $kegiatanedit->judul ?>" id="judul" name="judul" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kapasitas" class="col-4 col-form-label">Kapasitas</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input value="<?= $kegiatanedit->kapasitas ?>" id="kapasitas" name="kapasitas" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="harga_tiket" name="harga_tiket" value="<?= $kegiatanedit->harga_tiket ?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $kegiatanedit->tanggal ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="narasumber" class="col-4 col-form-label">Narasumber</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <input value="<?= $kegiatanedit->narasumber ?>" id="narasumber" name="narasumber" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat" class="col-4 col-form-label">Tempat</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="tempat" name="tempat" type="text" value="<?= $kegiatanedit->tempat ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pic" class="col-4 col-form-label">Pic</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                                <input id="pic" name="pic" type="text" class="form-control " value="<?= $kegiatanedit->pic ?>">
                            </div>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="jenis_id" class="col-4 col-form-label">Jenis ID</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select id="jenis_id" name="jenis_id" class="custom-select">
                                    <?php
                                    $nomor = 1;
                                    foreach ($list_jenis_kegiatan as $jenis_kegiatan) {
                                    ?>
                                        <option value="<?= $jenis_kegiatan->id ?>"><?= $jenis_kegiatan->nama ?> | ID: <?= $jenis_kegiatan->id ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

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