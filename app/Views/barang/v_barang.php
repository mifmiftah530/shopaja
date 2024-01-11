<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><?= $nama; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- daftar barang terbaru-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Tampilkan pagination links -->
                    <!-- Debug: Cetak jenis variabel $barang -->

                    <div class="card card-primary">
                        <div class="card-header mb-2">
                            <h3 class="card-title"><?= $nama; ?></h3>
                        </div>
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('success') ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!-- /.card-header -->
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="row mb-0">
                                    <?php foreach ($barang as $b) :
                                    ?>
                                        <div class="col-sm-4">
                                            <div class="card ml-2 mr-2">
                                                <div class="card-body">
                                                    <img src="barang/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
                                                    <h5 class="card-title mt-2"><b><?= $b['nama_barang']; ?></b></h5>
                                                    <p class="card-text"><small style="color: orange;">Rp. <?= number_format($b['harga'], 0, ',', '.'); ?>,-</small></p>
                                                    <a href="halaman_barang/barang/<?= $b['id_barang']; ?>" class="btn btn-primary btn-sm mb-2">
                                                        Detail <i class="fas fa-eye"></i>
                                                    </a>

                                                    <!-- Form untuk menambahkan ke keranjang -->
                                                    <form action="<?= base_url('/tambah-keranjang/' . $b['id_barang']); ?>" method="post">
                                                        <div class="input-group">
                                                            <?php if (session()->has('user_id')) : ?>

                                                                <input type="number" name="jumlah" class="form-control" value="1" min="1">
                                                                <input type="hidden" name="id_barang" value="<?= $b['id_barang']; ?>">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-success btn-sm" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                                                                </div>
                                                            <?php else : ?>

                                                            <?php endif; ?>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach
                                    ?>

                                </div>

                                <div class="pagination">
                                    <ul class="pager">
                                        <?= $pager->links(); ?>
                                    </ul>
                                </div>



                                <style>
                                    /* Gaya Tombol Pagination */
                                    .pagination {
                                        display: flex;
                                        justify-content: center;
                                        margin-bottom: 20px;

                                    }

                                    .pagination .pager {
                                        list-style: none;
                                        display: flex;
                                        padding: 0;
                                        margin: 0;
                                    }

                                    .pagination .pager li {
                                        margin: 0 5px;
                                    }

                                    .pagination .pager li a,
                                    .pagination .pager li span {
                                        padding: 8px 12px;
                                        border: 1px solid #ddd;
                                        color: #fff;
                                        text-decoration: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                    }

                                    .pagination .pager li.active a,
                                    .pagination .pager li.active span {
                                        background-color: orange;
                                        color: #fff;
                                    }
                                </style>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.row -->
</div>
</section>
<!-- /.container-fluid -->

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->