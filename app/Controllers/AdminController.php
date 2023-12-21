<?php

namespace App\Controllers;

use App\Models\Admin_Model;

class AdminController extends BaseController
{
    public function index()
    {
        return view('loginadmin');
    }
    public function login()
    {
        $model = new Admin_Model();

        // Ambil data dari form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Validasi form secara manual
        if (empty($username) || empty($password)) {
            // Jika validasi gagal, kembalikan ke halaman login
            return redirect()->to('/admin')->withInput()->with('error', 'Harap isi semua field');
        }

        // Cari admin berdasarkan username
        $admin = $model->where('username', $username)->first();

        if (!$admin || $admin['password'] !== md5($password)) {
            // Jika admin tidak ditemukan atau password tidak sesuai, kembali ke halaman login
            return redirect()->to('/')->withInput()->with('error', 'Username atau password salah');
        }

        // Set session admin
        $session = session();
        $session->set('admin_id', $admin['id_admin']);
        $session->set('admin_username', $admin['username']);

        // Redirect ke halaman admin yang diinginkan
        return redirect()->to('/admin');
    }
    public function logout()
    {
        $session = session();

        if ($session->has('admin_id') || $session->has('admin_username')) {
            $session->remove(['admin_id', 'admin_username']);
            // Redirect ke halaman login
            return redirect()->to('/');
        } else {
            // Sesi tidak ada, mungkin sudah logout sebelumnya
            // Redirect ke halaman login
            return redirect()->to('/');
        }
    }
}
