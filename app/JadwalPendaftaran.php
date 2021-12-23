<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CalonSiswa;
use App\TransaksiPembayaran;

class JadwalPendaftaran extends Model
{
    protected $table = 'jadwal_pendaftarans';
    protected $guarded = [];

    public function calonSiswa()
    {
        return $this->hasMany(CalonSiswa::class, 'id_pendaftaran', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiPembayaran::class, 'id_pendaftaran', 'id');
    }
}
