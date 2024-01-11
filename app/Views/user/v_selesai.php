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
                        <li class="breadcrumb-item active">Barang Diterima</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php if (empty($transaksi)) : ?>
                        <!-- Tampilkan pesan jika tidak ada transaksi -->
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url('img/keranjang.png'); ?>" style="width: 300px;" class="card-img-top" alt="Keranjang Kosong">
                                    <div class="card-body">
                                        <p style="color: orange;"><b>Belum Ada Pesanan Diterima</b></p>
                                        <p class="card-text"><i>Oops! Pesanan Diterima Anda masih kosong. Silakan Checkout produk untuk melakukan pembayaran.</i></p>
                                        <a href="<?= base_url('/'); ?>" class="btn btn-primary">Beranda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <!-- Tampilkan data transaksi -->
                        <div class="card">
                            <div class="card-body">
                                <div style="min-height: 300px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr style="color: orange;">
                                                <th style="width: 50px;">No</th>
                                                <th style="width: 130px;">Total Bayar</th>
                                                <th style="width: 130px;">Nomor Rekening</th>
                                                <th style="width: 100px;">Metode Pembayaran</th>
                                                <th style="width: 100px;">Metode Pengiriman</th>
                                                <th style="width: 130px;">Alamat Pengiriman</th>
                                                <th style="width: 130px;">No WhatsApp</th>
                                                <th style="width: 130px;">Tanggal Checkout</th>
                                                <th style="width: 50px;">Status</th>
                                                <th style="width: 50px;">Bukti</th>
                                            </tr>
                                        </thead>
                                        <tbody> <?php $no = 1; ?>
                                            <?php foreach ($transaksi as $row) : ?>

                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td>Rp. <?= $row['total_harga']; ?></td>
                                                    <td><?= $row['nomor']; ?></td>
                                                    <td><?= $row['nama_metode']; ?></td>
                                                    <td><?= $row['nama_pengiriman']; ?></td>
                                                    <td><?= $row['alamat']; ?></td>
                                                    <td><?= $row['no_hp']; ?></td>
                                                    <td><?= $row['tgl_transaksi']; ?></td>

                                                    <td><small><?= $row['keterangan']; ?></small></td>
                                                    <td><img src="/bukti/<?= $row['bukti_pembayaran']; ?>" alt="" width="50px"></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>