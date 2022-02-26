@extends('layout-admin.master-admin')

@section('bootstrap')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('calon-siswa', 'active')
@section('title', '| Calon Siswa')

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
                        <a href="{{ url('/backend/calon-siswa/export-excel') }}" class="btn btn-success">Export Excel</a>
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
                            <table id="tabel-data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>NIK</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Agama</th>
                                        <th>Tinggal Bersama</th>
                                        <th>Usia</th>
                                        <th>Pendaftaran</th>
                                        <th>Wali Pendaftar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($calonSiswa as $calon)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $calon->nama}}</td>
                                            <td>{{ $calon->jenis_kelamin }}</td>
                                            <td>{{ $calon->nik }}</td>
                                            <td>{{ $calon->ttl }}</td>
                                            <td>{{ $calon->agama }}</td>
                                            <td>{{ $calon->tinggal_bersama }}</td>
                                            <td>{{ $calon->usia }}</td>
                                            <td>{{ $calon->pendaftaran->judul_pendaftaran }}</td>
                                            <td>{{ $calon->wali->name }}</td>
                                            <td><a href="{{ url('/backend/calon-siswa/berkas/'.$calon->id) }}" class="btn btn-primary">Tampilkan Berkas</a></td>
                                        </tr>
                                    @empty
                                        
                                    @endforelse
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