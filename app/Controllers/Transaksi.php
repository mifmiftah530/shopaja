<?php

namespace App\Controllers;

use App\Models\Transaksi_Model;

class Transaksi extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new Transaksi_Model();
    }

    public function index($id_user)
    {
        // Mendapatkan data transaksi dengan status belum bayar
        $data['transaksi'] = $this->transaksiModel->bayar($id_user);

        $data['title'] = 'Roda Gila Lamongan';

        // Tampilkan data
        return view('bayar', $data);
    }

    public function konfirmasiPembayaran()
    {
        // Ambil data dari formulir

        $gambar = $this->request->getFile('bukti_pembayaran');
        $id_t = $this->request->getVar('id_transaksi');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $id_user = session()->get('user_id');
            // Pindahkan file ke direktori yang diinginkan
            $uploadPath = './bukti/'; // Ganti dengan path yang sesuai
            $gambar->move($uploadPath);


            // Update data di tabel transaksi (contoh: kolom bukti_pembayaran)
            $this->transaksiModel->updateBuktiPembayaran($id_t, $gambar->getName());
            return redirect()->to('/bayar/' . $id_user); // Redirect ke halaman utama atau halaman konfirmasi pembayaran sukses
        }
    }
    public function selesai($id_user)
    {
        // Mendapatkan data transaksi dengan status belum bayar
        $data['transaksi'] = $this->transaksiModel->selesaikirim($id_user);

        $data['title'] = 'Roda Gila Lamongan';

        // Tampilkan data
        return view('selesai', $data);
    }
    public function pesananditerima()
    {
        // Ambil data dari formulir

        $id_t = $this->request->getVar('id_transaksi');
        $id_st = $this->request->getVar('id_status');
        $id_user = session()->get('user_id');
        // Update data di tabel transaksi (contoh: kolom bukti_pembayaran)
        $this->transaksiModel->pesananditerima($id_t, $id_st);
        return redirect()->to('/diterima/' . $id_user); // Redirect ke halaman utama atau halaman konfirmasi pembayaran sukses

    }
    public function status()
    {
        // Mendapatkan data transaksi dengan status belum bayar
        $data['transaksi'] = $this->transaksiModel->status();
        $data['title'] = 'Roda Gila Lamongan';
        // Tampilkan data
        return view('status', $data);
    }

    public function konfirmasi($id_transaksi)
    {
        $id_st = $this->request->getPost('st');
        // Update data di tabel transaksi (contoh: kolom bukti_pembayaran)
        $this->transaksiModel->pesananditerima($id_transaksi, $id_st);
        return redirect()->to('/admin/status'); // Redirect ke halaman utama atau halaman konfirmasi pembayaran sukses

    }

    public function laporan()
    {
        // Mendapatkan data transaksi dengan status belum bayar
        $data['transaksi'] = $this->transaksiModel->laporan();
        $data['title'] = 'Roda Gila Lamongan';
        // Tampilkan data
        return view('laporan', $data);
    }
}
