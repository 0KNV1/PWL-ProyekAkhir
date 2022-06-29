@extends('layouts.template.app')

@section('content')

    <!-- cart -->
    <div class="row px-0 mx-5">
      <div class="col-lg-4 mt-5">
        
          <span class= "index"></span>
        <h5>Keranjang Kamu {{ $carts->count() }}</h5>
      </div>
      <div class="col-lg-4 mt-5 text-end col-back">
        <a href="../produk/produk.html"><i class="fa-solid fa-arrow-left"></i>Kembali Belanja</a>
      </div>
    </div>

    <div class="row px-0 mx-5 baris">
      
      @foreach ($carts as $cart)
      <div class="col-lg-8 klm">
          <div class="card cart-produk mt-3">
            <div class="card-body">
              <div class="row px-0 d-flex align-items-center">
                <div class="col-lg-2 d-flex justify-content-center">
                  <img src="{{asset('/assets/img/template/kopisusu.')}}jpg" alt="" class="cart-img ms-3" />
                </div>
                <div class="col-lg-4">
                  <p class="mb-0">Minuman</p>
                  <h5 class="card-title cart-title">{{ $cart->produk->name }}</h5>
                </div>
  
                <div class="col-lg-3">
                  <p class="mb-0">Harga</p>
                  <h5 class="harga">{{ $cart->produk->price }}</h5>
                </div>
                <div class="col-lg-2 d-flex cart-qty mt-3 ms-lg-4">
                  <!-- <span onclick="DecreaseCount(event,this)">-</span> -->
                  <button id="minus" onclick="DecreaseCount(event,this)">-</button>
                  <input type="text" value="{{ $cart->quantity }}" data-toggle="input" id="input" class="quantity" min="0" />
                  <!-- <span onclick="increaseCount(event,this)">+</span> -->
                  <button id="plus" onclick="increaseCount(event,this)">+</button>
                </div>
              </div>
            </div>
          
            <div class="card-footer card-ftr d-flex">
              
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#removeModal-{{ $cart->id}}">
                  <i class="fa-regular fa-trash-can"></i>
                  Hapus Order
                </button>
              <p>total :  <span class="total">Rp {{ $cart->produk->price * $cart->quantity}}</span></p>
            </div>
          </div>
        </div>
            <!-- Remove Modal -->
        <div class="modal fade" id="removeModal-{{ $cart->id}}" tabindex="-1" aria-labelledby="removeModal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <form action="{{ route('item.delete-cart', $cart->id) }}" method="post">
                @csrf
                @method('DELETE')
              
            <div class="modal-content">
              
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Hapus Order </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
              </div>
              <div class="modal-body">Apa anda yakin ingin menghapus pesanan ini?</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="remove-produk">Ya,Hapus!</button>
              </div>
              
            </div>
          </form>
          </div>
        </div>
        <!-- End of Remove Modal -->
      @endforeach
      <div class="col-lg-4 invoice">
        <div class="card mt-3">
          <div class="card-header order-header">
            <h4 class="card-title order-title">Order Summary</h4>
          </div>
          <div class="card-body pb-0">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Sub Total :</td>
                  <td class="text-end">Rp 30000</td>
                </tr>
                <tr>
                  <td>Shipping Charge :</td>
                  <td class="text-end">Rp 5000</td>
                </tr>
                <tr class="table-active">
                  <th>Total :</th>
                  <td class="text-end"><span class="fw-bold">Rp  {{$total}}</span></td>
                </tr>
                <!-- <tr>
                  <td class="d-flex justify-content-end checkout mt-3">
                    <button>Checkout</button>
                  </td>
                </tr> -->
              </tbody>
            </table>
          </div>
          <div class="card-footer checkout">
            <button>Checkout</button>
          </div>
      
        </div>
      </div>
    </div>

    <!-- end of cart -->

   

@endsection
