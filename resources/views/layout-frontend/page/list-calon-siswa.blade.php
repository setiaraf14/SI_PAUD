@extends('layout-frontend.master')

@section('content')
    <div class="container">
		 <h2 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"><b>Pembayaran Registrasi</b></h2>
         <br><br>
         <div class="row">
             <div class="col-lg-12">
                @if(session('message'))
                    <div class="alert alert-{{ session('style') }}" id="alert-notification">
                        <div class="row">
                            <div class="col-md-11">
                                <h5>{{ session('message') }}</h5>
                            </div>
                            <div class="col-md-1 text-right">
                                <span id="close-notification">&times;</span>
                            </div>
                        </div>
                    </div>
                @endif
             </div>
         </div>
         <div class="row">
            <div class="col-md-5 abt-pic">
                <img src="{{ asset('template-frontend/images/paud-content.jpg') }}" style="width: 100%" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-7 abt-info-pic">
                <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:#095a59;"><b>Cara Pembayaran</b></h3>
                <ul>
                    <li><h4>Tranfer Biaya pembayaran Rp 120.000, ke Rekening <b style="color: blue; font-weight:bold;">BCA : 5930751474 (Yayasan Islam Bani Murida)</h4></b></li>
                    <li><h4>Simpan bukti transfer, kemudian</h4></li>
                    <li><h4>Upload bukti transfer sesuai dengan kolom calon siswa yang ingin di daftarkan</h4></li>
                </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <br><br><br>
         <div class="row formulir">
             <div class="col-md-12 abt-info-pic">
                 <div class="d-flex justify-content-center">
                    <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:#095a59;"><b>Calon siswa</b></h3>
                 </div>
                <br><br>
                <div class="row">
                    @foreach ($calonSiswa as $siswa)
                        <div class="col-lg-6">
                            <div class="card my-2">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="{{Storage::url($siswa->pas_foto)}}" class="img-fluid" alt="" width="150">
                                    </div>
                                    <div class="col">
                                        <div class="px-2">
                                            <h4 class="card-title">{{ $siswa->nama }}</h4>
                                            <p class="card-text">Nik : {{ $siswa->nik }}</p>
                                            @if($siswa->transaksi->isEmpty())
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#pembayaran{{ $loop->iteration }}">Lakukan Pembayaran</a>
                                            @else
                                                @if ($siswa->transaksi[0]->status_pembayaran == "Pembayaran-Terkonfirmasi")
                                                    <span class="bg-success">Pembayaran terkonfirmasi anak anda telah terdaftar sebagai peserta didik</span>
                                                    <br>
                                                    <a href="{{ url('/pdf-invoice/'.$siswa->transaksi[0]->id) }}" class="btn btn-warning">Download Bukti Pembayaran Invoice</a>
                                                @elseif ($siswa->transaksi[0]->status_pembayaran == "Pembayaran-Direject")
                                                    <span class="bg-danger">Pembayaran tidak diterima</span>
                                                    <br>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#pembayaran{{ $loop->iteration }}">Lakukan Pembayaran</a>
                                                @else
                                                    <span class="bg-success">Tunggu Konfirmasi</span> 
                                                @endif
                                            @endif    
                                                <!-- Modal -->
                                                <div class="modal fade" id="pembayaran{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="pembayaran{{ $loop->iteration }}Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pembayaran{{ $loop->iteration }}Label">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('pembayaran/store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12">
                                                                    <input type="hidden" value="{{ $siswa->id_pendaftaran }}" name="id_pendaftaran">
                                                                    <input type="hidden" value="{{ $siswa->id }}" name="id_calon_siswa">
                                                                    <label for="file_pembayaran">Upload bukti Pembayaran</label>
                                                                    <input type="file" class="form-control" id="file_pembayaran" name="file_pembayaran" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12">
                                                                     <button type="submit" class="btn btn-success form-control">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
             </div>
         </div>
         <br>


         
	 </div>
@endsection
