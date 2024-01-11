<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembayaran_Model extends Model
{
    protected $table = 'metode_pembayaran';
    protected $primaryKey = 'id_metode';
    protected $allowedFields = ['nama_metode', 'nomor'];
}
