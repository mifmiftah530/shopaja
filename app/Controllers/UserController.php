<?php

namespace App\Controllers;

use App\Models\User_Model;

class UserController extends BaseController
{
    protected $User_Model;
    public function __construct()
    {
        $this->User_Model = new User_Model();
    }
    public function index()
    {
        return view('loginuser');
    }
    public function login()
    {
        $model = new User_Model();

        // Ambil data dari form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Validasi form secara manual
        if (empty($username) || empty($password)) {
            // Jika validasi gagal, kembalikan ke halaman login
            return redirect()->to('/admin')->withInput()->with('error', 'Harap isi semua field');
        }

        // Cari admin berdasarkan username
        $user = $model->where('username', $username)->first();

        if (!$user || $user['password'] !== md5($password)) {
            // Jika admin tidak ditemukan atau password tidak sesuai, kembali ke halaman login
            return redirect()->to('/login/user')->withInput()->with('error', 'Username atau password salah');
        }

        // Set session admin
        $session = session();
        $session->set('user_id', $user['id_user']);
        $session->set('user_username', $user['username']);

        // Redirect ke halaman admin yang diinginkan
        return redirect()->to('/');
    }
    // app/Controllers/UserController.php
    public function logout()
    {
        $session = session();

        if ($session->has('user_id') && $session->has('user_username')) {
            $session->remove(['user_id', 'user_username']);
            // Redirect ke halaman login
            return redirect()->to('/');
        } else {
            // Sesi tidak ada, mungkin sudah logout sebelumnya
            // Redirect ke halaman login
            return redirect()->to('/login/user');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function processRegister()
    {
        $model = new User_Model();

        // Ambil data dari form
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')), // Gantilah dengan metode keamanan yang lebih baik jika memungkinkan
            'nama'     => $this->request->getVar('nama'),
            'email'    => $this->request->getVar('email'),
            // Tambahkan kolom-kolom lain sesuai kebutuhan
        ];

        // Simpan data ke database
        $model->insert($data);

        // Redirect ke halaman login atau halaman lain yang sesuai
        return redirect()->to('/login/user')->with('success', 'Registrasi berhasil. Silakan login.');
    }
    public function gantipw($id_user)
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Ganti Password',
            'user' => $this->User_Model->getUser($id_user)
        ];
        return view('gantipw', $data);
    }

    public function gpw()
    {
        $userModel = new User_Model();
        $id_user = $this->request->getVar('id_user');
        $passwordLama = $this->request->getVar('password_lama');
        $newPassword = $this->request->getVar('password');

        // Ambil password lama dari database
        $userData = $userModel->getUser($id_user);
        $currentPassword = $userData['password'];

        // Periksa apakah password lama sesuai dengan yang ada di database
        if ($currentPassword !== md5($passwordLama)) {
            return redirect()->to(base_url("/gantipw/{$id_user}"))->with('error', 'Password lama tidak valid.');
        }

        // Periksa apakah password lama sama dengan password baru
        if (md5($newPassword) === $currentPassword) {
            return redirect()->to(base_url("/gantipw/{$id_user}"))->with('error', 'Password baru harus berbeda dengan password lama.');
        }
        // Update password baru
        $userModel->updatePassword($id_user, $newPassword);

        return redirect()->to(base_url("/gantipw/{$id_user}"))->with('success', 'Password berhasil diupdate.');
    }
}
