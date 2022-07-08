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
                            <h3 class="card-title">Kelola User</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a class="btn btn-outline-success fas fa-edit" href="<?php echo base_url('index.php/users/create') ?>" role="button"> Tambah User</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th>NO</th> -->
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Last Login</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $nomor = 1;
                                    foreach ($list_users as $users) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $users->id ?>
                                            </td>
                                            <td>
                                                <?= $users->username ?>
                                            </td>
                                            <td>
                                                <?= $users->email ?>
                                            </td>
                                            <td>
                                                <?= $users->created_at ?>
                                            </td>
                                            <td>
                                                <?= $users->last_login ?>
                                            </td>
                                            <td>
                                                <?= $users->status ?>
                                            </td>
                                            <td>
                                                <?= $users->role ?>
                                            </td>
                                            <td>
                                                <a class=" btn-secondary btn-xs " href="<?php echo base_url('index.php/users/view?id='. $users->id)?>" role="button">View</a>|
                                                <a class=" btn-primary btn-xs " href="<?php echo base_url('index.php/users/edit?id='. $users->id)?>" role="button">Edit</a>|
                                                <a class=" btn-danger btn-xs " href="<?php echo base_url('index.php/users/delete?id='. $users->id)?>" onclick="if(!confirm('Anda yakin akan menghapus User <?= $users->username ?> dengan ID <?= $users->id ?> ?')) {return false}" role="button">Delete</a>|

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