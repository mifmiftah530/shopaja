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
//logi nuser
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
