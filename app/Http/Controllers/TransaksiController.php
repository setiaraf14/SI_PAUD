<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiPembayaran;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = TransaksiPembayaran::with(['Calon_siswa', 'jadwal_pendaftaran'])->orderBy('id', 'desc')->get();
        return view('layout-admin.page.transaksi.index', compact('transaksi'));
    }

    public function konfirmasi($id)
    {
        $transaksi = TransaksiPembayaran::with(['Calon_siswa'])->where('id', $id)->first();
        $transaksi->status_pembayaran = 'Pembayaran-Terkonfirmasi';
        $transaksi->invoice = "YB".date('Y-m-d')."-".$id;
        $transaksi->save();
        return redirect()->back()->with([
            'message' => "Berhasil konfirmasi Pembayaran",
            'style' => "success"
        ]);
    }

    public function reject($id)
    {
        $transaksi = TransaksiPembayaran::with([])->where('id', $id)->first();
        $transaksi->status_pembayaran = 'Pembayaran-Direject';
        $transaksi->save();
        return redirect()->back()->with([
            'message' => "Berhasil reject Pembayaran",
            'style' => "success"
        ]);
    }
}
