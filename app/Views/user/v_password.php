<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header"></div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header mb-2">
                                <h3 class="card-title">Ganti Password</h3>
                            </div>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->get('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->get('error') ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Ganti Password</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('process-gantipw') ?>" method="post">
                                            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                                            <div class="row mb-3">
                                                <label for="password_lama" class="col-sm-2 col-form-label">Password Saat Ini</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password_lama" name="password_lama" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="password" class="col-sm-2 col-form-label">Password Baru</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password" name="password" required minlength="4">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Ganti Password</button>
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