<?php

namespace APP\Models;

use CodeIgniter\Model;

class Kategori_Model extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id_kategori";

    public function getKategori($id_kategori = false)
    {
        if ($id_kategori == false) {
            return $this->findAll();
        }
        return $this->where(['id_kategori' => $id_kategori])->first();
    }
    public function getKat($id_kategori = false)
    {
        return $this->findAll();
    }
}
