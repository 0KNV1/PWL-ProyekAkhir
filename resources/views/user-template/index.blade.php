@extends('layouts.template.app')

@section('content')
    <!-- Hero -->
    <section>
      <div class="jumbotron jumbotron-fluid">
        <div class="row mx-0 px-0">
          <div class="col-lg-5 col-md-6 col-sm-1 ms-lg-5 ms-md-4 img">
            <img src="{{asset('assets/img/template/imgJumbotron.jpg')}}" alt="RagaSukma" />
          </div>
          <div class="col-lg-5 col-md-5 desc ms-md-4">
            <h2>Kalian Suka Ngopi Tapi Mager Pergi? Pesan Kopi di RagaSukma</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Hero -->

    <!-- Product -->
    <section>
      <div class="row px-0 mx-0 product">
        <div class="col title my-5 ms-4">
          <h2 class="fw">Produk</h2>
        </div>
      </div>
      <!-- Row for card -->
      <div class="row px-0 mx-0">
        @foreach ($produks as $produk)
        <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
          <div class="card ms-4 card1 produk" style="background-image: url({{asset('/assets/img/'.$produk->background)}})">
            <img src="{{asset('assets/img/'.$produk->image)}}" alt="kopiSusu" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">{{$produk->name}}</h4>
              <p class="card-text produk-text" style="font-weight: 10">{{$produk->desc}}</p>
              <a href="page/detail/detailEsKopiSusu.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
          @endforeach
        {{-- <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
          <div class="card ms-4 card2 produk" style="background-image: url(/assets/img/template/bgRedVelvet.jpg)">
            <img src="{{asset('assets/img/template/RedVelvet.png')}}" alt="Red Velvet" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Red Velvet Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Red Velvet adalah minuman yang terbuat dari bubuk Red Velvet yang diciptakan dari berbagai bahan, bahan-bahan tersebut ialah buttermilk, kakao, kopi, cuka, dan pewarna makanan merah. Memiliki citarasa cokelat akan
                tetapi memiliki tekstur yang berbeda .
              </p>
              <a href="page/detail/redVelvet.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mx-md-auto">
          <div class="card ms-4 card3 produk" style="background-image: url(/assets/img/template/bgGreenTea.jpg)">
            <img src="{{asset('assets/img/template/greentea.png')}}" alt="Green Tea" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Green Tea Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Green tea adalah minuman yang terbuat dari bubuk Green Tea, dan susu kental manis.Minuman Green tea terbuat dari bubuk green tea yang dibuat dari teh hijau yang tidak mengalami proses seperti matcha tetapi hanya
                dihaluskan .
              </p>
              <a href="page/detail/greenTea.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mx-md-auto">
          <div class="card ms-4 card4 produk" style="background-image: url(/assets/img/template/bgTaro.jpg)">
            <img src="{{asset('assets/img/template/Taro.png')}}" alt="Taro" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Taro Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Taro adalah minuman yang dibuat dari bubuk Taro, dan susu segar. Taro terbuat dari ekstrak buah talas. Memiliki rasa manis dari buah talas yang berpadu dengan rasa gurih dari susu segar .
              </p>
              <a href="page/detail/taro.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
      </div> --}}
    </section>
    <!-- End of Product -->


@endsection


