<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi_Model extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_user', 'tgl_transaksi', 'total_harga', 'id_metode', 'id_pengiriman', 'id_status', 'bukti_pembayaran'];

    public function bayar($id_user)
    {
        return $this->select('transaksi.*,status.keterangan ,user.no_hp, metode_pembayaran.nomor,metode_pembayaran.nama_metode, metode_pengiriman.nama_metode AS nama_pengiriman, user.alamat')
            ->where('transaksi.id_user', $id_user)
            ->join('status', 'status.id_status = transaksi.id_status')
            ->join('metode_pembayaran', 'metode_pembayaran.id_metode = transaksi.id_metode')
            ->join('metode_pengiriman', 'metode_pengiriman.id_pengiriman = transaksi.id_pengiriman')
            ->join('user', 'user.id_user = transaksi.id_user')
            ->where('transaksi.id_status !=', 4) // tidak menampilkan 4
            ->findAll();
    }
    public function updateBuktiPembayaran($idTransaksi, $buktiPembayaran)
    {
        $this->update($idTransaksi, ['bukti_pembayaran' => $buktiPembayaran]);
    }

    public function selesaikirim($id_user)
    {
        return $this->select('transaksi.*,status.id_status,status.keterangan ,user.no_hp, metode_pembayaran.nomor,metode_pembayaran.nama_metode, metode_pengiriman.nama_metode AS nama_pengiriman, user.alamat')
            ->where('transaksi.id_user', $id_user)
            ->join('status', 'status.id_status = transaksi.id_status')
            ->join('metode_pembayaran', 'metode_pembayaran.id_metode = transaksi.id_metode')
            ->join('metode_pengiriman', 'metode_pengiriman.id_pengiriman = transaksi.id_pengiriman')
            ->join('user', 'user.id_user = transaksi.id_user')
            ->where('transaksi.id_status', 4) //berdasarkan id 4
            ->findAll();
    }
    public function pesananditerima($idTransaksi, $id_st)
    {
        $this->update($idTransaksi, ['id_status' => $id_st]);
    }

    public function status()
    {
        return $this->select('transaksi.*,transaksi.id_transaksi,transaksi.id_status,status.id_status,user.username,status.keterangan ,user.no_hp, metode_pembayaran.nomor,metode_pembayaran.nama_metode, metode_pengiriman.nama_metode AS nama_pengiriman, user.alamat')
            ->join('status', 'status.id_status = transaksi.id_status')
            ->join('metode_pembayaran', 'metode_pembayaran.id_metode = transaksi.id_metode')
            ->join('metode_pengiriman', 'metode_pengiriman.id_pengiriman = transaksi.id_pengiriman')
            ->join('user', 'user.id_user = transaksi.id_user')
            ->where('transaksi.id_status !=', 4) // tidak menampilkan 4
            ->findAll();
    }

    public function konfirmasi($id_t, $id_st)
    {
        $this->update($id_t, ['id_status' => $id_st]);
    }

    public function laporan()
    {
        return $this->select('transaksi.*,transaksi.id_transaksi,transaksi.id_status,status.id_status,user.username,status.keterangan ,user.no_hp, metode_pembayaran.nomor,metode_pembayaran.nama_metode, metode_pengiriman.nama_metode AS nama_pengiriman, user.alamat')
            ->join('status', 'status.id_status = transaksi.id_status')
            ->join('metode_pembayaran', 'metode_pembayaran.id_metode = transaksi.id_metode')
            ->join('metode_pengiriman', 'metode_pengiriman.id_pengiriman = transaksi.id_pengiriman')
            ->join('user', 'user.id_user = transaksi.id_user')
            ->findAll();
    }
}
