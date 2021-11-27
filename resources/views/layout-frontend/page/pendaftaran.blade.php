@extends('layout-frontend.master')

@section('content')
    <div class="container">
		 <h2 class="title-pendaftaran" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"><b>Pendaftaran</b></h2>
		 <div class="about-info-grids">
			 <div class="col-md-12 abt-pic">
				 <div class="test d-flex justify-content-center">
                        <div class="card m-5 bg-info" style="width: 15rem;-webkit-box-shadow: 5px 5px 15px 5px #000000; box-shadow: 5px 5px 15px 5px #000000;">
                            <div class="kolom-berita" style="max-width: 350px ;padding: 0; overflow: hidden;">
                                <img class="card-img-top" src="{{ asset('template-frontend/images/paud-islami.jpg') }}" alt="Card image cap" style="width:100% ;margin:auto ;display:block ;max-height: 200px;">
                            </div>
                            <div class="card-body">
                                <a href="{{ url('/pendaftaran/paud') }}" style="color: white;">
                                    <h5>Daftar Paud</h5>
                                </a>
                            </div>
                        </div>

                        <div class="card bg-warning m-5" style="width: 15rem;-webkit-box-shadow: 5px 5px 15px 5px #000000; box-shadow: 5px 5px 15px 5px #000000;">
                            <div class="kolom-berita" style="max-width: 350px ;padding: 0; overflow: hidden;">
                                <img class="card-img-top" src="{{ asset('template-frontend/images/pud.png') }}" alt="Card image cap" style="width:100% ;margin:auto ;display:block ;max-height: 200px;">
                            </div>
                            <div class="card-body">
                                {{-- <a href="{{ url('/berita/detail/'.$item->id) }}" style="color: white;">
                                    <h5 class="card-title">{!! Illuminate\Support\Str::of($item->judul_berita)->limit(20) !!}</h5>
                                    <span class="mr-2">{{ date('d/m/Y',strtotime($item->tanggal_berita)) }}</span> &bullet;
                                    <p>{!! Illuminate\Support\Str::of($item->summary_berita)->limit(20) !!}</p>
                                </a> --}}
                            </div>
                        </div>
                 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
@endsection
