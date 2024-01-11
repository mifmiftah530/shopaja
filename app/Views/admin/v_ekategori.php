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
                                <h3 class="card-title">Edit Kategori</h3>
                            </div>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success')
                                    ?>
                                </div>
                            <?php endif; ?>


                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Form Edit Kategori</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('/kategori/editsimpan') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama Kategori</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?= $kategori['nama_kategori']; ?>" class="form-control" id="nama" name="nama" autofocus>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-10">
                                                    <input type="file" value="<?= $kategori['gambar']; ?>" class="form-control" id="gambar" name="gambar">
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
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