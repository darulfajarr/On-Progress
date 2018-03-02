  <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Beranda</span>
    </h1>

<link rel="shortcut icon" href="{{asset('icon.png')}}">
@extends('layouts.user')
@section('content')

  <body>
  @foreach ($Home as $data) 
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">{!!$data->textkecilhd!!}</span>
      <span class="site-heading-lower">{!!$data->textbesarhd!!}</span>
    </h1>



    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="/img/img1/{{$data->cover}}" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{!!$data->textkecilboldbd!!}</span>
              <span class="section-heading-lower">{!!$data->textbesarbd!!}</span>
            </h2>
            <p class="mb-3">{!!$data->textkecilbd!!}</p>
            <div class="intro-button mx-auto">
              <a href ="/store" class="btn btn-primary btn-xl"><font color="black">Kunjungi Kami Hari Ini !</font></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
    

     <div class="container">
        <div class="row">
          <div class="col-xl-24 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-8">
         
                <span class="section-heading-lower">Discont Dan Promo Yang Tersdia Di PansCloth</span>
              </h2>
    
            </div>
 
          </div>
        </div>
      </div>

      <br><br><br>
        @foreach ($discont as $data)
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{!!$data->atas!!}</span>
                <br>
                <span class="section-heading-lower">{!!$data->tengah!!}</span>
              </h2>
              <p class="mb-0">{!!$data->bawah!!}
              </p>
            </div>
            <br><br><br>
          </div>
        </div>
      </div>
      
            @endforeach
            
    </section>
    @endforeach

@endsection