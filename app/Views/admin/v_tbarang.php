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
                                <h3 class="card-title">Barang</h3>
                            </div>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success') ?>
                                </div>
                            <?php endif; ?>


                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><?= $logo; ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('/barang/simpan') ?>" method="post">
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" autofocus>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                                <div class="col-sm-10">
                                                    <select name="kategori" id="kategori" class="form-control">
                                                        <option value="1">--- Pilih ---</option>
                                                        <?php foreach ($kat as $k) : ?>
                                                            <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="Harga" name="harga">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="keterangan" class="col-sm-2 col-form-label">Deskripsi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="stok" name="stok">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="gambar" name="gambar">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="wa" class="col-sm-2 col-form-label">No Whatsapp</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="wa" name="wa">
                                                </div>
                                            </div>
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