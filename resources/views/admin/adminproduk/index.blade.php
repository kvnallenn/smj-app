<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/adminindex.css">
    <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="icon" href="/img/Logo-Sentra.png" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

  @include('../partials/navbaradmin')

    <div class="home_content">
        <section class="p-4" id="section-wrapper">
            <div class="container-fluid border p-4">
                <div class="row"> 
                    <div class="col">
                        <h4>Produk</h4>
                    </div>
                    <div class="col-xl-2 pb-3" id="produk-action">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                            <div class="dropdown-menu">
                              <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambahModal">Produk Baru</a>
                            </div>
                          </div>
                    </div>  
                </div>

                

                <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>


                      
                  <form action="{{ url('admin/adminproduk/') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode Produk</label>
                            <input type="text" required class="form-control  @error('kode_produk') is-invalid @enderror" id="kode_produk" name="kode_produk" value="{{ old('kode_produk')}}">
                            @error('kode_produk')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                          @enderror
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Nama Produk</label>
                            <input type="text" required class="form-control" id="nama_produk" name="nama_produk">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Kategori Produk</label>
                            <select class="form-select" aria-label="Default select example" name="kategori_produk" >
                              @foreach ($datakategori as $kunci)
                              <option value="{{ $kunci->jenis_kategori }}">{{ $kunci->jenis_kategori }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Kuantitas Produk</label>
                            <input type="number" required class="form-control" id="kuantitas_produk" name="kuantitas_produk">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Unit Produk</label>
                            <select class="form-select" aria-label="Default select example" name="unit_produk">
                              <option value="PCS">PCS</option>
                              <option value="KG">KG</option>
                              <option value="BTL">BTL</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Harga Produk</label>
                            <input type="number" required class="form-control" id="harga_produk" name="harga_produk">
                          </div>
                          <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                            <img id="image_preview" class="col-sm-5 p-3 d-block img-fluid"/>
                            <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file" id="formFileMultiple" name="gambar_produk" id="gambar_produk" onchange="previewImage(event)" multiple>
                          @error('gambar_produk')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                          @enderror
                          </div>
                          <input type="hidden" value="menambah produk baru" name="pesan">
                          <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                      </div>
                  </form>   
                    </div>
                  </div>
              
               </div>
              
              {{-- TAMBAH MODAL --}}

                    <div class="row">
                      <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                              <div>
                                <h3 class="text-info">{{ $hitungproduk }}</h3>
                                <p class="mb-0">Total Produk</p>
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
                                <h3 class="text-danger">{{ $hitungproduk2 }}</h3>
                                <p class="mb-0">Produk Hampir Habis</p>
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

                    {{-- MODAL EXCEL TAMBAH --}}

                      <div class="modal fade" id="excelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Import Product</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="mb-3">
                                <form action="/admin/pesanan/importproduk" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('post')
                                <label for="formFile" class="form-label">Masukkan File Excel </label>
                                <input class="form-control" type="file" id="formFile" name="file">
                             
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>

                    {{-- MODAL EXCEL TAMBAH --}}

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

                 <a target="_blank" href="/admin/pesanan/exportproduk" class="btn btn-success mb-2" data-bs-dismiss="alert" aria-label="Close">Export Product</a>
                 <a target="_blank" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#excelModal">Import Product</a>
                  
                    <div class="row row-keranjang">
                        <div class="col table-responsive">
                          <table id="example" class="table table-striped" style="width:100%">
                                <thead class="table-warning th-header">
                                  <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori Produk</th>
                                    <th>Kuantitas</th>
                                    <th>Unit</th>
                                    <th>Harga Jual</th>
                                  </tr>
                                </thead>
                                <tbody class="align-middle">
                                  @foreach ($dataproduk as $kunciproduk)
                                      
                                  <tr>
                                    <td>{{ $kunciproduk->kode_produk}}</td>
                                    <td><a href="{{ url('admin/adminproduk/detailproduk/'.$kunciproduk->id) }}">{{ $kunciproduk->nama_produk}}</td>
                                    <td>{{ $kunciproduk->kategori_produk}}</td>
                                    <td>{{ $kunciproduk->kuantitas_produk}}</td>
                                    <td>{{ $kunciproduk->unit_produk}}</td>
                                    <td>Rp {{ $kunciproduk->harga_produk}},-</td>
                                  </tr>

                                  @endforeach
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>
                    {{ $dataproduk->links() }}
                </div>
                </div>
                        
            </div>

            </div>
         </section>
    </div>


















<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
    <script src="../js/Imagepreview.js"></script>
    <script src="../js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
          $('#example').DataTable();
      });
    
    </script>
    
</body>
</html>