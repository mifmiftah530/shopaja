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
                                <h3 class="card-title">Pesanan</h3>
                            </div>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->get('success') ?>
                                </div>
                            <?php endif; ?>

                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Kelola Pesanan</h3>
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
                                            <thead>
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
                                                <tr>
                                                    <th>No</th>
                                                    <th>Ussername</th>
                                                    <th>Total Harga</th>
                                                    <th>Pembayaran</th>
                                                    <th>Pengiriman</th>
                                                    <th>Alamat</th>
                                                    <th>Status</th>
                                                    <th>Bukti</th>
                                                </tr>
                                            </thead>
                                            <?php $no = 1; ?>
                                            <?php foreach ($transaksi as $row) : ?>

                                                <tr>
                                                    <td><?= $no++ ?>/<?= $row['id_transaksi']; ?></td>
                                                    <td><?= $row['username']; ?></td>
                                                    <td>Rp. <?= $row['total_harga']; ?></td>
                                                    <td><?= $row['nama_metode']; ?></td>
                                                    <td><?= $row['nama_pengiriman']; ?></td>
                                                    <td><?= $row['alamat']; ?></td>
                                                    <td>
                                                        <small><?= $row['keterangan']; ?></small><br>

                                                    </td>
                                                    <td><img src="/bukti/<?= $row['bukti_pembayaran']; ?>" alt="" width="50px"></td>
                                                </tr>

                                            <?php endforeach; ?>

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