@extends('layout-admin.master-admin')

@section('bootstrap')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('calon-siswa', 'active')
@section('title', '| Berkas')

@section('judul')
    <h1>Tabel Data </h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Data Calon Siswa</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title Berkas</th>
                                        <th>Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pas Foto</td>
                                        <td><img src="{{Storage::url($calonSiswa->pas_foto)}}" class="img-fluid" alt="" width="150"></td>
                                    </tr>
                                    <tr>
                                        <td>Akta Kelahiran</td>
                                        <td><img src="{{Storage::url($calonSiswa->fp_akta_lahir)}}" class="img-fluid" alt="" width="600" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>KTP Orang Tua</td>
                                        <td><img src="{{Storage::url($calonSiswa->fp_ktp_ortu)}}" class="img-fluid" alt="" width="400" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>Kartu Keluarga</td>
                                        <td><img src="{{Storage::url($calonSiswa->fp_kk)}}" class="img-fluid" alt="" width="900" alt=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>   
            </div>
        </div>
    </div>
    @section('data-table')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#tabel-data').DataTable();
            });
        </script>
    @endsection 
        <script>
            CKEDITOR.replace( 'summary_ekskul' );
        </script>
@endsection