<?php
if ($this->session->userdata('ROLE') == 'administrator') {
?>
<!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('index.php/front') ?>" class="brand-link">
                <img src="https://cdn-icons-png.flaticon.com/512/2037/2037690.png" alt="WEB EO | SI08 Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">WEB EO | SI08</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://png.pngtree.com/png-vector/20190307/ourlarge/pngtree-vector-administration-icon-png-image_755744.jpg" class="img-circle elevation-2" alt="Admin Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php
                            if ($this->session->has_userdata('USER')) {
                                echo $this->session->userdata('USERNAME');
                                echo ' - '. $this->session->userdata('ROLE');
                            }

                            ?>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-calendar-alt"></i>                            
                                <p>
                                    Kegiatan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('index.php/kegiatan')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelola Kegiatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('index.php/jenis_kegiatan')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Kegiatan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('index.php/daftar')?>" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Kelola Pendaftaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <!-- <i class="fa-regular fa-users"></i> -->
                                <p>
                                    Users
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('index.php/users')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelola Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('index.php/kategori_peserta')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori Peserta</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <?php

}
?>