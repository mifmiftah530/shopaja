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
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- carousel bosss -->
    <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- ... (your carousel code) ... -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= base_url('img/slider1.jpeg'); ?>" alt="Fashion Clothing Collection">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url('img/slider2.jpeg'); ?>" alt="Outdoor Adventure Gear">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url('img/slider3.png'); ?>" alt="Electronics and Gadgets">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Terbaru Section -->
                    <div class="card card-primary">
                        <div class="card-header mb-2">
                            <h3 class="card-title">Terbaru</h3>
                        </div>
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="row">
                                    <?php foreach ($barang as $b) :
                                    ?>
                                        <div class="col-sm-4">
                                            <div class="card ml-2 mr-2">
                                                <div class="card-body">
                                                    <img src="barang/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
                                                    <h5 class="card-title mt-2"><b><?= $b['nama_barang']; ?></b></h5>
                                                    <p class="card-text"><small style="color: orange;">Rp. <?= number_format($b['harga'], 0, ',', '.'); ?>,-</small></p>
                                                    <a href="halaman_barang/barang/<?= $b['id_barang']; ?>" class="btn btn-primary">Detail <i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-success">Add <i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-orange">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->