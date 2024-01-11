<?php

namespace App\Models;

use CodeIgniter\Model;

class User_Model extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password', 'nama', 'email', 'no_hp', 'tgl', 'role', 'tgl_lahir', 'alamat'];
    public function getUser($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        }
        return $this->where(['id_user' => $id_user])->first();
    }
    public function updateUser($id_user, $data)
    {
        $result = $this->update($id_user, $data);

        if (!$result) {
            $error = $this->db->error();
            // Tampilkan informasi kesalahan
            dd($error);
        }
        return $result;
    }
    public function updatePassword($id_user, $newPassword)
    {
        $data = [
            'password' => md5($newPassword),
        ];

        $this->update($id_user, $data);
    }
}
