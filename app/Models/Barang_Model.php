<?php

namespace APP\Models;

use CodeIgniter\Model;

class Barang_Model extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";

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
}
