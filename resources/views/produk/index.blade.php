<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/produk.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>PT Sentra Medan Jaya | {{ $title }}</title>
  </head>
  <body>
    @include('partials.navbarshop')

    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="/shop">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
      </nav>
    </div>

    <div class="container">
        <div class="row row-produk">
            <div class="col-lg-5">
                <figure class="figure">
                    <img src="{{ asset('storage/'.$dataproduk->image)}}" class="figure-img img-fluid rounded" style="border-radius: 5px;
                    width: 450px;">
                  </figure>
            </div>
            <div class="col-lg-7">
              <form action="{{ url('/keranjang/') }}" method="post">
                @method('POST')
                @csrf
                
                <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user"/>
                <input type="hidden" value="{{ $dataproduk->nama_produk }}" name="nama_produk"/>
                <input type="hidden" value="{{ $dataproduk->harga_produk }}" name="harga_produk"/>
                <input type="hidden" value="1" name="unit_produk" class="kunciunit"/>
                <input type="hidden" value="{{ asset('storage/'.$dataproduk->image)}}" name="gambar_produk"/>
                <h4>{{ $dataproduk->nama_produk }}</h4>
                <div class="garis-nama"></div>
                <h3 class="text-muted mb-3">Rp {{ $dataproduk->harga_produk }},-</h3>
                <button type="button" class="btn btn-dark btn-sm" id="decrement"><i class="fas fa-minus"></i></button>
                <span class="mx-2" id="kuncispan">1</span>
                <button type="button" class="btn btn-warning btn-sm" id="increment"><i class="fas fa-plus text-white"></i></button>
                <span class="mx-2">Tersisa {{ $dataproduk->kuantitas_produk }} {{ $dataproduk->unit_produk }}</span>
                
                <div class="btn-produk mt-5">
                    <button type="submit" class="btn btn-dark text-white btn-lg me-2 btn-custom"><i class="bi bi-cart-plus-fill me-2 fs-6"></i>Masukkan Keranjang</button>
                    <a href="#" class="btn btn-warning text-white btn-lg btn-custom">Beli Sekarang</a>
                </div>
              </form>
            </div>
        </div>
        <div class="row row-produk pt-5">
          <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi Produk</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review Produk</button>
              </li>
            </ul>
            <div class="tab-content p-3" id="myTabContent">
              <div class="tab-pane fade deskripsi show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                    
               <p><strong> Deskripsi Produk</strong> <br/> 
                Berat : {{ $dataproduk->berat }}<br/>
                Jenis : {{ $dataproduk->jenis }}<br/>
                Ukuran : {{ $dataproduk->ukuran }}<br/>
                Warna : {{ $dataproduk->warna }}<br/>
              </p> 
              
              </div>
              <div class="tab-pane fade review" id="review" role="tabpanel" aria-labelledby="review-tab">
                @foreach ( $totalrating as $item)
                <div class="row">
                  <div class="col-3 col-md-1">
                    <img src="../img/assets/iron.png" class="review-img rounded-circle">
                  </div>
                  <div class="col">
                    {{-- jangan --}}
                    <h5 class="review-name">{{  $item->nama_user }}</h5>
                    <div class="icon-bintang" style="color: orange;">
                      @if ($item->rating == 5 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      @elseif ($item->rating == 4 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      @elseif ($item->rating == 3 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      @elseif ($item->rating == 2 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      @elseif ($item->rating == 1 )
                      <i class="fas fa-star"></i>
                      @else
                      @endif
                    </div>
                    <div class="d-flex flex-wrap justify-content-start">
                      <img src="{{ asset('storage/'.$item->gambar_produk)}}" class="comment-img rounded">
                    </div>
                    <p class="review-desc">{{ $item->komentar }}</p>
                  </div>
                </div>
                <hr>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      <div class="container mt-5">
            <div class="row quest-row">
            <h3>Diskusi</h3>
            </div>
            <div class="row questb-row">
              <div class="d-flex flex-wrap justify-content-between">
              <div><p class="questp">Memiliki pertanyaan yang ingin ditanyakan ?</p></div>
              <div class="btn-produk">
                <a href="#pertanyaan" class="btn btn-warning text-white btn-custom-quest">Tulis Pertanyaan</a>
              </div>
            </div>
            </div>

            <div class="row wrap-quest mt-4">
              @foreach ( $totalpertanyaan as $item)
              <div class="col-xl-1 col-3 col-md-2 col-sm-2 col-xs-2 mt-3">
                <img src="../img/assets/iron.png" class="review-img rounded-circle">
              </div>
              <div class="col mt-4 mb-4">
                <h5 class="review-name">{{  $item->nama_user }}</h5>
                <p class="review-desc">{{  $item->pertanyaan }}</p>
              </div>
              <hr>
              @endforeach
            </div>
        </div>
        <div class="container mt-4">
          <div class="row wrap-quest p-4">
            <div class="col">
              <form action="/produk/pertanyaan" method="POST">
                @csrf
                @method('POST')
              <textarea class="form-control ml-4" id="form-pertanyaan" rows="5" name="pertanyaanText" style="min-width: 100%"></textarea>
              <div class="btn-produk text-end mt-2">
                <input type="hidden" value="{{ $dataproduk->id }}" name="id_produk" required/>
                <button type="submit" class="btn btn-warning text-white btn-custom-quest" id="pertanyaan">Tulis Pertanyaan</button>
              </form>
              </div>
            </div>
          </div>
        </div>
    </div>

      
    @include('partials.footer')
    @include('partials.navbarbot')
    <script src="../js/Counter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    <script src="https://kit.fontawesome.com/4f72237084.js" crossorigin="anonymous"></script>
   
  </body>
</html>