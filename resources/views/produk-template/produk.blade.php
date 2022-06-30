@extends('layouts.template.app')
@section('content')
    <!-- Product -->
    <section>
      <div class="row px-0 mx-0 product">
        <div class="col title my-5 ms-4">
          <h2 class="fw">Semua Produk</h2>
        </div>
      </div>
      <!-- Row for card -->
      <div class="row px-0 mx-0 justify-content-center">
        @foreach ($produks as $produk)
        <div class="col-lg-3 col-md-5 mb-md-5 ">
          <div class="card ms-4 card1 produk" style="background-image: url({{asset('/assets/img/'.$produk->background)}})">
            <img src="{{asset('assets/img/'.$produk->image)}}" alt="kopiSusu" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">{{$produk->name}}</h4>
              <p class="card-text produk-text" style="font-weight: 10">{{$produk->desc}}</p>
              <a href="{{url('produk-detail/'.$produk->id)}}" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
          <div class="card ms-4 card2 produk" style="background-image: url(/assets/img/template/bgRedVelvet.jpg)">
            <img src="{{asset('/assets/img/template/RedVelvet.png')}}" alt="Red Velvet" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Red Velvet Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Red Velvet adalah minuman yang terbuat dari bubuk Red Velvet yang diciptakan dari berbagai bahan, bahan-bahan tersebut ialah buttermilk, kakao, kopi, cuka, dan pewarna makanan merah. Memiliki citarasa cokelat akan
                tetapi memiliki tekstur yang berbeda .
              </p>
              <a href="../detail/redVelvet.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mx-md-auto">
          <div class="card ms-4 card3 produk" style="background-image: url(/assets/img/template/bgGreenTea.jpg)">
            <img src="{{asset('/assets/img/template/greentea.png')}}" alt="Green Tea" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Green Tea Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Green tea adalah minuman yang terbuat dari bubuk Green Tea, dan susu kental manis.Minuman Green tea terbuat dari bubuk green tea yang dibuat dari teh hijau yang tidak mengalami proses seperti matcha tetapi hanya
                dihaluskan .
              </p>
              <a href="../detail/greenTea.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mx-md-auto">
          <div class="card ms-4 card4 produk" style="background-image: url(/assets/img/template/bgTaro.jpg)">
            <img src="{{asset('/assets/img/template/Taro.png')}}" alt="Taro" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Taro Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Taro adalah minuman yang dibuat dari bubuk Taro, dan susu segar. Taro terbuat dari ekstrak buah talas. Memiliki rasa manis dari buah talas yang berpadu dengan rasa gurih dari susu segar .
              </p>
              <a href="../detail/taro.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
      </div> --}}
    </section>
    <!-- End of Product -->
@endsection
