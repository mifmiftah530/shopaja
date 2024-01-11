<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Keranjang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <?php $session = session();
    // Mendapatkan nama user dari sesi
    $username = $session->get('user_username');
    $id_user = $session->get('user_id');
    ?>

    <!-- Main content -->
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
                        <div class="card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <a href="/checkout/<?= $id_user; ?>" class="btn btn-success">Checkout</a>
                                    <p class="text-white bg-primary p-2 mt-3">Total semua <span id="totalHarga">Rp. 0,-</span></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        $totalHarga = 0;
                        foreach ($keranjang as $item) :
                            $totalItem = $item['harga'] * $item['jumlah'];
                            $totalHarga += $totalItem;
                        ?>
                            <div class="card card-primary mb-4">
                                <!-- Tubuh Kartu -->
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th style="color: orange; width: 200px;">Gambar</th>
                                                <th style="color: orange; width: 400px;">Nama Barang</th>
                                                <th style="color: orange; width: 300px;">Harga Satuan</th>
                                                <th style="color: orange; width: 300px;">Kuantitas</th>
                                                <th style="color: orange; width: 300px;">Total Harga</th>
                                                <th style="color: orange; width: 300px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form action="<?= base_url('keranjang/update_jumlah'); ?>" method="post">
                                                <tr>
                                                    <td>
                                                        <img src="/barang/<?= $item['gambar']; ?>" class="img-fluid rounded" alt="Product Image" style="width: 100%;">
                                                    </td>
                                                    <td>
                                                        <h5 class="card-title"><b><?= $item['nama_barang']; ?></b></h5>
                                                    </td>
                                                    <td>Rp. <?= number_format($item['harga'], 0, ',', '.'); ?>,-</td>
                                                    <td>
                                                        <div class="input-group" style="width: 150px;">
                                                            <input type="hidden" name="id_keranjang" value="<?= $item['id_keranjang']; ?>">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-outline-secondary" onclick="decrementValue(this)">-</button>
                                                            </div>
                                                            <input type="number" name="jumlah" value="<?= $item['jumlah']; ?>" min="1" class="form-control">
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-outline-secondary" onclick="incrementValue(this)">+</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Rp. <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.'); ?>,-</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <a href="<?= base_url('keranjang/delete/' . $item['id_keranjang']); ?>" class="btn btn-danger" onclick="return confirmDelete()">Delete</a>

                                                    </td>
                                                </tr>
                                            </form>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        <?php endforeach; ?>
                        <script>
                            document.getElementById('totalHarga').textContent = 'Rp. ' + formatRupiah(<?= $totalHarga ?>);

                            function formatRupiah(angka) {
                                var number_string = angka.toString();
                                var split = number_string.split(',');
                                var sisa = split[0].length % 3;
                                var rupiah = split[0].substr(0, sisa);
                                var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                if (ribuan) {
                                    separator = sisa ? '.' : '';
                                    rupiah += separator + ribuan.join('.');
                                }

                                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                return rupiah;
                            }
                        </script>
                    <?php endif; ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script>
    function incrementValue(element) {
        // Dapatkan elemen input terkait
        var inputElement = element.parentNode.previousElementSibling;

        // Tambahkan nilai jika kurang dari nilai maksimum
        if (parseInt(inputElement.value, 10) < 100) {
            inputElement.value = parseInt(inputElement.value, 10) + 1;
        }
    }

    function decrementValue(element) {
        // Dapatkan elemen input terkait
        var inputElement = element.parentNode.nextElementSibling;

        // Kurangkan nilai jika lebih dari 1
        if (parseInt(inputElement.value, 10) > 1) {
            inputElement.value = parseInt(inputElement.value, 10) - 1;
        }
    }

    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus item ini?');
    }
</script>