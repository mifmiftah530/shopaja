<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php if (empty($keranjang)) : ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url('img/keranjang.png'); ?>" style="width: 300px;" class="card-img-top" alt="Keranjang Kosong">
                                    <div class="card-body">
                                        <p style="color: orange;"><b>KERANJANG BELANJA KOSONG</b></p>
                                        <p class="card-text"><i>Oops! Keranjang belanja Anda masih kosong. Silakan tambahkan produk ke dalam keranjang untuk melanjutkan belanja.</i></p>
                                        <a href="<?= base_url('/'); ?>" class="btn btn-primary">Belanja Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <form action="<?= base_url('checkout/proses_pesanan'); ?>" method="post">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Informasi Saya</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <i style="color: orange;"><strong>Penting !!!</strong></i><br><i> Silahkan Lengkapi Data Anda Jika Belum Lengkap Dihalaman Profil !!! , Kami selaku Owner Tidak Bertanggung Jawab Atas Kesalahan Pengiriman Dikarenakan Ketidak Lengkapan Data Diri Anda.</i><br>
                                                    <p>Salam Pinjol : Roda Gila Store Lamongan</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label style="color: orange;" for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?= esc($user['nama']); ?>" class="form-control" id="alamat" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label style="color: orange;" for="hp" class="col-sm-2 col-form-label">No Telepon</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?= esc($user['no_hp']); ?>" class="form-control" id="hp" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label style="color: orange;" for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10" readonly><?= esc($user['alamat']); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Detail Pesanan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <table class="table table-striped" style="border: none;">
                                                <thead>
                                                    <tr style="color: orange;">
                                                        <th>Gambar</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Kuantitas</th>
                                                        <th>Total Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($keranjang as $item) : ?>
                                                        <tr>
                                                            <td> <img src="/barang/<?= $item['gambar']; ?>" class="img-fluid rounded" alt="Product Image" style="width: 50px;"></td>
                                                            <td><?= $item['nama_barang']; ?></td>
                                                            <td>Rp. <?= number_format($item['harga'], 0, ',', '.'); ?>,-</td>
                                                            <td><?= $item['jumlah']; ?></td>
                                                            <td>Rp. <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.'); ?>,-</td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                            <p class="text-right" style="color: orange;">
                                                <strong>Total Harga: Rp. <?= number_format($totalHarga, 0, ',', '.'); ?>,-</strong>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label style="color: orange;" for="metode_pembayaran">Pilih Metode Pembayaran</label>
                                                <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                                                    <?php foreach ($metode_pembayaran as $metode) : ?>
                                                        <option value="<?= $metode['id_metode']; ?>"><?= $metode['nama_metode']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label style="color: orange;" for="metode_pembayaran">Pilih Metode Pengiriman</label>
                                                <select class="form-control" id="metode_pengiriman" name="metode_pengiriman" required>
                                                    <?php foreach ($metode_pengiriman as $metode) : ?>
                                                        <option value="<?= $metode['id_pengiriman']; ?>"><?= $metode['nama_metode']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success">Buat Pesanan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>