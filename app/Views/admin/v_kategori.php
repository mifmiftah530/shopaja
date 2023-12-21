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
                                <h3 class="card-title">Kategori</h3>
                            </div>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success') ?>
                                </div>
                            <?php endif; ?>

                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Kategori</h3>
                                    </div>
                                    <div class="card-body">
                                        <style>
                                            /* Warna striped pada tabel */
                                            .table-striped tbody tr:nth-of-type(odd) {
                                                background-color: #5555;
                                                /* Warna abu-abu muda untuk baris ganjil */
                                            }

                                            .table-striped tbody tr:nth-of-type(even) {
                                                background-color: #555;
                                                /* Warna abu-abu untuk baris genap */
                                            }
                                        </style>
                                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                                            <style>
                                                td {
                                                    text-align: center;
                                                    vertical-align: middle;
                                                    border: 1px solid #ddd;
                                                    padding: 8px;
                                                }

                                                tr {
                                                    text-align: center;
                                                    vertical-align: middle;
                                                    border: 1px solid #ddd;
                                                    padding: 8px;
                                                }

                                                img {
                                                    display: block;
                                                    margin-left: auto;
                                                    margin-right: auto;
                                                }
                                            </style>
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px;">Id</th>
                                                    <th>Kategori</th>
                                                    <th>Gambar</th>
                                                    <th style=" width: 50px;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (count($kategori) > 0) : ?>
                                                    <?php foreach ($kategori as $b) : ?>

                                                        <tr>
                                                            <td><small><?= $b['id_kategori']; ?></small></td>
                                                            <td><small><?= $b['nama_kategori']; ?></small></td>
                                                            <td><img style="width: 50px; height: 50px;" src="<?= base_url('kategori/' . $b['gambar']); ?>" alt="Gambar"><br>
                                                                <small><?= $b['gambar']; ?></small>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('/admin/edit_kategori/edit/' . $b['id_kategori']); ?>" class="btn btn-primary" title="Edit Kategori">
                                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                                </a>

                                                                <form action="<?= base_url('/admin/edit_kategori/hapus/' . $b['id_kategori']); ?>" method="get" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                                                    <button type="submit" class="btn btn-danger" title="Hapus Kategori">
                                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                    <?php endforeach ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="9">No matching records found</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <!-- ... your pagination content ... -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-orange">
        <!-- Control sidebar content goes here -->
    </aside>
</div>