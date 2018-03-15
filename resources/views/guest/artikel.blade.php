

<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Artikel</span>
    </h1>
@extends('layouts.user')
@section('content')


         @foreach ($artikel as $data)
    <br>
           <br> 
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">

          </div>
          <a href="/artikels/{{$data->slug}}"><img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/img7/{{$data->cover}}" width="700px" height="900px">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
 <h1><i><b><u><font color="black"> {!!$data->judul!!}</font></u></b></i></h1></a>
 <br>
              
            </div>
          </div>
        </div>
      </div>
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
      @endforeach

      <br>
      <br>
<ul class="pagination modal-4">
   {{$artikel->links('vendor.pagination.bootstrap-4')}}
</ul><br> 
    </section>

@endsection


