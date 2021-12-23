@extends('layout-admin.master-admin')

@section('bootstrap')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('jadwal-pendaftaran', 'active')
@section('title', '| Jadwal Pendaftaran')

@section('judul')
    <h1>Tabel Data </h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Data Jadwal Pendaftaran</h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Input Jadwal Pendaftaran
                        </button>

                        {{-- modal-input-surat-masuk --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Input Index Surat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/backend/jadwal-pendaftaran/store-jadwal') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-lg-12 form-group">
                                                <label for="judul_pendaftaran">Judul Pendaftaran</label>
                                                <input type="text" name="judul_pendaftaran" class="form-control @error('judul_pendaftaran') ins-invalid @enderror"  value="{{ old('judul_pendaftaran')}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="tgl_mulai">Tanggal mulai</label>
                                                <input type="date" name="tgl_mulai" class="form-control @error('tgl_mulai') ins-invalid @enderror"  value="{{ old('tgl_mulai')}}" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="tgl_akhir">Tanggal tutup</label>
                                                <input type="date" name="tgl_akhir" class="form-control @error('tgl_akhir') ins-invalid @enderror"  value="{{ old('tgl_tutup')}}" required>
                                            </div>                                    
                                        </div>        
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </form> 
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>

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
                            <table id="tabel-data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Pendaftaran</th>
                                        <th>Tanggal Buka Pendaftaran</th>
                                        <th>Tanggal Tutup Pendaftaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($jadwalPendaftaran as $jadwal)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jadwal->judul_pendaftaran }}</td>
                                            <td>{{ $jadwal->tgl_mulai }}</td>
                                            <td>{{ $jadwal->tgl_akhir }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ url('/backend/jadwal-pendaftaran/hapus-jadwal/'.$jadwal->id) }}" class="btn btn-danger m-2">Hapus</a>
                                                
                                                    <a class="btn btn-warning m-2" data-toggle="modal" data-target="#editJadwal{{ $loop->iteration }}">
                                                    Edit
                                                    </a>
                                                    <div class="modal fade" id="editJadwal{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="editJadwal{{ $loop->iteration }}Label" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="editJadwal{{ $loop->iteration }}Label">Input Index Surat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('/backend/jadwal-pendaftaran/update-jadwal/'.$jadwal->id) }}" method="POST">
                                                                @csrf
                                                                <div class="form-row">
                                                                    <div class="col-lg-12 form-group">
                                                                        <label for="judul_pendaftaran">Judul Pendaftaran</label>
                                                                        <input type="text" name="judul_pendaftaran" class="form-control @error('judul_pendaftaran') ins-invalid @enderror"  value="{{ $jadwal->judul_pendaftaran }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="tgl_mulai">Tanggal mulai</label>
                                                                        <input type="date" name="tgl_mulai" class="form-control @error('tgl_mulai') ins-invalid @enderror"  value="{{ $jadwal->tgl_mulai }}" required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <label for="tgl_akhir">Tanggal tutup</label>
                                                                        <input type="date" name="tgl_akhir" class="form-control @error('tgl_akhir') ins-invalid @enderror"  value="{{ $jadwal->tgl_akhir }}" required>
                                                                    </div>                                    
                                                                </div>        
                                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                            </form> 
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
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