<?php

namespace App\Models;

use CodeIgniter\Model;

class Status_Model extends Model
{
    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $allowedFields = ['keterangan'];

    public function getAll()
    {
        return $this->findAll();
    }
}
