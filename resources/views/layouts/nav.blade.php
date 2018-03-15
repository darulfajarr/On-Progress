<nav class="navbar navbar-expand-lg navbar-dark py-lg-2" id="mainNav">
      <div class="container">
          <ul class="navbar-nav mx-auto">
           <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="/products"><h4>Semua Produk</h4></a>
            </li>
           @foreach ($kategori as $data2)
            <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="{{route('showperkategori', $data2->slug)}}"><h4>{!!$data2->nama_kategori!!}</h4></a>
            </li>
           @endforeach
          <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="/news"><h4>Produk Terbaru</h4></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>