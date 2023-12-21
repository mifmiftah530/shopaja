<?php

namespace App\Controllers;

use App\Models\Barang_Model;
use App\Models\Kategori_Model;

class Barang extends BaseController
{
    protected $Barang_Model;
    protected $Kategori_Model;
    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
        $this->Kategori_Model = new Kategori_Model();
    }
    public function index(): string
    {
        // $barang = $this->Barang_Model->findAll(); //sama dengan select * from barang
        $data = [

            'title' => 'Roda Gila Store',
            'nama' => 'Daftar Barang',
            'barang' => $this->Barang_Model->getBarang()

        ];
        return view('barang', $data);
    }
    public function detail($id_barang)
    {
        $data = [
            'title' => 'Roda Gila Store',
            'nama' => 'Informasi Produk',
            'spek' => 'Spesifikasi Produk',
            'barang' => $this->Barang_Model->getBarang($id_barang)
        ];
        return view('detail', $data);
    }
    public function detailk($id_kategori)
    {
        $data = [
            'title' => 'Roda Gila Store',
            'nama' => 'Daftar Barang',
            'barangk' => $this->Barang_Model->getBarangk($id_kategori)
        ];
        return view('halkategori', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Tambah Data',
            'kat' => $this->Kategori_Model->getAllKategori()
        ];
        return view('tambah_brg', $data);
    }
    public function simpan()
    {
        // Proses penyimpanan data ke database di sini
        $barangModel = new Barang_Model();

        $data = [
            'nama_barang' => $this->request->getPost('nama'),
            'id_kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga'),
            'keterangan' => $this->request->getPost('keterangan'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $barangModel->insert($data);

        // Setelah data disimpan, redirect ke halaman lain atau tampilkan pesan berhasil
        return redirect()->to(base_url('/admin/tambah_barang'))->with('success', 'Data barang berhasil disimpan!');
    }
    public function hapus($id_barang)
    {
        // Lakukan proses penghapusan data dari tabel
        $this->Barang_Model->hapus($id_barang);

        // Redirect setelah penghapusan
        return redirect()->to(base_url('/admin/edit_barang'))->with('success', 'Data barang berhasil dihapus!');
    }
    public function edit($id_barang)
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Tambah Data',
            'kat' => $this->Kategori_Model->getAllKategori(),
            'barang' => $this->Barang_Model->getBarang($id_barang)
        ];
        return view('edit_brg', $data);
    }

    public function editsimpan()
    {
        $barangModel = new Barang_Model();
        $id_barang = $this->request->getPost('id_barang');
        $data = [
            'nama_barang' => $this->request->getPost('nama'),
            'id_kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga'),
            'keterangan' => $this->request->getPost('keterangan'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $barangModel->updateBarang($id_barang, $data);

        return redirect()->to(base_url('/admin/edit_barang'))->with('success', 'Data barang berhasil diupdate!');
    }
}
