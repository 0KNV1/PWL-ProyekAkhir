<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- CDN icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- css style -->
    <link rel="stylesheet" href="../../assets/css/index.css" />

    <title>Cartpage</title>
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="../../index.html"><img src="../../assets/img/Logo Raga Sukma.png" alt="Logo" /></a>
        <div class="cart">
          <a class="nav-link me-lg-4 pt-3" href="cart.html"><span class="material-symbols-outlined"> shopping_cart </span></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item pt-2">
              <a class="nav-link nav-hov about" aria-current="page" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item pt-2 ms-lg-3">
              <a class="nav-link nav-hov" aria-current="page" href="../produk/produk.html">Produk</a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item lr">
              <a class="nav-link me-lg-4 nav-hov" href="../../auth/login.html">Login</a>
            </li>
            <li class="nav-item lr">
              <a class="nav-link register px-3" href="../../auth/register.html">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->

    <!-- cart -->
    <div class="row px-0 mx-5">
      <div class="col-lg-4 mt-5">
        <h5>Keranjang Kamu (2 Pesanan)</h5>
      </div>
      <div class="col-lg-4 mt-5 text-end col-back">
        <a href="../produk/produk.html"><i class="fa-solid fa-arrow-left"></i>Kembali Belanja</a>
      </div>
    </div>

    <div class="row px-0 mx-5 baris">
      <div class="col-lg-8 klm">
        <div class="card cart-produk mt-3">
          <div class="card-body">
            <div class="row px-0 d-flex align-items-center">
              <div class="col-lg-2 d-flex justify-content-center">
                <img src="../../assets/img/kopisusu.jpg" alt="" class="cart-img ms-3" />
              </div>
              <div class="col-lg-4">
                <p class="mb-0">Minuman</p>
                <h5 class="card-title cart-title">Es Kopi Susu</h5>
              </div>

              <div class="col-lg-3">
                <p class="mb-0">Harga</p>
                <h5 class="harga">Rp 15000</h5>
              </div>
              <div class="col-lg-2 d-flex cart-qty mt-3 ms-lg-4">
                <!-- <span onclick="DecreaseCount(event,this)">-</span> -->
                <button id="minus" onclick="DecreaseCount(event,this)">-</button>
                <input type="text" value="1" data-toggle="input" id="input" class="quantity" min="0" />
                <!-- <span onclick="increaseCount(event,this)">+</span> -->
                <button id="plus" onclick="increaseCount(event,this)">+</button>
              </div>
            </div>
          </div>
          <div class="card-footer card-ftr d-flex">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#removeModal">
              <i class="fa-regular fa-trash-can"></i>
              Hapus Order
            </button>
            <p>total : <span class="total">Rp 15000</span></p>
          </div>
        </div>
        <div class="card cart-produk mt-3">
          <div class="card-body">
            <div class="row px-0 d-flex align-items-center">
              <div class="col-lg-2 d-flex justify-content-center">
                <img src="../../assets/img/kopisusu.jpg" alt="" class="cart-img ms-3" />
              </div>
              <div class="col-lg-4">
                <p class="mb-0">Minuman</p>
                <h5 class="card-title cart-title">Es Kopi Susu</h5>
              </div>

              <div class="col-lg-3">
                <p class="mb-0">Harga</p>
                <h5 class="harga">Rp 15000</h5>
              </div>
              <div class="col-lg-2 d-flex cart-qty mt-3 ms-lg-4">
                <!-- <span onclick="DecreaseCount(event,this)">-</span> -->
                <button id="minus" onclick="DecreaseCount(event,this)">-</button>
                <input type="text" value="1" data-toggle="input" id="input" class="quantity" min="0" />
                <!-- <span onclick="increaseCount(event,this)">+</span> -->
                <button id="plus" onclick="increaseCount(event,this)">+</button>
              </div>
            </div>
          </div>
          <div class="card-footer card-ftr d-flex">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#removeModal">
              <i class="fa-regular fa-trash-can"></i>
              Hapus Order
            </button>
            <p>total : <span class="total">Rp 15000</span></p>
          </div>
        </div>
      </div>

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
                  <td class="text-end"><span class="fw-bold">Rp 35000</span></td>
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

    <!-- Remove Modal -->
    <div class="modal fade" id="removeModal" tabindex="-1" aria-labelledby="removeModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Hapus Order</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
          </div>
          <div class="modal-body">Apa anda yakin ingin menghapus pesanan ini?</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="remove-produk">Ya,Hapus!</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Remove Modal -->

    <!-- Footer -->

    <footer class="pb-0">
      <div class="row mx-0 mt-5 footer">
        <div class="col-lg-2 col-md-3 col-sm-2 img ms-lg-5 ms-md-3">
          <img src="../../assets/img/Logo Raga Sukma.png" alt="Logo" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-2 mt-4 ms-lg-5 ms-md-5">
          <div class="about">
            <h4>Raga Sukma</h4>
            <a href="#">Tentang Kami</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 mt-4 ms-lg-3">
          <div class="kontak">
            <h4 class="">Kontak</h4>
            <a href="#" class=""> <i class="fa-brands fa-instagram"></i> Instagram</a>
            <a href="#" class=""><i class="fa-brands fa-facebook"></i> Facebook</a>
            <a href="#" class=""><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            <a href="#" class=""><i class="fa-brands fa-linkedin"></i> Linkedin</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- End of Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Link JS -->
    <script src="../../assets/js/main.js"></script>
  </body>
</html>
