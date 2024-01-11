<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengiriman_Model extends Model
{
    protected $table = 'metode_pengiriman';
    protected $primaryKey = 'id_pengiriman';
    protected $allowedFields = ['nama_metode'];
}
