<?php

namespace App\Controllers;

use App\Models\User_Model;

class User extends BaseController
{
    protected $User_Model;
    public function __construct()
    {
        $this->User_Model = new User_Model();
    }

    public function profil($id_user)
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Edit Profile',
            'user' => $this->User_Model->getUser($id_user)
        ];
        return view('profil', $data);
    }

    public function editsimpan()
    {
        $User_Model = new User_Model();
        $id_user = $this->request->getPost('id_user');
        $data = [
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
        ];

        $User_Model->updateUser($id_user, $data);

        return redirect()->to(base_url("/profil_saya/{$id_user}"))->with('success', 'Data Profil berhasil diupdate!');
    }
    public function alamat($id_user)
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Edit Alamat',
            'user' => $this->User_Model->getUser($id_user)
        ];
        return view('alamat', $data);
    }

    public function alamatsimpan()
    {
        $User_Model = new User_Model();
        $id_user = $this->request->getPost('id_user');
        $data = [
            'alamat' => $this->request->getPost('alamat'),
        ];

        $User_Model->updateUser($id_user, $data);

        return redirect()->to(base_url("/alamat_saya/{$id_user}"))->with('success', 'Data Alamat berhasil diupdate!');
    }
}
