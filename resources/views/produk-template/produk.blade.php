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

    <title>Produkpage</title>
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
            <li class="nav-item pt-2"><a class="nav-link nav-hov about" aria-current="page" href="#" id="active">Tentang Kami</a></li>
            <li class="nav-item pt-2 ms-lg-3"><a class="nav-link nav-hov" aria-current="page" href="produk.html" id="active">Produk</a></li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item lr">
              <a class="nav-link me-lg-4 nav-hov" href="#" id="active">Login</a>
            </li>
            <li class="nav-item lr">
              <a class="nav-link register px-3" href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->
    <!-- Product -->
    <section>
      <div class="row px-0 mx-0 product">
        <div class="col title my-5 ms-4">
          <h2 class="fw">Semua Produk</h2>
        </div>
      </div>
      <!-- Row for card -->
      <div class="row px-0 mx-0">
        <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
          <div class="card ms-4 card1 produk" style="background-image: url(../../assets/img/bgKopi.jpg)">
            <img src="../../assets/img/kopisusu.png" alt="kopiSusu" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Es Kopi Susu</h4>
              <p class="card-text produk-text" style="font-weight: 10">Es Kopi Susu adalah minuman yang terbuat dari espresso, susu UHT dan susu kental manis. Minuman ini biasanya disajikan dengan gelas plastik bertutup .</p>
              <a href="../detail/detailEsKopiSusu.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
          <div class="card ms-4 card2 produk" style="background-image: url(../../assets/img/bgRedVelvet.jpg)">
            <img src="../../assets/img/RedVelvet.png" alt="Red Velvet" class="card-img-top" />
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
          <div class="card ms-4 card3 produk" style="background-image: url(../../assets/img/bgGreenTea.jpg)">
            <img src="../../assets/img/greentea.png" alt="Green Tea" class="card-img-top" />
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
          <div class="card ms-4 card4 produk" style="background-image: url(../../assets/img/bgTaro.jpg)">
            <img src="../../assets/img/Taro.png" alt="Taro" class="card-img-top" />
            <div class="card-body produk-body">
              <h4 class="card-title produk-title">Taro Latte</h4>
              <p class="card-text produk-text" style="font-weight: 10">
                Minuman Taro adalah minuman yang dibuat dari bubuk Taro, dan susu segar. Taro terbuat dari ekstrak buah talas. Memiliki rasa manis dari buah talas yang berpadu dengan rasa gurih dari susu segar .
              </p>
              <a href="../detail/taro.html" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Product -->
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
    <script src="../assets/js/main.js"></script>
  </body>
</html>
