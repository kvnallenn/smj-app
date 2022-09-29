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
            <img src="../img/assets/img1.jpg" class="d-block img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/assets/img2.jpg" class="d-block img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/assets/img3.jpg" class="d-block img-fluid" alt="...">
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

    <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
      </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/banner1.jpeg" alt="" class="img-kategori mt-3"></a>
            <p class="mt-2">Baju</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">PROMO</h5>
      </div>
      <div class="row mt-3">
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
          <div class="card text-center">
            <img src="../img/banner1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas Lpg</h5>
              <div class="icon-bintang" style="color: orange;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp 25.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
              <a href="#" class="btn btn-dark d-grid mt-2">Keranjang</a>
            </div>
          </div>
         </div>
      </div>
    </div>
    @include('partials.footer')
    @include('partials.navbarbot')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    <script src="https://kit.fontawesome.com/4f72237084.js" crossorigin="anonymous"></script>
   
  </body>
</html>