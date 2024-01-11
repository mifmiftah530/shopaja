<?php

namespace App\Models;

use CodeIgniter\Model;

class Keranjang_Model extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang';
    protected $allowedFields = ['id_user', 'id_barang', 'jumlah'];

    // Fungsi untuk mendapatkan keranjang berdasarkan id_user dan id_barang
    public function getKeranjangItem($id_user, $id_barang)
    {
        return $this->where(['id_user' => $id_user, 'id_barang' => $id_barang])->first();
    }

    // Fungsi untuk menambahkan item ke keranjang atau mengupdate jumlah jika sudah ada
    public function tambahKeKeranjang($data)
    {
        $existingItem = $this->getKeranjangItem($data['id_user'], $data['id_barang']);

        if ($existingItem) {
            // Jika item sudah ada, update jumlah
            $newJumlah = $existingItem['jumlah'] + $data['jumlah'];
            $this->update($existingItem['id_keranjang'], ['jumlah' => $newJumlah]);
        } else {
            // Jika item belum ada, tambahkan baru
            $this->insert($data);
        }
    }

    // Fungsi untuk menghapus item dari keranjang
    public function hapusDariKeranjang($id_keranjang)
    {
        $this->delete($id_keranjang);
    }

    public function update_jumlah($id_keranjang, $jumlah)
    {
        $data = [
            'jumlah' => $jumlah,
        ];

        $this->update($id_keranjang, $data);
    }
}
