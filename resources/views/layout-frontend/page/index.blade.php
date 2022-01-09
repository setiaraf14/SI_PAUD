@extends('layout-frontend.master')

@section('title', '| Home')
@section('beranda', 'active')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"><b>Yayasan Bina Murida</b></h2>
                <h1 style="font-family: 'Georgia', serif; font-size:70px;color : #3b8686;">"Sekolah yang bermutu, mencetak generasi berilmu"</h1>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div style="overflow: hidden; padding: 0; max-width: 100%;">
                            <img class="d-block w-100" src="{{ asset('image/ss_paud.jpg')}}" alt="First slide" style="max-height: 450px; display: block; margin: auto;">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div style="overflow: hidden; padding: 0; max-width: 100%;">
                            <img class="d-block w-100" src="{{ asset('image/ss_paud_2.jpg')}}" alt="First slide" style="max-height: 450px; display: block; margin: auto;">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div style="overflow: hidden; padding: 0; max-width: 100%;">
                            <img class="d-block w-100" src="{{ asset('image/ss_paud_3.jpg')}}" alt="First slide" style="max-height: 450px; display: block; margin: auto;">
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card bg-light">
                    <div class="card-body">
                      <h1 class="card-title" style="color: #3b8686">Dibuka Pendaftaran Baru Tahun ajaran 2022 Q1</h1>
                      <h4>Pusing dengan anak-anak yang kecanduan gadget dan malas belajar? Paud Bina Murida memiliki metode belajar asyik dan menyenangkan untuk buah hati Anda. </h4>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection