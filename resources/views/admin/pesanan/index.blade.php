<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT Sentra Medan Jaya | {{ $title }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/adminindex.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/4f72237084.js" crossorigin="anonymous"></script>
    
        </head>
        <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            @include('partials/navbaradmin')
                <!-- Page content-->
                <div class="container-fluid">
                    <h5 class="mt-4 fw-bolder">Daftar Pesanan</h1>
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Semua Pesanan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Pesanan Baru</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Siap Dikirim</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Dalam Pengiriman</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Dikomplain</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Pesanan Selesai</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Dibatalkan</button>
                                  </li>
                              </ul>
                            </div>
                           <div class="container-fluid">
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade deskripsi show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                                   <div class="row mt-3">
                                       <div class="col-xl-3">
                                        <form class="form-inline">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                              </div>
                                              <input type="text" class="form-control rounded" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                              <span class="input-group-text rounded" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                            </div>
                                          </form>
                                       </div>
                                       <div class="col-xl-3" id="input-filter">
                                        <form class="form-inline">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                              </div>
                                              <input type="text" class="form-control rounded" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                              <span class="input-group-text rounded" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                            </div>
                                          </form>
                                       </div>
                                       <div class="col-xl-3" id="input-filter">
                                        <div class="dropdown">
                                          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown link
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                          </ul>
                                        </div>
                                       </div>
                                   </div>
                                   <div class="table-responsive-sm mt-4">
                                    <table class="table table-responsive table-hover">
                                      <thead class="table-secondary">
                                      <tr>
                                        <td>Pesanan</td>
                                        <td>Nama Produk</td>
                                        <td>Harga</td>
                                        <td>Pembeli</td>
                                        <td>Status Pesanan</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>SMJ-0000000001</td>
                                        <td>Gas Elpiji 5KG</td>
                                        <td>Rp 25.000</td>
                                        <td>Kevin Allen</td>
                                        <td>Pesanan Selesai</td>
                                      </tr>
                                    </tbody>
                                    </table>
                                  </div>
                                  <div class="table-responsive-sm mt-4">
                                    <table class="table table-responsive table-hover">
                                      <thead class="table-secondary"> 
                                      <tr>
                                        <td>Pesanan</td>
                                        <td>Nama Produk</td>
                                        <td>Harga</td>
                                        <td>Pembeli</td>
                                        <td>Status Pesanan</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>SMJ-0000000001</td>
                                        <td>Gas Elpiji 5KG</td>
                                        <td>Rp 25.000</td>
                                        <td>Kevin Allen</td>
                                        <td>Pesanan Selesai</td>
                                      </tr>
                                    </tbody>
                                    </table>
                                  </div>
                                
                                </div>
                                <div class="tab-pane fade review" id="review" role="tabpanel" aria-labelledby="review-tab">
                                  
                              </div>
                              
                            </div>
                           
                        </div>
                      </div>
                
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
       
    </body>
</html>


