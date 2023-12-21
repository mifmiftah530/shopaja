<?php

namespace APP\Models;

use CodeIgniter\Model;

class Barang_Model extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ['nama_barang', 'id_kategori', 'harga', 'keterangan', 'stok', 'gambar', 'tgl', 'wa'];

    public function getBarang($id_barang = false)
    {
        if ($id_barang == false) {
            return $this->findAll();
        }
        return $this->where(['id_barang' => $id_barang])->first();
    }
    public function getBarangk($id_kategori = null)
    {
        if ($id_kategori === null) {
            return $this->findAll();
        }
        return $this->where(['id_kategori' => $id_kategori])->findAll();
    }
    public function hapus($id_barang)
    {
        return $this->delete(['id_barang' => $id_barang]);
    }
    public function updateBarang($id_barang, $data)
    {
        $result = $this->update($id_barang, $data);

        if (!$result) {
            $error = $this->db->error();
            // Tampilkan informasi kesalahan
            dd($error);
        }

        return $result;
    }
}
