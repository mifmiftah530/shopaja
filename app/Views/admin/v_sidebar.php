<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-orange">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-orange">
        <img src="<?= base_url('tmp/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b><?= $title; ?></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('tmp/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php $session = session();
                    // Mendapatkan nama user dari sesi
                    $username = $session->get('admin_username');
                    $id_admin = $session->get('admin_id');
                    echo $username;
                    ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>
                            Kelola Barang
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/tambah_barang" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/edit_barang" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Edit Barang</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Kelola Kategori
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/tambah_kategori" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/edit_kategori" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Edit Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Kelola Pesanan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/status" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Update Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/laporan" class="nav-link">
                                <i class="fas fa-print nav-icon"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/alogout" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>Log Out</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>