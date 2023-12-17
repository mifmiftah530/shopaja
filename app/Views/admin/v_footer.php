<footer class="main-footer">
    <!-- Main Footer -->
    <strong>Copyright &copy; 2023-2024 <a href="/"><?= $title; ?></a>.</strong>
    Hak Cipta Dilindungi.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>
</div>
<!-- ./wrapper -->
</div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url('tmp/plugins/datatables/datatables.min.css'); ?>">
<!-- DataTables Buttons CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url('tmp/plugins/datatables-buttons/buttons.dataTables.min.css'); ?>">
<!-- DataTables JavaScript -->
<script src="<?= base_url('tmp/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<!-- DataTables Buttons JavaScript -->
<script src="<?= base_url('tmp/plugins/datatables-buttons/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/datatables-buttons/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/datatables-buttons/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('tmp/plugins/datatables-buttons/buttons.print.min.js'); ?>"></script>
<!-- Skrip Inisialisasi DataTable -->
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            dom: 'lBfrtip',
            buttons: [{
                    extend: 'copy',
                    text: 'Copy',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    text: 'CSV',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'print',
                    text: 'Print',
                    exportOptions: {
                        columns: ':visible',
                        modifier: {
                            page: 'all' // Menambahkan opsi untuk mencetak semua halaman
                        }
                    }
                }

            ]
        });

        $('.dt-button').css({
            'background-color': '#3498db', // Ganti dengan warna yang Anda inginkan
            'color': '#ffffff' // Ganti dengan warna teks yang Anda inginkan
        });
    });
</script>
<style>
    /* Gaya untuk elemen pencarian */
    .dataTables_filter input {
        background-color: #3498db;
        color: #ffffff;
        border-color: #2980b9;
        margin-right: 10px;
        /* Ganti dengan ukuran margin kanan yang Anda inginkan */
        margin-left: 10px;
        /* Ganti dengan ukuran margin kiri yang Anda inginkan */
    }

    /* Gaya untuk tombol pencarian */
    .dataTables_filter label input {
        background-color: #3498db;
        color: #ffffff;
        border-color: #2980b9;
        margin-right: 10px;
        /* Ganti dengan ukuran margin kanan yang Anda inginkan */
        margin-left: 10px;
        /* Ganti dengan ukuran margin kiri yang Anda inginkan */
    }

    /* Gaya untuk elemen pencarian */
    .dataTables_filter input {
        /* Ganti dengan warna latar belakang yang Anda inginkan */
        background-color: #3498db;
        /* Ganti dengan warna teks yang Anda inginkan */
        color: #ffffff;
        /* Ganti dengan warna border yang Anda inginkan */
        border-color: #2980b9;
    }

    /* Gaya untuk "Show [X] entries" */
    .dataTables_length label {
        color: #ffffff;
        /* Ganti dengan warna teks yang Anda inginkan */
        margin-right: 10px;
        /* Ganti dengan ukuran margin kanan yang Anda inginkan */
        margin-left: 10px;
        /* Ganti dengan ukuran margin kiri yang Anda inginkan */
    }

    /* Gaya untuk "Search:" */
    .dataTables_filter label {
        color: #ffffff;
        /* Ganti dengan warna teks yang Anda inginkan */
        margin-right: 10px;
        /* Ganti dengan ukuran margin kanan yang Anda inginkan */
        margin-left: 10px;
        /* Ganti dengan ukuran margin kiri yang Anda inginkan */
    }

    .dataTables_info {
        font-size: 14px;
        /* Ukuran font */
        color: #ffffff;
        /* Warna teks */
        margin-top: 10px;
        /* Jarak atas */
        margin-bottom: 10px;
        /* Jarak bawah */
        font-style: italic;
        /* Gaya font (misalnya, miring) */
    }
</style>











<!-- Bootstrap JS from CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="tmp/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('tmp/dist/js/pages/dashboard2.js'); ?>"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<!-- DataTables Buttons CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!-- DataTables Buttons JavaScript -->
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

</body>

</html>