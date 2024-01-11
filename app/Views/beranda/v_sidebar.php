<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-orange">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-orange">
        <img src="<?= base_url('tmp/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b><?= $title;
                                                        ?></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php if (session()->has('user_id')) : ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url('tmp/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        <?php $session = session();
                        // Mendapatkan nama user dari sesi
                        $username = $session->get('user_username');
                        $id_user = $session->get('user_id');
                        echo $username;
                        ?> </a>
                </div>
            </div>
        <?php else : ?>

        <?php endif; ?>


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
                <?php if (session()->has('user_id')) : ?>
                    <!-- Jika sudah login -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/profil_saya/<?= $id_user; ?>" class="nav-link">
                                    <i class="fas fa-edit nav-icon"></i>
                                    <p>Profile Saya</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/alamat_saya/<?= $id_user; ?>" class="nav-link">
                                    <i class="fas fa-city nav-icon"></i>
                                    <p>Alamat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/gantipw/<?= $id_user; ?>" class="nav-link">
                                    <i class="fas fa-wrench nav-icon"></i>
                                    <p>Kelola Akun</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                    <!-- Jika belum login -->

                <?php endif; ?>

                <?php if (session()->has('user_id')) : ?>
                    <!-- Jika sudah login -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Keranjang
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-grey">
                            <li class="nav-item">
                                <a href="/keranjang/<?= $id_user; ?>" class="nav-link">
                                    <i class="fas fa-shopping-cart nav-icon"></i>
                                    <p>Keranjang Saya</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/bayar/<?= $id_user; ?>" class="nav-link">
                                    <i class="fas fa-money-check nav-icon"></i>
                                    <p>Bayar Sekarang</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/diterima/<?= $id_user; ?>" class="nav-link">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Selesai Dikirim</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                    <!-- Jika belum login -->

                <?php endif; ?>

                <li class="nav-item">
                    <a href="/tentang" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Tentang
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <?php if (session()->has('user_id')) : ?>
                    <!-- Jika sudah login -->
                    <li class="nav-item">
                        <a href="/ulogout" class="nav-link">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                <?php else : ?>
                    <!-- Jika belum login -->
                    <li class="nav-item">
                        <a href="/login/user" class="nav-link">
                            <i class="nav-icon fas fa-lock"></i>
                            <p>
                                Login
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>