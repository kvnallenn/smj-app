<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/checkout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>PT Sentra Medan Jaya |</title>
  </head>
  <body>
    @include('partials.navbarshop')

    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
      </nav>
    </div>
    <div class="container">
        <div class="row row-produk">
            <div class="col">
              @if ( $totalcart == null)
              <div class="container">
                <div class="bg-light rounded-3 text-center">
                  <div class="container-fluid py-4 text-center">
                    <img src="/img/assets/emp-cart.png" class="img-fluid">
                    <h2 class="fw-bold text-center">Wah, keranjang belanjamu kosong</h2>
                    <a href="/shop" class="btn btn-primary btn-md" type="button">Mulai Belanja</a>
                  </div>
                </div>
              </div>
              @else
              <h5><strong>Checkout</strong></h5>
              <h6 class="mt-3"><strong>Alamat Pengiriman</strong></h6>
              <hr/>
              <h6 class="pembeli">Nama :<strong> {{ $untukadmin->name }}</strong></h6>
              <h6 class="pembeli">Nomor Telepon : <strong>{{ $untukadmin->nomor_telepon }}</strong></h6>
              <h6 class="pembeli">Alamat : <strong>{{ $untukadmin->jalan }}, {{ $untukadmin->kota }}, {{ $untukadmin->kecamatan }}</strong></h6>
              <hr/>
              @foreach ( $aturcart as $kuncick )
              <div class="row">
                <div class="col-sm pilih-pembayaran col-md-7">
                  
                  <h6 class="label-pesanan mb-3"><strong>Pesanan {{ $loop->iteration }}</strong></h6>
                  <h6 class="label-pesanan"><strong>PT Sentra Medan Jaya</strong></h6>
                  <div class="row">
                      <div class="col-lg-3">
                        <img src="{{ $kuncick->image }}" alt="" class="img-checkout rounded">
                      </div>
                      <div class="col-md-auto">
                     {{ $kuncick->nama_produk}}
                      <div class="row">
                        <div class="col"><h6 class="harga-checkout mt-1">{{ $kuncick->unit_produk}} PCS</h6></div>
                      </div>
                      <div class="row">
                        <div class="col"><h6 class="harga-checkout">Rp {{ $kuncick->harga_produk*$kuncick->unit_produk }},-</h6></div>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
              <hr>
              @endforeach
              
            </div>
              {{-- MODAL PAYMENT --}}

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col fw-bold">Metode Pembayaran</div>
                      </div>  
                      <div class="row">
                      <form action="{{ url('/payment') }}" method="post">
                        @method('post')
                        @csrf
                        <div class="col mt-4">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label fw-bold" for="flexRadioDefault1">
                             <img src="/img/assets/bca.png" class="img-fluid me-3" width="75px">BCA ( Transfer Manual )
                            </label>
                            <input class="form-check-input inline" type="radio" name="namaBank" id="flexRadioDefault1" value="BCA">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col mt-3 mb-5">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label fw-bold" for="flexRadioDefault1">
                             <img src="/img/assets/mandiri.png" class="img-fluid me-3" width="75px">Mandiri ( Transfer Manual )
                            </label>
                            <input class="form-check-input" type="radio" name="namaBank" id="flexRadioDefault1" value="Mandiri">
                          </div>
                        </div>
                      </div>
                    

                      <div class="row">
                        <div class="fw-bold">Ringkasan Pembayaran</div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-9">Total Belanja</div>
                        <div class="col">Rp {{ $total }},-</div>
                      </div>
                    </div>
                    
                    <div class="row modal-footer">
                      <div class="col-9">
                        <div class="row">
                          <div class="col fw-bold">Total Tagihan</div>
                        </div>
                       <b>Rp {{ $total }},-</b>
                      </div>
                      <div class="col">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              
              {{-- MODAL PAYMENT --}}
            <div class="col-sm-6 warna-container pb-2">
              <div class="container bks pt-3 pb-3 mt-2">
                  <div class="row row-keranjang">
                    <div class="col">
                        <table class="table ms-auto text-center mb-4 mx-3" id="table-checkout">
                            <thead class="table-secondary">
                              <tr>
                                <th scope="col" colspan="2" class="th-header">Ringkasan Belanja</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="fw-bold th-header">Total Harga</td>
                                <td class="th-header">Rp {{ $total }},-</td>
                              </tr>
                              <tr>
                                <td class="fw-bold th-header">Biaya</td>
                                <td class="th-header">-</td>
                              </tr>
                              <tr>
                                  <td colspan="2" class="th-header">
                                      <div class="btn-checkout d-grid">
                                          <button class="btn btn-dark mx-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih pembayaran</button>
                                      </div>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
               
              </div>
              
            </div>
            @endif
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