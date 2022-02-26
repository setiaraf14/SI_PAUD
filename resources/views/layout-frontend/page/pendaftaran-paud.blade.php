@extends('layout-frontend.master')

@section('content')
    <div class="container">
		 <h2 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"><b>Pendaftaran Paud</b></h2>
         <br><br>
         <div class="row">
            <div class="col-md-5 abt-pic">
                <img src="{{ asset('template-frontend/images/paud-content.jpg') }}" style="width: 100%" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-7 abt-info-pic">
                <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:#095a59;"><b>Ketentuan</b></h3>
                <p>Anak yang akan didaftarkan paling rendah berusia 5 tahun dan paling tinggi berusia 6 tahun pada tanggal 1 Juli tahun berjalan untuk kelompok B. Anak yang akan didaftarkan memiliki akta kelahiran. Ada KTP orang tua. Ada kartu keluarga yang berisi nama anak tersebut.</p>
                <p>Adapun persyaratan yang diperlukan untuk di upload berupa</p>
                <ul>
                    <li>Fotocopy akta kelahiran</li>
                    <li>Fotocopy kartu keluarga</li>
                    <li>Fotocopy salah satu orang tua kandung</li>
                    <li>Pas foto anak yang di daftarkan dengan ukuran 3X4</li>
                </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <br><br><br>
         <div class="row formulir">
             <div class="col-md-12 abt-info-pic">
                 <div class="d-flex justify-content-center">
                    <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:#095a59;"><b>Formulir Pendaftaran</b></h3>
                 </div>
                <br><br>
             </div>
         </div>
         <br>
         <div class="row form-pendaftaran">
             <div class="col-lg-12 abt-info-pic">
                <div class="d-flex justify-content-center">
                    <form action="{{ url('/pendaftaran/store/'.$jadwal->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for=""><h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:#095a59;">Data calon perserta didik</h3></label>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama"  name="nama" placeholder="Masukan nama" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nik">NIK</label>
                          <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK" required>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="ttl">Tempat, tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" id="ttl" placeholder="Contoh: Tangerang, 25 Juli 2017" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tinggal_bersama">Tinggal Bersama</label>
                                <select name="tinggal_bersama" id="tinggal_bersama" class="form-control">
                                    <option value="Orang-Tua-sendiri">Orang tua sendiri</option>
                                    <option value="wali">Orang tua wali</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="usia">Usia</label>
                                <input type="number" name="usia" id="usia" class="form-control" placeholder="Masukan usia" required>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="fp_akta_lahir">FP Akta Kelahiran</label>
                              <input type="file" name="fp_akta_lahir"  id="fp_akta_lahir" class="form-control"  required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="pas_foto">Pas foto 3x4</label>
                            <input type="file" name="pas_foto" id="pas_foto" class="form-control"  required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="fp_ktp_ortu">FP KTP Orang Tua</label>
                              <input type="file" name="fp_ktp_ortu"  id="akta_lahir" class="form-control"  required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="fp_kk">FP KK</label>
                            <input type="file" name="fp_kk" id="fp_kk" class="form-control"  required>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
             </div>
         </div>
	 </div>
@endsection
