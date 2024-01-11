<?php

namespace App\Controllers;

use App\Models\Keranjang_Model;
use App\Models\Barang_Model;
use CodeIgniter\Controller;

class Keranjang extends Controller
{
    protected $keranjangModel;
    public function __construct()
    {
        $this->keranjangModel = new Keranjang_Model();
    }
    public function index($id_user)
    {
        $keranjangModel = new Keranjang_Model();
        $barangModel = new Barang_Model();

        // Mendapatkan data keranjang berdasarkan id_user
        $keranjangData = $keranjangModel->where('id_user', $id_user)->findAll();

        // Mendapatkan data barang berdasarkan id_barang di setiap item keranjang
        $data['keranjang'] = [];
        foreach ($keranjangData as $item) {
            $barangData = $barangModel->find($item['id_barang']);


            $data['keranjang'][] = [
                'id_keranjang' => $item['id_keranjang'],
                'id_barang' => $item['id_barang'],
                'nama_barang' => $barangData['nama_barang'],
                'jumlah' => $item['jumlah'],
                'stok' => $barangData['stok'],
                'harga' => $barangData['harga'],
                'gambar' => $barangData['gambar'],
            ];
        }

        // Menambahkan variabel title dengan isi "hai"
        $data['title'] = 'Roda Gila Store';

        // Memuat view
        return view('keranjangsaya', $data);
    }
}
