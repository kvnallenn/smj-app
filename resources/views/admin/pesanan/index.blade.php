<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/adminindex.css">
    <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="icon" href="/img/Logo-Sentra.png" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

  @include('../partials/navbaradmin')

    <div class="home_content">
        <section class="p-4" id="">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col">
                        <h4>Daftar Pesanan</h4>
                    </div>
                </div>
                
              
              {{-- TAMBAH MODAL --}}

                    <div class="row">
                      <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                              <div>
                                <h3 class="text-info">{{ $hitungmodel }}</h3>
                                <p class="mb-0">Total Pesanan</p>
                              </div>
                              <div class="align-self-center">
                                <i class="fas fa-book-open text-info fa-3x"></i>
                              </div>
                            </div>
                            <div class="px-md-1">
                              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                              <div>
                                <h3 class="text-warning">{{ $hitungmodel2 }}</h3>
                                <p class="mb-0">Pesanan belum diproses</p>
                              </div>
                              <div class="align-self-center">
                                <i class="far fa-comments text-warning fa-3x"></i>
                              </div>
                            </div>
                            <div class="px-md-1">
                              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;" aria-valuenow="35"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                              <div>
                                <h3 class="text-success">{{ $hitungmodel3 }}</h3>
                                <p class="mb-0">Total Pesanan Selesai</p>
                              </div>
                              <div class="align-self-center">
                                <i class="fas fa-mug-hot text-success fa-3x"></i>
                              </div>
                            </div>
                            <div class="px-md-1">
                              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                              <div>
                                <h3 class="text-danger">{{ $hitungmodel4 }}</h3>
                                <p class="mb-0">Total Komplain</p>
                              </div>
                              <div class="align-self-center">
                                <i class="fas fa-map-signs text-danger fa-3x"></i>
                              </div>
                            </div>
                            <div class="px-md-1">
                              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;" aria-valuenow="40"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    {{-- TAMBAH MODAL --}}

                {{-- NOTIFIKASI BERHASIL --}}
                @if(session()->has('notifikasiproduk'))

                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="alert alert-success d-flex d-inline align-items-center alert-dismissible fade show" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                    <div class="mx-2">
                 {{ session('notifikasiproduk') }}
                    </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    </div>
                    </div>
                @endif

                {{-- NOTIFIKASI BERHASIL --}}

                {{-- NOTIFIKASI ERROR --}}
               
                @foreach($errors->all() as $error)
                <div class="row">
                  <div class="col-xl-6 col-lg-6">
                      <div class="alert alert-danger d-flex d-inline align-items-center alert-dismissible fade show" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                  <div>
                      <strong class="mx-2">{{ $error }}</strong>
                  </div>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  </div>
                  </div>
                @endforeach
                 {{-- NOTIFIKASI ERROR --}}
                
                    <a target="_blank" href="/admin/exportexcel" class="btn btn-success mb-4" data-bs-dismiss="alert" aria-label="Close">Export Excel</a>
                
                 
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Semua Pesanan</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Belum Diproses</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sedang Dikirim</button>
                    <button class="nav-link" id="nav-komplain-tab" data-bs-toggle="tab" data-bs-target="#nav-komplain" type="button" role="tab" aria-controls="nav-komplain" aria-selected="false">Pesanan Dikomplain</button>
                    <button class="nav-link" id="nav-selesai-tab" data-bs-toggle="tab" data-bs-target="#nav-selesai" type="button" role="tab" aria-controls="nav-selesai" aria-selected="false">Pesanan Selesai</button>
                    
                  </div>
                </nav>
                <div class="tab-content p-2 mt-2" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="row row-keranjang">
                      <div class="col table-responsive">
                          <table class="table text-center">
                              <thead class="table-secondary th-header">
                                <tr>
                                  <th scope="col" class="th-header">No</th>
                                  <th scope="col" class="th-header">Invoice</th>
                                  <th scope="col" class="th-header">Nama User</th>
                                  <th scope="col" class="th-header">Tanggal Pembelian</th>
                                  <th scope="col" class="th-header">Nominal Transfer</th>
                                  <th scope="col" class="th-header">Status Pesanan</th>
                                  <th scope="col" class="th-header">Alasan Komplain</th>
                                  <th scope="col" class="th-header">Gambar Komplain</th>
                                </tr>
                              </thead>
                              <tbody class="align-middle">
                                @foreach ($model as $item)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                  <td>{{ $item->nama_user }}</td>
                                  <td>{{ $item->created_at->format('d M Y') }}</td>
                                  <td>Rp {{ $item->nominal_transfer }},-</td>
                                    @if($item->status_transaksi == "Tolak")
                                    <td><span class="badge text-bg-danger">Ditolak</span></td>
                                    @elseif ( $item->status_pesanan == null)
                                    <td>
                                     <form action="{{ url('/admin/pesanan/'.$item->id) }}" method="post">
                                      @csrf
                                      @method('POST')
                                     <input type="hidden" value="Terkirim" name="status-pesanan">
                                     <input type="hidden" value="menyetujui pengiriman pesanan dengan invoice" name="pesan">
                                     <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user"> 
                                     <button type="submit" class="btn btn-success btn-sm">Kirim Pesanan</button>
                                     </form>
                                    </td>
                                    @elseif( $item->status_pesanan == "Komplain" )
                                    <td><span class="badge bg-danger">Proses Komplain</span></td>
                                    @elseif( $item->status_pesanan == "Selesai" )
                                    <td><span class="badge bg-success">Pesanan Selesai</span></td>
                                    @else
                                    <td><span class="badge text-bg-warning">Sedang Dikirim</span></td>
                                    @endif
                                    @if ( $item->alasan_komplain == null || $item->gambar_komplain == null)
                                   <td></td>
                                   <td></td>
                                    @else
                                    <td scope="col" class="th-header">{{ $item->alasan_komplain }}</td>
                                    <td scope="col" class="th-header"><img id="image_preview" src="{{ asset('storage/'.$item->gambar_komplain)}}" width="75px" class="img-fluid"/></td>
                                    @endif
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                      </div>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="row row-keranjang">
                      <div class="col table-responsive">
                          <table class="table text-center">
                              <thead class="table-secondary th-header">
                                <tr>
                                  <th scope="col" class="th-header">No</th>
                                  <th scope="col" class="th-header">Invoice</th>
                                  <th scope="col" class="th-header">Nama User</th>
                                  <th scope="col" class="th-header">Tanggal Pembelian</th>
                                  <th scope="col" class="th-header">Nominal Transfer</th>
                                  <th scope="col" colspan="2" class="th-header">Status Pesanan</th>
                                </tr>
                              </thead>
                              <tbody class="align-middle">
                                @foreach ($model1 as $item)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                  <td>{{ $item->nama_user }}</td>
                                  <td>{{ $item->created_at->format('d M Y') }}</td>
                                  <td>{{ $item->nominal_transfer }}</td>
                                    @if ( $item->status_pesanan == null)
                                    <td>
                                     <form action="{{ url('/admin/pesanan/'.$item->id) }}" method="post">
                                      @csrf
                                      @method('POST')
                                     <input type="hidden" value="Terkirim" name="status-pesanan">
                                     <button type="submit" class="btn btn-success btn-sm">Kirim Pesanan</button>
                                     </form>
                                    </td>
                                    @else
                                    <td><span class="badge text-bg-warning">Sedang Dikirim</span></td>
                                    @endif
                                  </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                      </div>
                  </div>


                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div class="row row-keranjang">
                      <div class="col table-responsive">
                          <table class="table text-center">
                              <thead class="table-secondary th-header">
                                <tr>
                                  <th scope="col" class="th-header">No</th>
                                  <th scope="col" class="th-header">Invoice</th>
                                  <th scope="col" class="th-header">Nama User</th>
                                  <th scope="col" class="th-header">Tanggal Pembelian</th>
                                  <th scope="col" class="th-header">Nominal Transfer</th>
                                  <th scope="col" colspan="2" class="th-header">Status Pesanan</th>
                                </tr>
                              </thead>
                              <tbody class="align-middle">
                                @foreach ($model2 as $item)
                                @if ($item->status_pesanan == "Tolak")

                                @else
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                  <td>{{ $item->nama_user }}</td>
                                  <td>{{ $item->created_at->format('d M Y') }}</td>
                                  <td>{{ $item->nominal_transfer }}</td>
                                    @if($item->status_transaksi == "Tolak")
                                    <td><span class="badge text-bg-danger">Ditolak</span></td>
                                    @elseif ( $item->status_pesanan == null)
                                    <td>
                                     <form action="{{ url('/admin/pesanan/'.$item->id) }}" method="post">
                                      @csrf
                                      @method('POST')
                                     <input type="hidden" value="Terkirim" name="status-pesanan">
                                     <button type="submit" class="btn btn-success btn-sm">Kirim Pesanan</button>
                                     </form>
                                    </td>
                                    @else
                                    <td><span class="badge text-bg-warning">Sedang Dikirim</span></td>
                                    @endif
                                  </td>
                                  </tr>
                                  @endif
                                @endforeach
                              </tbody>
                            </table>
                      </div>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="nav-selesai" role="tabpanel" aria-labelledby="nav-selesai-tab" tabindex="0">
                    <div class="row row-keranjang">
                      <div class="col table-responsive">
                          <table class="table text-center">
                              <thead class="table-secondary th-header">
                                <tr>
                                  <th scope="col" class="th-header">No</th>
                                  <th scope="col" class="th-header">Invoice</th>
                                  <th scope="col" class="th-header">Nama User</th>
                                  <th scope="col" class="th-header">Tanggal Pembelian</th>
                                  <th scope="col" class="th-header">Nominal Transfer</th>
                                  <th scope="col" colspan="2" class="th-header">Status Pesanan</th>
                                </tr>
                              </thead>
                              <tbody class="align-middle">
                                @foreach ($model3 as $item)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                  <td>{{ $item->nama_user }}</td>
                                  <td>{{ $item->created_at->format('d M Y') }}</td>
                                  <td>{{ $item->nominal_transfer }}</td>
                                    @if ( $item->status_pesanan == null)
                                    <td>
                                     <form action="{{ url('/admin/pesanan/'.$item->id) }}" method="post">
                                      @csrf
                                      @method('POST')
                                     <input type="hidden" value="Terkirim" name="status-pesanan">
                                     <button type="submit" class="btn btn-success btn-sm">Kirim Pesanan</button>
                                     </form>
                                    </td>
                                    @else( $item->status_pesanan == "Selesai" )
                                    <td><span class="badge bg-success">Pesanan Selesai</span></td>
                                    @endif
                                  </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                      </div>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="nav-komplain" role="tabpanel" aria-labelledby="nav-komplain-tab" tabindex="0">
                    <div class="row row-keranjang">
                      <div class="col table-responsive">
                          <table class="table text-center">
                              <thead class="table-secondary th-header">
                                <tr>
                                  <th scope="col" class="th-header">No</th>
                                  <th scope="col" class="th-header">Invoice</th>
                                  <th scope="col" class="th-header">Nama User</th>
                                  <th scope="col" class="th-header">Tanggal Pembelian</th>
                                  <th scope="col" class="th-header">Nominal Transfer</th>
                                  <th scope="col" class="th-header">Status Pesanan</th>
                                  <th scope="col" class="th-header">Alasan Komplain</th>
                                  <th scope="col" class="th-header">Gambar Komplain</th>
                                </tr>
                              </thead>
                              <tbody class="align-middle">
                                @foreach ($model4 as $item)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                  <td>{{ $item->nama_user }}</td>
                                  <td>{{ $item->created_at->format('d M Y') }}</td>
                                  <td>{{ $item->nominal_transfer }}</td>
                                    @if ( $item->status_pesanan == null)
                                    <td>
                                     <form action="{{ url('/admin/pesanan/'.$item->id) }}" method="post">
                                      @csrf
                                      @method('POST')
                                     <input type="hidden" value="Terkirim" name="status-pesanan">
                                     <button type="submit" class="btn btn-success btn-sm">Kirim Pesanan</button>
                                     </form>
                                    </td>
                                    @elseif( $item->status_pesanan == "Komplain" )
                                    <td><span class="badge bg-danger">Proses Komplain</span></td>
                                    @else
                                    @endif
                                    @if ( $item->alasan_komplain == null || $item->gambar_komplain == null)
                                    <td></td>
                                    <td></td>
                                     @else
                                     <td scope="col" class="th-header">{{ $item->alasan_komplain }}</td>
                                     <td scope="col" class="th-header"><img id="image_preview" src="{{ asset('storage/'.$item->gambar_komplain)}}" width="75px" class="img-fluid"/></td>
                                     @endif
                                  </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                      </div>
                  </div>
                  </div>
                </div>
                    
                </div>
                </div>
                        
            </div>

            </div>
         </section>
    </div>



















    <script src="../js/Imagepreview.js"></script>
    <script src="../js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>