<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CalonSiswa;
use App\JadwalPendaftaran;

class TransaksiPembayaran extends Model
{
    protected $table = 'transaksi_pembayarans';
    protected $guarded = [];

    public function Calon_siswa() 
    {
        return $this->belongsTo(CalonSiswa::class, 'id_calon_siswa', 'id');
    }

    public function jadwal_pendaftaran()
    {   
        return $this->belongsTo(JadwalPendaftaran::class, 'id_pendaftaran', 'id');
    }
}
