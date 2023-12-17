<footer class="main-footer">
    <!-- Main Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="section-subtitle">Layanan Pelanggan</h4>
                <ul class="footer-menu">
                    <li><a href="#" class="footer-link">Bantuan</a></li>
                    <li><a href="#" class="footer-link">Lacak Pesanan Pembeli</a></li>
                    <li><a href="#" class="footer-link">Lacak Pengiriman Penjual</a></li>
                    <li><a href="#" class="footer-link">Pengembalian Barang & Dana</a></li>
                    <li><a href="#" class="footer-link">Hubungi Kami</a></li>
                </ul>
            </div>

            <div class="col-md-2">
                <h4 class="section-subtitle">Roda Gila</h4>
                <ul class="footer-menu">
                    <li><a href="#" class="footer-link">Tentang Kami</a></li>
                    <li><a href="#" class="footer-link">Karir</a></li>
                    <li><a href="#" class="footer-link">Kebijakan Roda Gila</a></li>
                    <li><a href="#" class="footer-link">Kebijakan Privasi</a></li>
                    <li><a href="#" class="footer-link">Blog</a></li>
                </ul>
            </div>
            <style>
                .about-section {
                    padding: 20px;
                }

                .section-title {
                    color: orange;
                    font-size: 24px;
                    font-weight: bold;
                }

                .section-subtitle {
                    color: orange;
                    font-size: 20px;
                    font-weight: bold;
                }

                .section-divider {
                    border-top: 2px solid orange;
                    margin-top: 20px;
                    margin-bottom: 20px;
                }

                .mission-list,
                .contact-list {
                    list-style: none;
                    padding: 0;
                }

                .mission-list li,
                .contact-list li {
                    display: flex;
                    align-items: center;
                    margin-bottom: 10px;
                }

                .mission-list i,
                .contact-list i {
                    margin-right: 10px;
                    color: orange;
                    font-size: 18px;
                }

                .contact-list i {
                    margin-right: 8px;
                    font-size: 16px;
                }

                .footer-menu {
                    list-style-type: none;
                    padding: 0;
                }

                .footer-link {
                    display: block;
                    color: white;
                    /* Ganti dengan warna yang diinginkan */
                    text-decoration: none;
                    margin-bottom: 8px;
                    /* Jarak antar tautan */
                    transition: color 0.3s ease-in-out;
                }

                .footer-link:hover {
                    color: #007bff;
                    /* Ganti dengan warna hover yang diinginkan */
                }
            </style>

            <div class="col-md-2">
                <h4 class="section-subtitle">Pembayaran</h4>
                <ul class="footer-menu">
                    <li><a href="#" class="footer-link">Metode Pembayaran</a></li>
                    <li><a href="#" class="footer-link">Kode Promo</a></li>
                    <li><a href="#" class="footer-link">Koin Berkah</a></li>
                </ul>
            </div>

            <div class="col-md-2">
                <h4 class="section-subtitle">Ikuti Kami</h4>
                <ul class="social-media-icons">
                    <li><a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook"></i> Roda Gila Store</a></li>
                    <li><a href="#" target="_blank" class="social-icon"><i class="fab fa-instagram"></i> Roda Gila Store</a></li>
                    <li><a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i> Roda Gila Store</a></li>
                    <li><a href="#" target="_blank" class="social-icon"><i class="fab fa-linkedin"></i> Roda Gila Store</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="section-subtitle">Download Aplikasi</h4>
                <ul class="footer-menu list-unstyled text-center d-flex align-items-center">
                    <li>
                        <img src="<?= base_url('img/qr.png'); ?>" alt="QR Code" style="width: 150px;">
                    </li>
                </ul>
            </div>



            <style>
                .social-media-icons {
                    list-style-type: none;
                    padding: 0;
                }

                .social-icon {
                    display: block;
                    color: white;
                    /* Ganti dengan warna yang diinginkan */
                    text-decoration: none;
                    margin-bottom: 10px;
                    /* Jarak antar ikon */
                    transition: color 0.3s ease-in-out;
                }

                .social-icon:hover {
                    color: #007bff;
                    /* Ganti dengan warna hover yang diinginkan */
                }
            </style>
        </div>

    </div>
    <strong>Copyright &copy; 2023-2024 <a href="/"><?= $title; ?></a>.</strong>
    Hak Cipta Dilindungi.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('tmp/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('tmp/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('tmp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('tmp/dist/js/adminlte.js'); ?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('tmp/plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/raphael/raphael.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('tmp/plugins/chart.js/Chart.min.js'); ?>"></script>

<!-- Bootstrap JS from CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="tmp/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('tmp/dist/js/pages/dashboard2.js'); ?>"></script>

</body>

</html>