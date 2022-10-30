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
              
              {{-- MODAL PDF --}}

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Harap Menunggu</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Harap Menunggu Proses Verifikasi</label>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              {{-- MODAL PDF --}}


          {{-- STATUS KOMPLAIN UPDATE --}}

          @foreach ( $datapay as $items )
          <div class="modal fade" id="upkomplainmodal--{{ $items->invoice_produk }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Komplain</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{ url('/status-pesanan/komplain/status/'.$items->invoice_produk) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <label for="exampleFormControlTextarea1" class="form-label">Apakah proses komplain anda sudah selesai ?</label>
                    <input type="hidden" value="Selesai" name="komplain-status">
                    <input type="hidden" value="{{ $items->invoice_produk }}" name="komplain-invoice">
                  
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                  <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach


          {{-- STATUS KOMPLAIN UPDATE --}}

          {{-- MODAL Komplain --}}
          @foreach ( $datapay as $items )
          <div class="modal fade" id="komplainmodal--{{ $items->invoice_produk }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajukan Komplain </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{ url('/status-pesanan/komplain/'.$items->invoice_produk) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alasan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alasan_komplain" rows="3"></textarea>
                    <input type="hidden" value="{{ $items->invoice_produk }}" name="kunci-invoice">
                    <input type="hidden" value="Komplain" name="status-komplain">
                  </div>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Bukti Komplain ( Bila Perlu )</label>
                    <img id="image_preview" class="col-sm-5 p-3 d-block img-fluid"/>
                    <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file" id="formFileMultiple" name="gambar_komplain" id="gambar_produk" onchange="previewImage(event)" multiple>
                  @error('gambar_produk')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                  @enderror
                  </div>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                  <button type="submit" class="btn btn-primary">Ajukan Komplain</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach
          {{-- MODAL Komplain --}}

          {{-- MODAL REVIEW --}}
          @foreach ( $datapay as $items )
          <form action="{{ url ('/admin/pesanan/status/'.$items->invoice_produk) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
          <div class="modal fade" id="reviewProduk--{{ $items->invoice_produk }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Berikan Rating</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <label for="inputPassword6" class="col-form-label">Rating :</label>
                    </div>
                    <div class="col-auto">
                      <select class="form-select" aria-label="Default select example" name="bintang" >
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="col-auto">
                      <span id="passwordHelpInline" class="form-text">
                        1 - 5 ( Buruk - Sangat Bagus )
                      </span>
                    </div>
                    <div class="col-auto mt-3">
                      <label for="inputPassword6" class="col-form-label">Komentar :</label>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="komentar"></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                    <div class="col-auto mt-3">
                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                        <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file" id="formFileMultiple" name="gambar_produk" id="gambar_produk" onchange="previewImage(event)" multiple>
                         @error('gambar_produk')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                      @enderror
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" value="Selesai" name="status-pengiriman">
                  <input type="hidden" value="{{ $items->invoice_produk }}" name="kode-invoice">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Rating</button>
                </form>
                <form action="{{ url ('/admin/pesanan/status/'.$items->invoice_produk) }}" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" value="Selesai" name="status-pengiriman">
                  <input type="hidden" value="{{ $items->invoice_produk }}" name="kode-invoice">
                  <button type="submit" class="btn btn-primary">Tidak Perlu</button>
                  
                </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          {{-- MODAL REVIEW --}}

          {{-- MODAL TERIMA Pesanan --}}
           @foreach ( $datapay as $items )
            <div class="modal fade" id="editmodal--{{ $items->invoice_produk }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Terima Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah produk anda sudah diterima ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#komplainmodal--{{ $items->invoice_produk }}">Ajukan Komplain</button>
                    <form action="{{ url ('/admin/pesanan/status/'.$items->invoice_produk) }}" method="POST">
                      @csrf
                      @method('POST')
                      <input type="hidden" value="Selesai" name="status-pengiriman">
                      <input type="hidden" value="{{ $items->invoice_produk }}" name="kode-invoice">
                      <button type="button" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#reviewProduk--{{ $items->invoice_produk }}" class="btn btn-primary">Sudah Diterima</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
              {{-- MODAL TERIMA PESANAN --}}

                <table class="table">
                  @if( $datapay == null)
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
                        <th scope="col" class="th-header">Invoice</th>
                        <th scope="col" class="th-header">Export</th>
                        <th scope="col" class="th-header">Nama</th>
                        <th scope="col" class="th-header">Nama Rekening</th>
                        <th scope="col" class="th-header">Nama Bank</th>
                        <th scope="col" class="th-header">Nominal Transfer</th> 
                        <th scope="col" class="th-header">Status Pembayaran</th>
                        <th scope="col" class="th-header text-right">Status Produk</th>
                        @foreach ($datapay as $item)
                        @if($item->status_pesanan == "Terkirim")
                        <th scope="col" class="th-header"></th>
                        @else
                        @endif
                        @endforeach
                      </tr>
                    </thead>
                    <tbody class="align-middle fw-bold">
                      @foreach ($datapay as $item)
                      <tr>
                        <td>
                          @if($item->status_transaksi == "Sukses")
                          <a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a>
                          @elseif(auth()->user()->is_admin == 1)
                          <a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a>
                          @else
                          <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"class="col-form-label">SMJ-{{ $item->invoice_produk }}</a>
                          @endif
                        </td>
                        <td>
                          @if($item->status_transaksi == "Sukses")
                          <a href="{{ url('/cetak_invoice/'.$item->invoice_produk) }}" type="button" class="btn btn-success mb-2">PDF</a></button>
                          @elseif (auth()->user()->is_admin == 1)
                          <a href="{{ url('/cetak_invoice/'.$item->invoice_produk) }}" type="button" class="btn btn-success mb-2">PDF</a></button>
                          @else
                          <a href="#" type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><strong>PDF</strong></a></button>
                          @endif
                        </td>
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
                        <td>
                          @if($item->status_transaksi == "Tolak")
                          <span class="badge bg-danger">Ditolak</span>
                          @elseif ($item->status_pesanan == null)
                          <span class="badge bg-warning">Pending</span>
                          @elseif($item->status_pesanan == "Terkirim")
                          <button type="submit" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editmodal--{{ $item->invoice_produk }}"><span class="badge bg-secondary">Sedang Dikirim</span></button>
                          @elseif($item->status_pesanan == "Tolak")
                          <span class="badge bg-danger">Ditolak</span>
                          @elseif ($item->status_pesanan == "Selesai")
                          <span class="badge bg-success">Pesanan Selesai</span>
                          @else
                          <button type="submit" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#upkomplainmodal--{{ $item->invoice_produk }}"><span class="badge bg-danger">Proses Komplain</span></button>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                   
                  </table>
                  @endif
            </div>
        </div>
    </div>
    

      
    @include('partials.footer')
    @include('partials.navbarbot')
    <script src="../js/Imagepreview.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    <script src="https://kit.fontawesome.com/4f72237084.js" crossorigin="anonymous"></script>
    
   
  </body>
</html>