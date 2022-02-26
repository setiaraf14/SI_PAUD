<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalonSiswa;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CalonSiswaExport;


class CalonSiswaController extends Controller
{
    public function index()
    {
        $calonSiswa = CalonSiswa::with(['pendaftaran', 'wali'])->orderBy('id', 'desc')->get();
        return view('layout-admin.page.calon-siswa.index', compact('calonSiswa'));
    }

    public function tampilkanBerkas($id)
    {
        $calonSiswa = CalonSiswa::with([])->where('id', $id)->first();
        return view('layout-admin.page.calon-siswa.berkas', compact('calonSiswa'));
    }

    public function exportExcel()
    {
        $transaksi = CalonSiswa::with(['pendaftaran'])->get();
        
        $result = $transaksi->map(function ($item, $key) {

            return [
                'Nama' => $item->nama,
                'Jenis Kelamin' => $item->jenis_kelamin,
                'NIK' => $item->nik,
                'Tempat Tanggal Lahir' => $item->ttl,
                'Agama' => $item->agama,
                'Tinggal Bersama' => $item->tinggal_bersama,
                'Pendaftaran' => $item->pendaftaran->judul_pendaftaran
            ];
        });
         return Excel::download(new CalonSiswaExport($result), 'calon-siswa.xlsx');
    }
}
