<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><?= $nama; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- daftar barang terbaru-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header mb-2">
                            <h3 class="card-title"><?= $nama; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="row">
                                    <?php foreach ($barang as $b) :
                                    ?>
                                        <div class="col-sm-4">
                                            <div class="card ml-2 mr-2">
                                                <div class="card-body">
                                                    <img src="kategori/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
                                                    <div style="text-align: center;">
                                                        <h5 class="card-title mt-2">
                                                            <b><?= $b['nama_kategori']; ?></b>
                                                        </h5>
                                                    </div><br><br>


                                                    <a href="halaman_kategori/kategori/<?= $b['id_kategori']; ?>" class="btn btn-success">Lihat <i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.row -->
</div>
</section>
<!-- /.container-fluid -->

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->