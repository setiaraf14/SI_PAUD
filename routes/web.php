<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('layout-admin.master-admin');
});

Route::get('/example-page', function () {
    return view('layout-admin.example-page-content');
});

Route::get('/front', function () {
    return view('layout-frontend.master');
});

Route::group(['prefix' => 'pendaftaran'], function () {
    Route::get('/', 'HompageController@pendaftaranIndex');
    Route::post('/store/{id}', 'HompageController@storeCalonSiswa');
    Route::get('/list-calon-siswa', 'HompageController@listCalonSiswa');
});

Route::group(['prefix' => 'pembayaran'], function () {
    Route::post('/store', 'HompageController@storePembayaran');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register-wali', 'HompageController@registerWali');
Route::get('/', 'HompageController@homepage');

Route::group(['prefix' => 'backend'], function() {
    Route::get('/', 'DashboardBackendController@index');
    
    Route::group(['prefix' => 'jadwal-pendaftaran'], function() {
        Route::get('/', 'JadwalPendaftaranController@index');
        Route::post('/store-jadwal', 'JadwalPendaftaranController@storePendaftaran');
        Route::post('/update-jadwal/{id}', 'JadwalPendaftaranController@updateJadwal');
        Route::get('/hapus-jadwal/{id}', 'JadwalPendaftaranController@hapusJadwal');
    });
});
