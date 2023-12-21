<?php

namespace APP\Models;

use CodeIgniter\Model;

class Kategori_Model extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id_kategori";
    protected $allowedFields = ['nama_kategori', 'gambar'];

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
    // Kategori_Model.php

    public function getAllKategori()
    {
        return $this->findAll();
    }
    public function hapus($id_kategori)
    {
        return $this->delete(['id_kategori' => $id_kategori]);
    }
    public function updateKategori($id_kategori, $data)
    {
        $result = $this->update($id_kategori, $data);

        if (!$result) {
            $error = $this->db->error();
            // Tampilkan informasi kesalahan
            dd($error);
        }

        return $result;
    }
}
