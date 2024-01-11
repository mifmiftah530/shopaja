<?php

namespace App\Controllers;

use App\Models\Barang_Model;
use App\Models\Kategori_Model;
use App\Models\Keranjang_Model;
use CodeIgniter\Files\File;


class Barang extends BaseController
{
    protected $Barang_Model;
    protected $Keranjang_Model;
    protected $Kategori_Model;
    protected $pager;
    public function __construct()
    {
        $this->Barang_Model = new Barang_Model();
        $this->Kategori_Model = new Kategori_Model();
        $this->Keranjang_Model = new Keranjang_Model();
        $this->pager = \Config\Services::pager();
    }
    public function index(): string
    {
        $request = service('request');
        $page = $request->getVar('page') ?? 1;

        $data = [
            'title' => 'Roda Gila Store',
            'nama' => 'Daftar Barang',
            'barang' => $this->Barang_Model->getBarangPaginated($page),
            'pager' => $this->Barang_Model->pager,
        ];

        return view('barang', $data);
    }


    public function detail($id_barang)
    {
        $currentUrl = current_url();
        $data = [
            'title' => 'Roda Gila Store',
            'nama' => 'Informasi Produk',
            'spek' => 'Spesifikasi Produk',
            'url_produk' => $currentUrl,
            'barang' => $this->Barang_Model->getBarang($id_barang)
        ];
        return view('detail', $data);
    }
    public function detailk($id_kategori)
    {
        $data = [
            'title' => 'Roda Gila Store',
            'nama' => 'Daftar Barang',
            'barangk' => $this->Barang_Model->getBarangk($id_kategori)
        ];
        return view('halkategori', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Tambah Data',
            'kat' => $this->Kategori_Model->getAllKategori()
        ];
        return view('tambah_brg', $data);
    }
    public function simpan()
    {
        $barangModel = new Barang_Model();

        // Ambil file gambar dari form
        $gambar = $this->request->getFile('gambar');

        // Cek apakah file berhasil diupload
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            // Pindahkan file ke direktori yang diinginkan
            $uploadPath = './barang/'; // Ganti dengan path yang sesuai
            $gambar->move($uploadPath);

            // Proses penyimpanan data ke database
            $data = [
                'nama_barang' => $this->request->getPost('nama'),
                'id_kategori' => $this->request->getPost('kategori'),
                'harga'       => $this->request->getPost('harga'),
                'keterangan'  => $this->request->getPost('keterangan'),
                'stok'        => $this->request->getPost('stok'),
                'gambar'      => $gambar->getName(), // Ambil nama file setelah diupload
                'wa'          => $this->request->getPost('wa'),
            ];

            $barangModel->insert($data);

            // Setelah data disimpan, redirect ke halaman lain atau tampilkan pesan berhasil
            return redirect()->to(base_url('/admin/tambah_barang'))->with('success', 'Data barang berhasil disimpan!');
        } else {
            // Jika upload gagal, tampilkan pesan error
            $error = $gambar->getErrorString();
            return redirect()->to(base_url('/admin/tambah_barang'))->with('error', $error);
        }
    }


    public function hapus($id_barang)
    {
        // Lakukan proses penghapusan data dari tabel
        $this->Barang_Model->hapus($id_barang);

        // Redirect setelah penghapusan
        return redirect()->to(base_url('/admin/edit_barang'))->with('success', 'Data barang berhasil dihapus!');
    }
    public function edit($id_barang)
    {
        $data = [
            'title' => 'Roda Gila Lamongan',
            'logo' => 'Tambah Data',
            'kat' => $this->Kategori_Model->getAllKategori(),
            'barang' => $this->Barang_Model->getBarang($id_barang)
        ];
        return view('edit_brg', $data);
    }

    public function editsimpan()
    {
        $barangModel = new Barang_Model();
        $gambar = $this->request->getFile('gambar');

        // Cek apakah file berhasil diupload
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            // Pindahkan file ke direktori yang diinginkan
            $uploadPath = './barang/'; // Ganti dengan path yang sesuai
            $gambar->move($uploadPath);

            $id_barang = $this->request->getPost('id_barang');
            $data = [
                'nama_barang' => $this->request->getPost('nama'),
                'id_kategori' => $this->request->getPost('kategori'),
                'harga' => $this->request->getPost('harga'),
                'keterangan' => $this->request->getPost('keterangan'),
                'stok' => $this->request->getPost('stok'),
                'gambar' => $gambar->getName(), // Ambil nama file setelah diupload
                'wa' => $this->request->getPost('wa'),
            ];

            $barangModel->updateBarang($id_barang, $data);

            return redirect()->to(base_url('/admin/edit_barang'))->with('success', 'Data barang berhasil diupdate!');
        } else {
            // Jika upload gagal, tampilkan pesan error
            $error = $gambar->getErrorString();
            return redirect()->to(base_url('/admin/edit_barang'))->with('error', $error);
        }
    }
    public function tambahKeKeranjang($id_barang)
    {
        // Ambil data barang yang akan ditambahkan ke keranjang
        $jumlah = $this->request->getPost('jumlah');

        // Lakukan validasi data sesuai kebutuhan

        // Tambahkan barang ke keranjang (simpan ke tabel keranjang)
        $modelKeranjang = new Keranjang_Model();
        $data = [
            'id_user' => session()->get('user_id'), // Sesuaikan dengan cara Anda menyimpan user_id
            'id_barang' => $id_barang,
            'jumlah' => $jumlah,
        ];
        $modelKeranjang->tambahKeKeranjang($data);

        // Tentukan URL redirect berdasarkan referer
        $referer = $this->request->getServer('HTTP_REFERER');
        $redirectUrl = $referer ? $referer : base_url('/'); // Jika referer tidak ada, redirect ke halaman utama

        return redirect()->to($redirectUrl)->with('success', 'Data barang berhasil ditambahkan ke keranjang!');
    }
    public function update_jumlah()
    {
        $modelKeranjang = new Keranjang_Model();

        // Ambil data dari form
        $id_keranjang = $this->request->getVar('id_keranjang');
        $jumlah = $this->request->getVar('jumlah');

        // Validasi data jika diperlukan

        // Lakukan pembaruan jumlah barang
        $modelKeranjang->update_jumlah($id_keranjang, $jumlah);

        // Ambil id_user dari session atau data lainnya
        $id_user = session()->get('user_id'); // Ganti ini sesuai dengan cara Anda mendapatkan id_user

        // Redirect kembali ke halaman keranjang
        return redirect()->to(site_url('/keranjang/' . $id_user));
    }
    public function hapus_keranjang($id_keranjang)
    {
        $modelKeranjang = new Keranjang_Model();
        // Menghapus item dari keranjang berdasarkan ID
        $modelKeranjang->hapusDariKeranjang($id_keranjang);
        $id_user = session()->get('user_id');

        // Redirect kembali ke halaman keranjang
        return redirect()->to(site_url('/keranjang/' . $id_user));
    }
    public function cari()
    {
        $request = service('request');
        $page = $request->getVar('page') ?? 1;
        $keyword = $this->request->getPost('keyword'); // Sesuaikan dengan nama input form pencarian

        // Panggil fungsi pencarian dari model
        $data['barang'] = $this->Barang_Model->cariBarang($keyword);

        // Peroleh data barang dengan paginasi
        $data['barangPaginated'] = $this->Barang_Model->getBarangPaginated($page);
        $data['pager'] = $this->Barang_Model->pager;
        $data['title'] = 'Roda Gila Lamongan';
        $data['nama'] = 'Daftar Barang';

        // Tampilkan view pencarian
        return view('barang', $data);
    }
}
