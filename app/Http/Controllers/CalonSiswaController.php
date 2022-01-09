<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalonSiswa;

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
}
