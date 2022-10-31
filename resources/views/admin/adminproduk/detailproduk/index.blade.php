<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/adminindex.css">
    <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="/img/Logo-Sentra.png" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    
    @include('partials.navbaradmin')

    <div class="home_content">
        <section class="p-4" id="section-wrapper">
            <div class="container-fluid border p-4">
                <div class="row"> 
                    <div class="col">
                      <a class="icon-back" href="{{ url('admin/adminproduk/') }}"><i class="bi bi-arrow-left-square-fill" style="font-size: 30px;"></i></a>
                    </div>
                    
                    <div class="col-xl-2 pb-3" id="produk-action">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#updateStockModal--{{ $datalistproduk->id }}">Stock Opname</a>
                              <a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#updateModal--{{ $datalistproduk->id }}">Ubah Produk</a>
                              <a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#deskripsiModal--{{ $datalistproduk->id }}">Deskripsi Produk</a>
                              <a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#hapusModal--{{ $datalistproduk->id }}">Hapus Produk</a>
                            </div>
                          </div>
                    </div>  

                    {{-- HAPUS MODAL --}}
                    <div class="modal fade" id="hapusModal--{{ $datalistproduk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah anda ingin menghapus produk ini ?
                          </div>
                          <div class="modal-footer">
                            <form action="{{ url('admin/'.$datalistproduk->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Hapus</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- HAPUS MODAL --}}
                    <!-- MODAL -->

                    <div class="modal fade" id="updateStockModal--{{ $datalistproduk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Stock Opname</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                                    <fieldset disabled>
                                    <div class="form-group row mb-3 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Stock saat ini</label>
                                        <div class="col-3">
                                          <input type="number" class="form-control" id="stock-skrg" id="inputEmail3" placeholder="" value="{{ $datalistproduk->kuantitas_produk }}" oninput="add_number()">
                                        </div>
                                    </div>
                                </fieldset>
                                <form action="{{ url ('/admin/daftartransfer/npm/'.$datalistproduk->id) }}" method="post">
                                  @csrf
                                  @method('POST')
                                    <div class="form-group row mb-4 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Jumlah Penyesuaian</label>
                                        <div class="col-3">
                                          <input type="number" class="form-control" id="jlh-pny" name="stock-update" oninput="add_number()">
                                          <input type="hidden" name="id-produk" value="{{ $datalistproduk->id }}">
                                        </div>
                                    </div>
                                    <fieldset disabled>
                                    <div class="form-group row mb-3 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Kuantitas Sekarang</label>
                                        <div class="col-3">
                                          <input type="number" class="form-control" id="jlh-skrg" placeholder="" >
                                        </div>
                                    </div>
                                  </fieldset>
                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alasan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan"></textarea>
                                  </div>
                                  <input type="hidden" value="melakukan stock opname pada produk dengan kode" name="pesan">
                                  <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                               
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                             </form>
                          </div>
                        </div>
                      </div>

                    <!-- MODAL -->
                      {{-- UPDATE MODAL --}}
                                            
                                          
                      <div class="modal fade" id="deskripsiModal--{{ $datalistproduk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>


                            
                        <form action="{{ url('admin/deskripsi/'.$datalistproduk->id) }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Berat Produk</label>
                                  <input type="text" required class="form-control" id="berat_produk" name="berat_produk" value="{{ $datalistproduk->berat }}">
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Jenis Produk</label>
                                  <input type="text" required class="form-control" id="jenis_produk" name="jenis_produk" value="{{ $datalistproduk->jenis }}">
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Ukuran Produk</label>
                                  <input type="text" required class="form-control" id="ukuran_produk" name="ukuran_produk" value="{{ $datalistproduk->ukuran }}">
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Warna Produk</label>
                                  <input type="text" required class="form-control" id="warna_produk" name="warna_produk" value="{{ $datalistproduk->warna }}">
                                </div>
                            <input type="hidden" value="mengubah deskripsi produk" name="pesan">
                            <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Tambah Deskripsi</button>
                            </div>
                        </form>   
                          </div>
                        </div>
                      </div>


                      {{-- UPDATE MODAL --}}
                    {{-- UPDATE MODAL --}}
                      
                    
                    <div class="modal fade" id="updateModal--{{ $datalistproduk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
    
    
                          
                      <form action="{{ url('admin/adminproduk/detailproduk/'.$datalistproduk->id) }}" method="POST" enctype="multipart/form-data">
                          @method('put')
                          @csrf
                          <div class="modal-body">
                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Nama Produk</label>
                                <input type="text" required class="form-control" id="nama_produk" name="nama_produk" value="{{ $datalistproduk->nama_produk }}">
                              </div>
                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Kategori Produk</label>
                                <select class="form-select" aria-label="Default select example" name="kategori_produk" >
                                  @foreach ($datalistkategori as $kunci)
                                  <option value="{{ $kunci->jenis_kategori }}">{{ $kunci->jenis_kategori }}</option>
                                  @endforeach
                                </select>
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
                                <input type="number" required class="form-control" id="harga_produk" name="harga_produk" value="{{ $datalistproduk->harga_produk }}">
                              </div>
                              <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                                <img id="image_preview" src="{{ asset('storage/'.$datalistproduk->image)}}" class="col-sm-5 p-3 d-block img-fluid"/>
                                <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file" id="formFileMultiple" name="gambar_produk" id="gambar_produk" onchange="previewImage(event)" multiple>
                              @error('gambar_produk')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                              @enderror
                              </div>
                          </div>
                          <input type="hidden" value="mengubah produk dengan kode" name="pesan">
                          <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                          </div>
                      </form>   
                        </div>
                      </div>
                   </div>
                  

                    {{-- UPDATE MODAL --}}

                    {{-- HAPUS MODAL --}}

               

                    {{-- HAPUS MODAL --}}
                </div>
                <div class="row row-keranjang">
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

                  {{-- NOTIFIKASI BERHASIL --}}

                  @if(session()->has('notifikasiupdate'))
                  <div class="row">
                    <div class="col-xl-6 col-lg-6">
                      <div class="alert alert-success d-flex d-inline align-items-center alert-dismissible fade show" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                      <div class="mx-2">  
                          {{ session('notifikasiupdate') }}
                      </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    </div>
                  </div>
                @endif

               {{-- NOTIFIKASI BERHASIL --}}  
                   {{-- NOTIFIKASI BERHASIL --}}

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
 
                {{-- NOTIFIKASI BERHASIL --}}  
                    {{-- NOTIFIKASI GAGAL --}}

                    @if(session()->has('notifikasigagal'))
                    <div class="row">
                      <div class="col-xl-6 col-lg-6">
                        <div class="alert alert-warning d-flex d-inline align-items-center alert-dismissible fade show" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </svg>
                        <div class="mx-2">  
                            {{ session('notifikasigagal') }}
                        </div>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      </div>
                    </div>
                  @endif
  
                 {{-- NOTIFIKASI GAGAL --}} 
                 {{-- MODAL HAPUS STOCK Opname --}}
                 @foreach ($dataopname as $item)
                 <div class="modal fade" id="sopnameModal--{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="{{ url('/admin/adminproduk/detailproduk/hapus/'.$item->id) }}" method="POST">
                        @method('POST')
                        @csrf
                      <div class="modal-body">
                        <input type="hidden" value="{{ $item->id_produk }}" name="id-produk">
                        Apakah anda ingin menghapus data ini?
                      </div>
                      <input type="hidden" value="menghapus stock opname pada produk dengan kode" name="pesan">
                      <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                @endforeach
                 {{-- MODAL HAPUS STOCK Opname --}}
                    <h5>Detail Produk</h5>
                    <br>
                     

                    <div class="col table-responsive">
                        <table class="table">
                            <thead class="table-secondary th-header">
                                <tr class="informasi-produk">
                                  <th scope="col" class="th-header">Informasi</th>
                                  <th scope="col" class="th-header"></th>
                                </tr>
                            <tbody class="align-middle">
                              <tr>
                                <th scope="row">Gambar Produk</th>
                                <td><img src="{{ asset('storage/'.$datalistproduk->image)}}" alt="" width="200"></td>
                              </tr>
                              <tr>
                                <th scope="row">Nama Produk</th>
                                <td>{{ $datalistproduk->nama_produk }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Kategori Produk</th>
                                <td>{{ $datalistproduk->kategori_produk }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Kuantitas Produk</th>
                                <td>{{ $datalistproduk->kuantitas_produk }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Unit Produk</th>
                                <td>{{ $datalistproduk->unit_produk }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Harga Produk</th>
                                <td>Rp{{ $datalistproduk->harga_produk }},-</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                
                    <div class="row row-keranjang mt-3">
                        <h4>Transaksi Produk</h4>
                        <div class="col table-responsive">
                            <table class="table text-center">
                                <thead class="table-secondary th-header">
                                  <tr>
                                    <th scope="col" class="th-header">Tanggal</th>
                                    <th scope="col" class="th-header">Invoice</th>
                                    <th scope="col" class="th-header">Jumlah</th>
                                  </tr>
                                </thead>
                                <tbody class="align-middle">
                                  @foreach ($datainvoice as $item)
                                      
                                  
                                  <tr>
                                    <td scope="row">{{ $item->created_at->format('d M Y') }}</td>
                                    <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                    <td>-{{ $item->unit_produk}}</td>
                                  </tr>



                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <div class="row row-keranjang mt-3">
                      <h4>Stock Produk</h4>
                      <div class="col table-responsive">
                          <table class="table text-center">
                              <thead class="table-secondary th-header">
                                <tr>
                                  <th scope="col" class="th-header">Tanggal</th>
                                  <th scope="col" class="th-header">Waktu</th>
                                  <th scope="col" class="th-header">Invoice</th>
                                  <th scope="col" class="th-header">Jumlah</th>
                                  <th scope="col" class="th-header">Action</th>
                                </tr>
                              </thead>
                              <tbody class="align-middle">
                                @foreach ($dataopname as $item)
                                    
                                
                                <tr>
                                  <td scope="row">{{ $item->created_at->format('d M Y') }}</td>
                                  <td>{{ $item->created_at->format('H:i') }}</td>
                                  <td>{{ $item->alasan }}</td>
                                  <td>{{ $item->jumlah}}</td>
                                  <td><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#sopnameModal--{{ $item->id }}"><span class="badge text-bg-danger">Hapus</span></button></td>
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
         </section>
    </div>















    <script src="/js/Stockopname.js"></script>
    <script src="/js/Imagepreview.js"></script>
    <script src="/js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>