<?php

namespace App\Controllers;

use App\Models\Kategori_Model;

class Kategori extends BaseController
{
    protected $Kategori_Model;
    public function __construct()
    {
        $this->Kategori_Model = new Kategori_Model();
    }
    public function index(): string
    {
        // $barang = $this->Barang_Model->findAll(); //sama dengan select * from barang
        $data = [
            'title' => 'Roda Gila Store',
            'nama' => 'Daftar Kategori',
            'barang' => $this->Kategori_Model->getKategori()

        ];
        return view('kategori', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Tambah Data',
        ];
        return view('tambah_kat', $data);
    }
    public function simpan()
    {
        // Proses penyimpanan data ke database di sini


        $data = [
            'nama_kategori' => $this->request->getPost('nama'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $this->Kategori_Model->insert($data);

        // Setelah data disimpan, redirect ke halaman lain atau tampilkan pesan berhasil
        return redirect()->to(base_url('/admin/tambah_kategori'))->with('success', 'Data kategori berhasil disimpan!');
    }
    public function hapus($id_kategori)
    {
        // Lakukan proses penghapusan data dari tabel
        $this->Kategori_Model->hapus($id_kategori);
        return redirect()->to(base_url('/admin/edit_kategori'))->with('success', 'Data kategori berhasil dihapus!');
    }
    public function edit($id_kategori)
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Tambah Data',
            'kategori' => $this->Kategori_Model->getKategori($id_kategori)
        ];
        return view('edit_kat', $data);
    }

    public function editsimpan()
    {
        $katModel = new Kategori_Model();
        $id_kategori = $this->request->getPost('id_kategori');
        $data = [
            'nama_kategori' => $this->request->getPost('nama'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $katModel->updateKategori($id_kategori, $data);

        return redirect()->to(base_url('/admin/edit_kategori'))->with('success', 'Data kategori berhasil diupdate!');
    }
}
