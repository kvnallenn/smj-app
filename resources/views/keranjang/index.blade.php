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
                <table class="table">
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
                            <button type="button" class="btn btn-dark btn-sm"><i class="bi bi-dash"></i></button>
                            <span class="mx-2">{{ $kuncicart->unit_produk }}</span>
                            <button type="button" class="btn btn-dark btn-sm"><i class="bi bi-plus-lg text-white"></i></button>
                        </td>
                        <td>Rp {{ $kuncicart->harga_produk }},-</td>
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
                      <tr>
                        <td class="fw-bold th-header">Total Harga</td>
                        <td class="th-header">Rp {{ $total }},-</td>
                      </tr>
                      <tr>
                          <td colspan="2" class="th-header">
                              <div class="btn-checkout d-grid">
                                  <button class="btn btn-dark mx-4">Checkout</button>
                              </div>
                          </td>
                      </tr>
                    </tbody>
                  </table>
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