<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//pages
$routes->get('/', 'Pages::index');
$routes->get('/halaman_barang', 'Barang::index');
$routes->get('/tentang', 'Pages::tentang');
$routes->get('/halaman_barang/barang/(:segment)', 'Barang::detail/$1');
$routes->get('/halaman_kategori', 'Kategori::index');
$routes->get('/halaman_kategori/kategori/(:segment)', 'Barang::detailk/$1');
$routes->get('/kontak', 'Pages::kontak');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/edit_barang', 'Admin::edit_barang');
$routes->get('/admin/edit_kategori', 'Admin::edit_kategori');
$routes->get('/profil_saya', 'Pages::profil');
//tambah barang
$routes->get('/admin/tambah_barang', 'Barang::tambah');
$routes->post('/barang/simpan', 'Barang::simpan');
//tambah kategori
$routes->get('/admin/tambah_kategori', 'Kategori::tambah');
$routes->post('/kategori/simpan', 'Kategori::simpan');
//edit barang
$routes->get('/admin/edit_barang/edit/(:segment)', 'Barang::edit/$1');
$routes->post('/barang/editsimpan', 'Barang::editsimpan');
//edit kategori
$routes->get('/admin/edit_kategori/edit/(:segment)', 'Kategori::edit/$1');
$routes->post('/kategori/editsimpan', 'Kategori::editsimpan');
//hapus barang
$routes->get('/admin/edit_barang/hapus/(:num)', 'Barang::hapus/$1');
//hapus kategori
$routes->get('/admin/edit_kategori/hapus/(:num)', 'Kategori::hapus/$1');
//login admin
$routes->add('/login/admin', 'AdminController::index');
$routes->post('admin/login', 'AdminController::login');
$routes->get('/alogout', 'AdminController::logout');
//login user
$routes->add('/login/user', 'UserController::index');
$routes->post('user/login', 'UserController::login');
$routes->get('/ulogout', 'UserController::logout');
//register user
$routes->get('/register', 'UserController::register');
$routes->post('/register/processRegister', 'UserController::processRegister');
//edit profil
$routes->get('/profil_saya/(:segment)', 'User::profil/$1');
$routes->post('/profil/editsimpan', 'User::editsimpan');
//edit alamat
$routes->get('/alamat_saya/(:segment)', 'User::alamat/$1');
$routes->post('/profil/alamatsimpan', 'User::alamatsimpan');
//ganti pw
$routes->add('/gantipw/(:segment)', 'UserController::gantipw/$1');
$routes->add('/process-gantipw', 'UserController::gpw');
//keranjang
$routes->add('/tambah-keranjang/(:num)', 'Barang::tambahKeKeranjang/$1');
$routes->get('keranjang/(:num)', 'Keranjang::index/$1');
//update data keranjang
$routes->post('keranjang/update_jumlah', 'Barang::update_jumlah');
//hapus keranjang
$routes->get('keranjang/delete/(:num)', 'Barang::hapus_keranjang/$1');
//cekout
$routes->add('checkout/(:num)', 'Cekout::index/$1');
$routes->post('checkout/proses_pesanan', 'Cekout::proses_pesanan');
//
$routes->get('/bayar/(:num)', 'Transaksi::index/$1');
$routes->get('/diterima/(:num)', 'Transaksi::selesai/$1');

$routes->post('/konfirmasi_bayar', 'Transaksi::konfirmasiPembayaran');
$routes->post('/pesananditerima', 'Transaksi::pesananditerima');

$routes->get('/admin/status', 'Transaksi::status');
$routes->post('/konfirmasi/(:num)', 'Transaksi::konfirmasi/$1');

$routes->get('/admin/laporan', 'Transaksi::laporan');
$routes->post('/cari', 'Barang::cari');

$routes->post('/contact', 'Pages::contact');
