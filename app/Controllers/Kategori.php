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
}
