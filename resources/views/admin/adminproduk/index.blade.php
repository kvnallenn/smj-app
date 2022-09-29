<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/adminindex.css">
    <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
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
                              <a class="dropdown-item" href="/admin/adminproduk/tambahproduk">Produk Baru</a>
                            </div>
                          </div>
                    </div>  
                </div>
                    <div class="row">
                      <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                              <div>
                                <h3 class="text-info">278</h3>
                                <p class="mb-0">New Posts</p>
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
                                <h3 class="text-warning">156</h3>
                                <p class="mb-0">New Comments</p>
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
                                <h3 class="text-success">64.89 %</h3>
                                <p class="mb-0">Bounce Rate</p>
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
                                <h3 class="text-danger">423</h3>
                                <p class="mb-0">Total Visits</p>
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
                    <div class="row row-keranjang">
                        <div class="col table-responsive">
                            <table class="table text-center">
                                <thead class="table-secondary th-header">
                                  <tr>
                                    <th scope="col" class="th-header">Kode Produk</th>
                                    <th scope="col" class="th-header">Nama Produk</th>
                                    <th scope="col" class="th-header">Kategori Produk</th>
                                    <th scope="col" class="th-header">Kuantitas</th>
                                    <th scope="col" class="th-header">Unit</th>
                                    <th scope="col" class="th-header">Harga Jual</th>
                                  </tr>
                                </thead>
                                <tbody class="align-middle">
                                  <tr>
                                    <th scope="row">001/001/001</th>
                                    <td><a href="/admin/adminproduk/detailproduk">Gas Elpiji 5KG</td>
                                    <td>Gas</td>
                                    <td>12</td>
                                    <td>KG</span>
                                    </td>
                                    <td>Rp. 25.000</td>
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



















    
    <script src="../js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>