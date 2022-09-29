<nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="navbaratas">
    <div class="container">
        <a class="navbar-brand me-5" href="#"><img src="../img/Logo-Sentra.png" alt="Logo Sentra" width="100" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto my-2">
                <li class="nav-item mx-2">
                    <a class="nav-link active" id="nav-warna" aria-current="page" href="/">BERANDA</a>
                   </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" id="nav-warna" href="#">TENTANG</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" id="nav-warna" href="#">KONTAK</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" id="nav-warna" href="/shop">PRODUK</a>
                </li>
            </ul>

                @auth
                <ul class="navbar-nav mx-2">
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle" id="nav-warna" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Welcome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/shop">Belanja</a></li>
                      <li><a class="dropdown-item" href="/">Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <form action="/logout" method="post">
                        @csrf
                      <li><button type="submit" class="dropdown-item">Log Out</button></li>
                      </form>
                    </ul>
                  </li>
                </ul>
                @else
                <button type="button" class="button-primary rounded-3 mx-1"
                    id="button-font" onclick="window.location.href='/login';"><span>Masuk</span></button>
               <button type="button" class="button-secondary rounded-3 mx-1"
                    id="button-font" onclick="window.location.href='/register';"><span>Daftar</span></button>
                </div>
                @endauth
            
        </div>
    </div>
</nav>