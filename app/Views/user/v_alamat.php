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
                                <h3 class="card-title">Alamat Saya</h3>
                            </div>
                            <?php if (session()->get('success')) :
                            ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->get('success')
                                    ?>
                                </div>
                            <?php endif;
                            ?>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Alamat</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('/profil/alamatsimpan') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label for="alamat" class="form-label">Alamat Saya</label>
                                                <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $user['alamat']; ?></textarea>
                                            </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
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