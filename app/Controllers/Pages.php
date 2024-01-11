<?php

namespace App\Controllers;

use App\Models\Barang_Model;
use App\Models\Member_Model;


class Pages extends BaseController
{
    protected $Barang_Model;
    protected $pager;

    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
        $this->pager = \Config\Services::pager();
    }

    public function index(): string
    {
        $request = service('request');
        $page = $request->getVar('page') ?? 1;

        $barang = $this->Barang_Model->getBarangPaginated($page);

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
    public function tentang(): string
    {
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Roda Gila'

        ];

        return view('tentang', $data);
    }
    public function register(): string
    {
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Roda Gila'

        ];

        return view('register', $data);
    }
}
