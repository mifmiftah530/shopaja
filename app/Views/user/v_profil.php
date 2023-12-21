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
                                <h3 class="card-title">Profil Saya</h3>
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
                                        <h3 class="card-title">Edit Profil</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('/profil/editsimpan') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama Saya</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?= $user['nama']; ?>" class="form-control" id="nama" name="nama">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="username" class="col-sm-2 col-form-label">Username Saya</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?= $user['username']; ?>" class="form-control" id="username" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-2 col-form-label">Email Saya</label>
                                                <div class="col-sm-10">
                                                    <input type="email" value="<?= $user['email']; ?>" class="form-control" id="email" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-10">
                                                    <input type="date" value="<?= $user['tgl_lahir']; ?>" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="no_hp" class="col-sm-2 col-form-label">No Handphone</label>
                                                <div class="col-sm-10">
                                                    <input type="number" value="<?= $user['no_hp']; ?>" class="form-control" id="no_hp" name="no_hp">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal Gabung</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?= $user['tgl']; ?>" class="form-control" id="tgl" readonly>
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