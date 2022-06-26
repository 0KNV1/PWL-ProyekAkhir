@extends('layouts.template.app')

@section('content')

    <!-- Content -->
    <section>
      <div class="container">
        <div class="row px-0 mx-0 kolom">
          <div class="col-lg-6 col-md-5 d-flex justify-content-end img">
            <img src="{{asset('/assets/img/template/greentea.png')}}" style="background-image:url(/assets/img/template/bgGreenTea.jpg) ;"  alt="Green tea Latte" width="280px" height="500px" />
          </div>
          <div class="col-lg-5 col-md-6 pt-5">
            <div class="row">
              <div class="col-lg-8 col-md-9 col-sm-2">
                <h2 class="judul">Green Tea Latte</h2>
              </div>
              <div class="col-lg-3 col-md-3 arrow d-flex">
                <a href="../produk/produk.html" class="fa-solid fa-arrow-left px-2"></a>
              </div>
            </div>
            <h4 class="harga mt-2">Rp. 15.000</h4>
            <p class="mt-4 pe-lg-5 desc">
              Minuman Green tea adalah minuman yang terbuat dari bubuk Green Tea, dan susu kental manis.Minuman Green tea terbuat dari bubuk green tea yang dibuat dari teh hijau yang tidak mengalami proses seperti matcha tetapi hanya
              dihaluskan.
            </p>
            <div class="row my-0 px-0 mx-0 rowstok">
              <div class="col-lg-4 col-md-6 mt-2 px-0 kolqty">
                <div class="d-flex qty me-lg-3 me-md-3">
                  <!-- <span onclick="DecreaseCount(event,this)">-</span> -->
                  <button id="minus" onclick="DecreaseCount(event,this)">-</button>
                  <input type="text" value="1" data-toggle="input" id="input" />
                  <!-- <span onclick="increaseCount(event,this)">+</span> -->
                  <button id="plus" onclick="increaseCount(event,this)">+</button>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 stok mt-2 px-1">
                <h5>Stok : 0</h5>
              </div>
            </div>
            <div class="scart mt-4">
              <button>Tambah Keranjang</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Content -->

   @endsection
