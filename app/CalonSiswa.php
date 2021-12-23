<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JadwalPendaftaran;
use App\TransaksiPembayaran;

class CalonSiswa extends Model
{
    protected $table = "calon_siswas";
    protected $guarded = [];

    public function pendaftaran()
    {
        return $this->belongsTo(JadwalPendaftaran::class, 'id_pendaftaran', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiPembayaran::class, 'id_calon_siswa', 'id');
    }
}