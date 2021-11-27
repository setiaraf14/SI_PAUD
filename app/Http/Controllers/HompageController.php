<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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
                    'message' => "Berhasil membuat akun jurnalis, sekarang coba login dengan akun anda",
                    'style' => "success"
                ]);
        } catch (Exception $e) {
            $message = $e->getMessage();
            return redirect('/')->with([
                'status' => 'danger',
                'message' => $message
            ]);
        }
    }

    public function pendaftaranPaud()
    {
        return view('layout-frontend.page.pendaftaran-paud');
    }
}
