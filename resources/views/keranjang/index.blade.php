<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/keranjang.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>PT Sentra Medan Jaya |</title>
  </head>
  <body>
    @include('partials.navbarshop')

    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="/shop">Home</a></li>
          <li class="breadcrumb-item"><a href="/keranjang">Keranjang</a></li>
          
        </ol>
      </nav>
    </div>

    <div class="container">
        <div class="row row-keranjang">
            <div class="col table-responsive mt-4 mx-3">

              {{-- ALERT --}}
              @if(session()->has('notifikasi'))
              <div class="row">
                  <div class="col-xl-6 col-lg-6">
                      <div class="alert alert-success d-flex d-inline align-items-center alert-dismissible fade show" role="alert">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                  <div class="mx-2">
               {{ session('notifikasi') }}
                  </div>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  </div>
                  </div>
              @endif
              {{-- ALERT --}}
              
                <table class="table">
                  @if( $total == null)
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
                    <thead class="table-secondary th-header">
                      <tr>
                        <th scope="col" class="th-header">Hapus</th>
                        <th scope="col" class="th-header">Gambar</th>
                        <th scope="col" class="th-header">Produk</th>
                        <th scope="col" class="th-header">Harga</th>
                        <th scope="col" class="th-header">Jumlah</th>
                        <th scope="col" class="th-header">Subtotal</th>
                      </tr>
                    </thead>
                    <tbody class="align-middle">
                      @foreach ( $datacart as $kuncicart)
                      <tr>
                        <th scope="row"><a href="{{ route('destroy', $kuncicart->id) }}"><i class="bi bi-x-circle-fill" style="font-size: 25px;"></i></a></th>
                        <td><img src="{{ $kuncicart->image }}" alt="" class="img-keranjang"></td>
                        <td>{{ $kuncicart->nama_produk }}</td>
                        <td>Rp {{ $kuncicart->harga_produk }},-</td>
                        <td>
                            
                            <a href="{{ url('/keranjang/kurangq/'.$kuncicart->id) }}" class="btn btn-dark btn-sm"><i class="bi bi-dash"></i></a>
                            <span class="mx-2">{{ $kuncicart->unit_produk }}</span>
                            <a href="{{ url('/keranjang/tambahq/'.$kuncicart->id) }}" class="btn btn-dark btn-sm"><i class="bi bi-plus-lg text-white"></i></a>
                        </td>
                        <td>Rp {{ $kuncicart->harga_produk*$kuncicart->unit_produk }},-</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row row-keranjang">
            <div class="col table-responsive">
                <table class="table ms-auto text-center mb-5 mt-3 mx-3" id="table-checkout">
                    <thead class="table-secondary">
                      <tr>
                        <th scope="col" colspan="2" class="th-header">Total Keranjang Belanja</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if( $total == null)
                      @else
                      <tr>
                        <td class="fw-bold th-header">Total Harga</td>
                        <input type="hidden" value="{{$total}}" name="total_produk"/>
                        <td class="th-header">Rp {{ $total }},-</td>
                      </tr>
                      <tr>
                          <td colspan="2" class="th-header">
                              <div class="btn-checkout d-grid">
                                  <a href="/checkout" class="btn btn-dark mx-4">Checkout</a>
                              </div>
                          </td>
                      </tr>
                      @endif
                      </form>
                    </tbody>
                  </table>
                  @endif
            </div>
        </div>
    </div>
    

      
    @include('partials.footer')
    @include('partials.navbarbot')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    
   
  </body>
</html>