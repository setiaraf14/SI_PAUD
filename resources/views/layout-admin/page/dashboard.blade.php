@extends('layout-admin.master-admin')


@section('dashboard', 'active')
@section('title', '| Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('image/ss_paud_2.jpg')}}'); background-size: cover;">
                    <div class="row">
                        <div class="container">
                            <img src="{{ asset('image/logo_bani.png')}}" class="img-circle elevation-2" width="100" alt="User Image" style="width: 20%">
                        </div>
                        <div class="container">
                            <br>
                            <h1 class="" style="color: white"><b>Selamat datang di SI-REGISTRASI</b></h1>
                            <h2 class="" style="color: white"><b>Paud Islam Bani Murida</b></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                    <h3>{{ $countCalonSiswa }}</h3>
                    <p>Calon Siswa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users fa-3x"></i>
                </div>
                {{-- <a href="{{ route('kegiatan.index') }}" class="small-box-footer">olah kegiatan <i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>{{ $countTransaksiPembayaran }}</h3>
                    <p>Transaksi Pembayaran</p>
                </div>
                <div class="icon">
                    <i class="fas fa-id-card fa-3x"></i>
                </div>
                {{-- <a href="{{ route('kegiatan.index') }}" class="small-box-footer">olah kegiatan <i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection