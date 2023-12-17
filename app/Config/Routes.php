<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/halaman_barang', 'Barang::index');
$routes->get('/tentang', 'Tentang::index');
$routes->get('/halaman_barang/barang/(:segment)', 'Barang::detail/$1');
$routes->get('/halaman_kategori', 'Kategori::index');
$routes->get('/halaman_kategori/kategori/(:segment)', 'Barang::detailk/$1');
$routes->get('/kontak', 'Pages::kontak');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/edit_barang', 'Admin::edit_barang');
$routes->get('/admin/edit_kategori', 'Admin::edit_kategori');
