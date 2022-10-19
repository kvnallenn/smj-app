<nav class="navbar navbar-expand-lg navbar-dark" id="navbarbawah">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="../img/Logo-Sentra.png" alt="" width="90" height="50" class="me-2"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex ms-auto my-4 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Cari Produk anda.." aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-1">
            <a class="nav-link active" aria-current="page" href="/keranjang"><i class="bi bi-bag-check" style="font-size: 20px;"><span class="badge badge-light rounded-circle">{{ $totalcart }}</span></i><label class="keterangan">&nbsp;&nbsp;Cart</label></a>
          </li>
          <li class="nav-item me-1">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-bell" style="font-size: 20px;"><span class="badge badge-light rounded-circle">5</span></i><label class="keterangan">&nbsp;&nbsp;Notification</label></a>
          </li>
          <li class="nav-item me-1">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-envelope" style="font-size: 20px;"><span class="badge badge-light rounded-circle">5</span></i><label class="keterangan">&nbsp;&nbsp;Message</label></a>
          </li>
          <li class="nav-item pembatas">
            <a class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <li class="nav-item dropdown">
              @auth
              <a class="nav-link active masuk authen dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>&nbsp;{{ auth()->user()->name }}</a>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="/status-pesanan">Pesanan</a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                  @csrf
                <li><li><button type="submit" class="dropdown-item">Keluar</button></li>
                </form>
              </ul>
              @else
              <a class="nav-link active masuk" href="/login"><span>Masuk</span></a>
             @endauth
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>