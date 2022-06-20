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

    <!-- Css style -->
    <link rel="stylesheet" href="../../assets/css/index.css" />

    <title>Ragasukma</title>
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="../../index.html"><img src="../../assets/img/Logo Raga Sukma.png" alt="Logo" /></a>
        <div class="cart">
          <a class="nav-link me-lg-4 pt-3" href="../cart/cart.html"><span class="material-symbols-outlined"> shopping_cart </span></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item pt-2"><a class="nav-link nav-hov about" aria-current="page" href="#">Tentang Kami</a></li>
            <li class="nav-item pt-2 ms-lg-3"><a class="nav-link nav-hov" aria-current="page" href="../produk/produk.html">Produk</a></li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item lr">
              <a class="nav-link me-lg-4 nav-hov login" href="#">Login</a>
            </li>
            <li class="nav-item lr">
              <a class="nav-link register px-3" href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Content -->
    <section>
      <div class="container">
        <div class="row px-0 mx-0 kolom">
          <div class="col-lg-6 col-md-5 d-flex justify-content-end img">
            <img src="../../assets/img/greentea.jpg" alt="EsKopiSusu" width="280px" height="500px" />
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

    <!-- Footer -->
    <section>
      <footer class="footer">
        <div class="row mx-0 mt-5">
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
    </section>
    <!-- End of Footer -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../assets/js/main.js"></script>
  </body>
</html>
