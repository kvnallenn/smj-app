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
          <li class="breadcrumb-item"><a href="/keranjang">Status Pesanan</a></li>
          
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
                      <div class="alert alert-warning d-flex d-inline align-items-center alert-dismissible fade show" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
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
                    <thead class="table-secondary th-header">
                      <tr>
                        <th scope="col" class="th-header">Invoice</th>
                        <th scope="col" class="th-header">Nama</th>
                        <th scope="col" class="th-header">Nama Rekening</th>
                        <th scope="col" class="th-header">Nama Bank</th>
                        <th scope="col" class="th-header">Nominal Transfer</th> 
                        <th scope="col" class="th-header">Status</th>
                      </tr>
                    </thead>
                    <tbody class="align-middle">
                      @foreach ($datapay as $item)
                      <tr>
                        <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                        <td>{{ $item->nama_user }}</td>
                        <td>{{ $item->nama_rek }}</td>
                        <td>{{ $item->nama_bank }}</td>
                        <td>{{ $item->nominal_transfer }}</td>
                        <td>
                          
                          @if ($item->status_transaksi == null)
                          <span class="badge bg-warning">Pending</span>
                          @elseif($item->status_transaksi == "Sukses")
                          <span class="badge bg-success">Disetujui</span>
                          @elseif($item->status_transaksi == "Tolak")
                          <span class="badge bg-danger">Ditolak</span>
                          @endif


                        </td>
                      </tr>
                      @endforeach
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