<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><?= $nama; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?= $nama; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Alert untuk menampilkan pesan -->
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('success') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="row align-items-start">
                                <div class="col-md-4">
                                    <img src="/barang/<?= $barang['gambar']; ?>" class="img-fluid rounded" alt="Product Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 style="color: orange;" class="card-title"><b><?= $barang['nama_barang']; ?></b></h5><br>
                                        <hr style="border-top: 2px solid orange;">

                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td style="color: orange; font-size: 18px; width: 100px;"><i class="fas fa-coins"></i> Harga</td>
                                                    <td style="color: orange; width: 1px;">:</td>
                                                    <td style="font-size: 18px; color: orange;">Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?>,-</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: orange; font-size: 16px;"><i class="fas fa-cubes"></i> Stok</td>
                                                    <td style="color: orange; width: 1px;">:</td>
                                                    <td style="font-size: 16px; color: orange;"><?= $barang['stok']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form action="<?= base_url('/tambah-keranjang/' . $barang['id_barang']); ?>" method="post">

                                            <div class="input-group mb-3">
                                                <?php if (session()->has('user_id')) : ?>
                                                    <input type="number" name="jumlah" class="form-control" value="1" min="1">
                                                    <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="submit">Add <i class="fas fa-shopping-cart"></i></button>
                                                    </div>
                                                <?php else : ?>

                                                <?php endif; ?>
                                            </div>
                                        </form>
                                        <?php $session = session();
                                        // Mendapatkan nama user dari sesi
                                        $username = $session->get('user_username');
                                        $id_user = $session->get('user_id'); ?>

                                        <form action="/sekarang/<?= $id_user; ?>" method="post">

                                        </form>
                                        <a href="https://wa.me/<?= $barang['wa']; ?>?text=<?= urlencode("Halo, saya tertarik dengan produk {$barang['nama_barang']} yang ada di Roda Gila Store. Bisa berikan informasi lebih lanjut? $url_produk"); ?>" class="btn btn-success" target="_blank">
                                            <i class="fab fa-whatsapp"></i> Hubungi
                                        </a>





                                        <p class="card-text"><small class="text-muted">Dibuat Pada <?= $barang['tgl']; ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?= $spek; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row align-items-start">

                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h3 style="color: orange;" class="card-title"><b>Deskripsi Produk</b></h3><br>
                                        <hr style="border-top: 2px solid orange;">
                                        <?php
                                        $deskripsiProduk = $barang['keterangan'];
                                        // Mengganti karakter newline dengan tag HTML <br>
                                        $deskripsiProduk = nl2br($deskripsiProduk);
                                        // Menampilkan deskripsi produk
                                        echo '<small class="card-text product-description">' . $deskripsiProduk . '</small>'; ?>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
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