

<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Artikel</span>
    </h1>
@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data1) 

    
<body style="background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(../img/img1/{{$data1->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">



         @foreach ($artikel as $data)
 
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
           <br>
           <br>
           <br>
           <br> 
           <br>
           <br> 
           <br>
           <br> 
           <br>
           <br> 
           <br>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/img7/{{$data->cover}}" width="700px" height="900px">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
 <h1><i><b><u>{!!$data->judul!!}</u></b></i></h1>
 <br>
              <p>{!!$data->isi!!}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <br>
      <br>
<ul class="pagination modal-4">
   {{$artikel->links('vendor.pagination.bootstrap-4')}}
</ul><br> 
    </section>

@endforeach

@endsection


