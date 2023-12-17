<?php

namespace App\Controllers;

use App\Models\Barang_Model;
use App\Models\Kategori_Model;

class Admin extends BaseController
{
    protected $Barang_Model;
    protected $Kategori_Model;
    protected $Profil;
    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
        $this->Kategori_Model = new Kategori_Model();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Dashboard Admin'

        ];

        return view('admin', $data);
    }
    public function edit_barang(): string
    {
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Dashboard Admin',
            'barang' => $this->Barang_Model->getBarang()

        ];

        return view('edit_barang', $data);
    }
    public function edit_kategori(): string
    {
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Dashboard Admin',
            'kategori' => $this->Kategori_Model->getkat()

        ];
        return view('edit_kategori', $data);
    }
}
