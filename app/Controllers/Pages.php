<?php

namespace App\Controllers;

use App\Models\Barang_Model;

class Pages extends BaseController
{
    protected $Barang_Model;
    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
    }
    public function index(): string
    {
        $barang = $this->Barang_Model->findAll(); //sama dengan select * from barang
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Roda Gila',
            'barang' => $barang

        ];

        return view('beranda', $data);
    }
    public function kontak(): string
    {

        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Roda Gila'

        ];

        return view('kontak', $data);
    }
}
