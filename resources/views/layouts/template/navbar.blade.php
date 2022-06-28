<!-- Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/template/Logo Raga Sukma.png')}}" alt="Logo" /></a>
      <div class="cart">
        @if (Route::has('login'))
            {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                @auth
                <a class="nav-link me-lg-4 pt-3" href="page/cart/cart.html"><span class="material-symbols-outlined"> shopping_cart </span></a>
                @endauth

        @endif
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
            <a class="nav-link nav-hov" aria-current="page" href="{{url('/produk')}}">Produk</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item lr">
                        <a class="nav-link me-lg-4 nav-hov" href="{{url('/login')}}">Login</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item lr">
                        <a class="nav-link register px-3" href="{{url('/register')}}">Register</a>
                    </li>
                @endif
            @else
            {{-- <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </div>
            </li> --}}

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link-lg" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle me-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                         </form>
                    </li>
                </ul>
            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->
