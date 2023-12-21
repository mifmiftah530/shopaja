<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $modelmember = new \App\Models\Member_Model();
        $login = $this->request->getPost("login");
        if ($login) {
            $username = $this->request->getPost("uss");
            $password = $this->request->getPost("pw");

            if ($username == '' or $password == '') {
                $err = 'Silahkan Masukkan Username dan Password';
            }

            if ($err) {
                session()->setFlashdata('error', $err);
                return redirect()->to('login');
            }
        }
        return view("Ladmin");
    }
}
