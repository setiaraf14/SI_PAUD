@extends('layout-admin.master-admin')

@section('bootstrap')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('transaksi', 'active')
@section('title', '| Transaksi')

@section('judul')
    <h1>Tabel Data </h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Data Transaksi</h3>
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
                                        <th>Event Pendaftaran</th>
                                        <th>Nama Calon Siswa</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Invoice</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transaksi as $bayar)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $bayar->jadwal_pendaftaran->judul_pendaftaran }}</td>
                                            <td>{{ $bayar->calon_siswa->nama }}</td>
                                            <td>{{ $bayar->tgl_byr }}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#pembayaran{{ $loop->iteration }}" class="btn btn-info">Lihat Struk</a>
                                            </td>
                                            <td>{{ $bayar->invoice }}</td>
                                            <td>{{ $bayar->status_pembayaran }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ url('/backend/transaksi/konfrim/'.$bayar->id) }}" class="btn btn-warning m-1">Konfirm</a>
                                                    <a href="{{ url('/backend/transaksi/reject/'.$bayar->id) }}" class="btn btn-success m-1">Reject</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="pembayaran{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="pembayaran{{ $loop->iteration }}Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="pembayaran{{ $loop->iteration }}Label">File Pembayaran {{ $bayar->calon_siswa->nama }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{Storage::url($bayar->file_pembayaran)}}" class="img-fluid" alt="" width="300">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
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