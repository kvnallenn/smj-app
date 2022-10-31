<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>PT Sentra Medan Jaya | {{ $title }}</title>
  </head>
  <body>
    
    @include('partials.navbarshop')
      <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/toko.jpg" class="d-block img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/sopi.jpg" class="d-block img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bli.jpg" class="d-block img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="fiturModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Fitur Belum Tersedia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Fitur Belum Tersedia
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- modal --}}

    <div class="container mt-5">
      <div class="judul-kategori" style="padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
      </div>
      <div class="row text-center row-container mt-2" id="kategori-warna">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#fiturModal"><img src="../img/noimage.jpg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Gas</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="judul-kategori" style="padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">PRODUK TERBARU</h5>
      </div>
      <div class="row mt-3">
        @foreach ($dataproduk as $kunciproduk)
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
          <a href="{{ url('/produk/'.$kunciproduk->id) }}" class="bungkus-div">
            <img src="{{ asset('storage/'.$kunciproduk->image)}}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $kunciproduk->nama_produk }}</h5>
              <div class="icon-bintang" style="color: orange;">
                @if ($hitungrata == 5 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      @elseif ($hitungrata == 4 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      @elseif ($hitungrata == 3 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      @elseif ($hitungrata == 2 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      @elseif ($hitungrata == 1 )
                      <i class="fas fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      @else
                      @endif
              </div>
              <p class="card-text mt-2">Rp {{ $kunciproduk->harga_produk }},-</p>
              <form action="{{ url('/keranjang/') }}" method="post">
                @method('POST')
                @csrf
                <input type="hidden" name="nama_user" value="{{ $namauser }}">
                <input type="hidden" name="nama_produk" value="{{ $kunciproduk->nama_produk }}">
                <input type="hidden" name="harga_produk" value="{{ $kunciproduk->harga_produk }}">
                <input type="hidden" name="unit_produk" value="1">
                <input type="hidden" name="gambar_produk" value="{{ asset('storage/'.$kunciproduk->image)}}">
                <center><button type="submit" class="btn btn-dark d-grid mt-2">Keranjang</button></center>
              </form>
            </div>
          </a>
          
          </div>
         </div>
         
         @endforeach
      </div>
       <div class="mt-2">{{ $dataproduk->links() }}</div>
    </div>
    @include('partials.footer')
    @include('partials.navbarbot')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    <script src="https://kit.fontawesome.com/4f72237084.js" crossorigin="anonymous"></script>
   
  </body>
</html>