<?php

namespace App\Controllers;

use App\Models\Barang_Model;

class Barang extends BaseController
{
    protected $Barang_Model;
    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
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
}
