<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/adminindex.css">
    <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                              <a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Stock Opname</a>
                              <a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#updateModal--{{ $datalistproduk->id }}">Ubah Produk</a>
                            </div>
                          </div>
                    </div>  
                    <!-- MODAL -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Stock Opname</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group row mb-3 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Tanggal</label>
                                        <div class="col">
                                          <input type="email" class="form-control" id="inputEmail3" placeholder="Kode Produk">
                                        </div>
                                    </div>
                                    <fieldset disabled>
                                    <div class="form-group row mb-3 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Stock saat ini</label>
                                        <div class="col-3">
                                          <input type="number" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                </fieldset>
                                    <div class="form-group row mb-4 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Jumlah Penyesuaian</label>
                                        <div class="col-3">
                                          <input type="number" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3 mt-2">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Kuantitas Sekarang</label>
                                        <div class="col-3">
                                          <input type="number" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    <!-- MODAL -->

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
                                <input type="number" required class="form-control" id="harga_produk" name="harga_produk" value="{{ $datalistproduk->id }}">
                              </div>
                              <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                                <img id="image_preview" src="{{ asset('storage/'.$datalistproduk->image)}}" class="col-sm-5 p-3 d-block"/>
                                <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file" id="formFileMultiple" name="gambar_produk" id="gambar_produk" onchange="previewImage(event)" multiple>
                              @error('gambar_produk')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                              @enderror
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                          </div>
                      </form>   
                        </div>
                      </div>
                   </div>
                  

                    {{-- UPDATE MODAL --}}
                </div>
                <div class="row row-keranjang">
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
                                  <tr>
                                    <th scope="row">001/001/001</th>
                                    <td>Gas Elpiji 5KG</td>
                                    <td>Gas</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">001/001/001</th>
                                    <td>Gas Elpiji 5KG</td>
                                    <td>Gas</td>
                                  </tr>
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

















    <script src="/js/Imagepreview.js"></script>
    <script src="/js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>