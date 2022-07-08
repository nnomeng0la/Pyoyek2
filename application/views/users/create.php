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
                    <h3 class="card-title">Form User</h3>

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

                    <?php echo form_open('users/save') ?>


                    <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">Username</label>
                        <div class="col-8">
                            <input id="username" name="username" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Password</label>
                        <div class="col-8">
                            <input id="password" name="password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Status</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="status" id="status_0" type="radio" class="custom-control-input" value="1">
                                <label for="status_0" class="custom-control-label">Aktif</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="status" id="status_1" type="radio" class="custom-control-input" value="2">
                                <label for="status_1" class="custom-control-label">Tidak Aktif</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Role</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="role" id="role_0" type="radio" class="custom-control-input" value="administartor">
                                <label for="role_0" class="custom-control-label">Administrator</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="role" id="role_1" type="radio" class="custom-control-input" value="public">
                                <label for="role_1" class="custom-control-label">Public</label>
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