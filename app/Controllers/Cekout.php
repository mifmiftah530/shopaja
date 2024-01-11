<?php

namespace App\Controllers;

use App\Models\Barang_Model;
use App\Models\Pembayaran_Model;
use App\Models\User_Model;
use App\Models\Keranjang_Model;
use App\Models\Pengiriman_Model;
use App\Models\Transaksi_Model;

class Cekout extends BaseController
{
    protected $Barang_Model;
    protected $Pembayaran_Model;
    protected $Pengiriman_Model;
    protected $User_Model;
    protected $Keranjang_Model;
    protected $Transaksi_Model;
    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
        $this->Pembayaran_Model = new Pembayaran_Model();
        $this->User_Model = new User_Model();
        $this->Keranjang_Model = new Keranjang_Model();
        $this->Pengiriman_Model = new Pengiriman_Model();
        $this->Transaksi_Model = new Transaksi_Model();
    }

    public function index($id_user)
    {
        $keranjangData = $this->Keranjang_Model->where('id_user', $id_user)->findAll();

        // Mendapatkan data barang berdasarkan id_barang di setiap item keranjang
        $data['keranjang'] = [];
        foreach ($keranjangData as $item) {
            $barangData = $this->Barang_Model->find($item['id_barang']);

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

        $data['title'] = 'Roda Gila Store';
        $data['metode_pembayaran'] = $this->Pembayaran_Model->findAll();
        $data['metode_pengiriman'] = $this->Pengiriman_Model->findAll();
        $data['totalHarga'] = $this->calculateTotalHarga($data['keranjang']);

        // Mendapatkan data user untuk menampilkan nama dan alamat
        $userData = $this->User_Model->find($id_user);
        $data['user'] = [
            'nama' => $userData['nama'],
            'alamat' => $userData['alamat'],
            'no_hp' => $userData['no_hp'],
        ];

        return view('cekout', $data);
    }

    private function calculateTotalHarga($keranjang)
    {
        $totalHarga = 0;
        foreach ($keranjang as $item) {
            $totalItem = $item['harga'] * $item['jumlah'];
            $totalHarga += $totalItem;
        }

        return $totalHarga;
    }

    private function getDataKeranjang($id_user)
    {
        $keranjangData = $this->Keranjang_Model->where('id_user', $id_user)->findAll();
        $dataKeranjang = [];

        foreach ($keranjangData as $item) {
            $barangData = $this->Barang_Model->find($item['id_barang']);

            $dataKeranjang[] = [
                'id_keranjang' => $item['id_keranjang'],
                'id_barang' => $item['id_barang'],
                'nama_barang' => $barangData['nama_barang'],
                'jumlah' => $item['jumlah'],
                'stok' => $barangData['stok'],
                'harga' => $barangData['harga'],
                'gambar' => $barangData['gambar'],
            ];
        }

        return $dataKeranjang;
    }

    //  Contoh fungsi di dalam kontroler Checkout
    public function proses_pesanan()
    {
        // Ambil data dari formulir
        $metode_pembayaran = $this->request->getVar('metode_pembayaran');
        $metode_pengiriman = $this->request->getVar('metode_pengiriman');
        $id_user = session()->get('user_id');
        $dataKeranjang = $this->getDataKeranjang($id_user);
        $total = $this->calculateTotalHarga($dataKeranjang);

        // ...

        // Data yang akan disimpan ke dalam tabel transaksi
        $data_transaksi = [
            'id_user' => $id_user,
            'tgl_transaksi' => date('Y-m-d H:i:s'),
            'total_harga' => $total,
            'id_metode' => $metode_pembayaran,
            'id_pengiriman' => $metode_pengiriman,
        ];

        // Simpan data transaksi ke dalam database
        $this->Transaksi_Model->insert($data_transaksi);
        $this->updateStokBarang($dataKeranjang);

        //hapus keranjang
        // Hapus data keranjang setelah checkout
        $this->Keranjang_Model->where('id_user', $id_user)->delete();

        return redirect()->to(base_url('/bayar/' . $id_user));
    }
    //update stok
    private function updateStokBarang($dataKeranjang)
    {
        foreach ($dataKeranjang as $item) {
            $id_barang = $item['id_barang'];
            $jumlah = $item['jumlah'];

            // Ambil stok saat ini dari database
            $stok_sekarang = $this->Barang_Model->find($id_barang)['stok'];

            // Hitung stok baru
            $stok_baru = $stok_sekarang - $jumlah;

            // Perbarui stok barang di database
            $this->Barang_Model->update($id_barang, ['stok' => $stok_baru]);
        }
    }
}
