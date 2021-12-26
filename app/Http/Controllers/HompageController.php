<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
use App\JadwalPendaftaran;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\TransaksiPembayaran;
use PDF;

class HompageController extends Controller
{
    public function homepage()
    {
        return view('layout-frontend.page.homepage');
    }

    public function registerWali(Request $request) 
    {
        try {
            Validator::make($request->all(),[
                'name' => 'required|string|max:255',
                'telepon'  => 'required',
                'alamat' => 'required',
                'email' => 'required|string|email|max:255',
                'password' => ''
            ])->validate();
    
                $user = new User();
                $user->name = $request->name;
                $user->user_role = "Wali-murid";
                $user->telepon = $request->telepon;
                $user->alamat = $request->alamat;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);            
                $user->save();
                
                return redirect('/')->with([
                    'message' => "Berhasil membuat akun orang tua wali, sekarang coba login dengan akun anda",
                    'style' => "success"
                ]);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return redirect('/')->with([
                'status' => 'danger',
                'message' => $message
            ]);
        }
    }

    public function storeCalonSiswa(Request $request, $id=null)
    {
        $calonSiswa = new CalonSiswa();
        $calonSiswa->nama = $request->nama;
        $calonSiswa->jenis_kelamin = $request->jenis_kelamin;
        $calonSiswa->nik = $request->nik;
        $calonSiswa->ttl = $request->ttl;
        $calonSiswa->agama = $request->agama;
        $calonSiswa->tinggal_bersama = $request->tinggal_bersama;
        $calonSiswa->usia = $request->usia;
        $calonSiswa->fp_akta_lahir = $request->file('fp_akta_lahir')->store('asset/aktalahir', 'public');
        $calonSiswa->pas_foto = $request->file('pas_foto')->store('asset/pasfoto', 'public');
        $calonSiswa->fp_ktp_ortu = $request->file('fp_ktp_ortu')->store('asset/fpktportu', 'public');
        $calonSiswa->fp_kk = $request->file('fp_kk')->store('asset/fpkk', 'public');
        $calonSiswa->id_pendaftaran = $id;
        $calonSiswa->user_id = Auth::user()->id;
        $calonSiswa->save();

        return redirect('/pendaftaran/list-calon-siswa')->with([
            'message' => "Calon peserta didik berhasil di daftarkan, sekarang silahkan lakukan pembayaran",
            'style' => "success"
        ]);
    }

    public function pendaftaranIndex()
    {
        $jadwal = JadwalPendaftaran::with([])->latest()->first();
        return view('layout-frontend.page.pendaftaran-paud', compact('jadwal'));
    }

    public function listCalonSiswa()
    {
        $calonSiswa = CalonSiswa::with(['transaksi'])->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('layout-frontend.page.list-calon-siswa', compact('calonSiswa'));
    }

    public function storePembayaran(Request $request)
    {
        $transaksi =  new TransaksiPembayaran();
        $transaksi->id_pendaftaran = $request->id_pendaftaran;
        $transaksi->id_calon_siswa = $request->id_calon_siswa;
        $transaksi->tgl_byr = date('Y-m-d');
        $transaksi->file_pembayaran = $request->file('file_pembayaran')->store('asset/transaksi', 'public');
        $transaksi->save();
        return redirect('/pendaftaran/list-calon-siswa')->with([
            'message' => "Berhasil melakukan pembayaran, tunggu konfirmasi dari admin",
            'style' => "success"
        ]);
    }

    public function pdfInvoice($id)
    {
        $transaksi = TransaksiPembayaran::with(['calon_siswa'])->where('id', $id)->first();
        $pdf = PDF::loadview('layout-frontend.page.pdf-invoice', compact('transaksi'))->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
