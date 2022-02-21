<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiPembayaran;
use App\CalonSiswa;

class DashboardBackendController extends Controller
{
    public function index()
    {
        $countTransaksiPembayaran = TransaksiPembayaran::with([])->count();
        $countCalonSiswa = CalonSiswa::with([])->count();
        return view('layout-admin.page.dashboard', compact('countTransaksiPembayaran', 'countCalonSiswa'));
    }
}
