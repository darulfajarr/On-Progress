<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Produk Terbaru</span>
    </h1>

    
<link rel="shortcut icon" href="{{asset('icon.png')}}">
@extends('layouts.user')
@section('content')


       <br>
          @include('layouts.nav')


         @foreach ($Product as $data)
 
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-lower"><i>{!!$data->nama_product!!}</i></span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/img7/{{$data->cover}}" width="900px" height="1000px">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">

             <p class="mb-0"><center><h2><b><u>Detail</u></b></h2></center>  <br>

                <table>
                  <tr>
                    <td>Kode</td><td>&nbsp:&nbsp</td><td>{!!$data->Kode!!}</td>
                  </tr>
                  <tr>
                    <td>Bahan</td><td>&nbsp:&nbsp</td><td>{!!$data->bahan!!}</td>
                  </tr>
                  <tr>
                    <td>Warna</td><td>&nbsp:&nbsp</td><td>{!!$data->warna!!}</td>
                  </tr>
                  <tr>
                    <td>Ukuran</td><td>&nbsp:&nbsp</td><td>{!!$data->ukuran!!}</td>
                  </tr>
                </table>
              </p>
            </div>
          </div>
        </div>
      </div>

      @endforeach

      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a6a9c2ed7591465c7071a82/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<a href="https://info.flagcounter.com/eyKu"><img src="https://s11.flagcounter.com/count2/eyKu/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>

    </section>

@endsection