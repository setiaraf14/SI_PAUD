<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalPendaftaran;

class JadwalPendaftaranController extends Controller
{
    public function index()
    {
        $jadwalPendaftaran = JadwalPendaftaran::with([])->orderBy('id', 'desc')->get();
        return view('layout-admin.page.jadwal-pendaftaran.index', compact('jadwalPendaftaran'));
    }

    public function storePendaftaran(Request $request) 
    {
        $jadwalPendaftaran = new JadwalPendaftaran();
        $jadwalPendaftaran->judul_pendaftaran = $request->judul_pendaftaran;
        $jadwalPendaftaran->tgl_mulai = $request->tgl_mulai;
        $jadwalPendaftaran->tgl_akhir = $request->tgl_akhir;
        $jadwalPendaftaran->save();

        return redirect()->back()->with([
            'message' => "Berhasil membuat jadwal pendaftaran",
            'style' => "success"
        ]);
    }

    public function hapusJadwal(Request $request, $id = null)
    {
        $jadwal = JadwalPendaftaran::with([])->where('id', $id)->first();
        $jadwal->delete();

        return redirect()->back()->with([
            'message' => "Berhasil hapus jadwal pendaftaran",
            'style' => "success"
        ]);
    }

    public function updateJadwal(Request $request, $id=null)
    {
        $jadwalPendaftaran = JadwalPendaftaran::with([])->where('id', $id)->first();
        $jadwalPendaftaran->judul_pendaftaran = $request->judul_pendaftaran;
        $jadwalPendaftaran->tgl_mulai = $request->tgl_mulai;
        $jadwalPendaftaran->tgl_akhir = $request->tgl_akhir;
        $jadwalPendaftaran->save();

        return redirect()->back()->with([
            'message' => "Berhasil update jadwal pendaftaran",
            'style' => "success"
        ]);
    }
}
