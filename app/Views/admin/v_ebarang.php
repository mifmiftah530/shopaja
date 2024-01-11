<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header mb-2">
                                <h3 class="card-title">Edit Barang</h3>
                            </div>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success') ?>
                                </div>
                            <?php endif; ?>

                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Form Edit Barang</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('/barang/editsimpan/') ?>" method="post" enctype="multipart/form-data">



                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama_barang']; ?>" autofocus>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                                <div class="col-sm-10">
                                                    <select name="kategori" id="kategori" class="form-control">
                                                        <?php foreach ($kat as $k) : ?>
                                                            <option value="<?= $k['id_kategori']; ?>" <?= ($k['id_kategori'] == $barang['id_kategori']) ? 'selected' : ''; ?>>
                                                                <?= $k['nama_kategori']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="keterangan" class="col-sm-2 col-form-label">Deskripsi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $barang['keterangan']; ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang['stok']; ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $barang['gambar']; ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="wa" class="col-sm-2 col-form-label">No Whatsapp</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="wa" name="wa" value="<?= $barang['wa']; ?>">
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">

                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>