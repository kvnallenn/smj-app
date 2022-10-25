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
  
   @include('partials/navbaradmin')



    <div class="home_content">
      <section class="p-4" id="section-wrapper">
        <div class="container-fluid">
            <h4 class="mb-3">Welcome, Kevin Allen </h4>
            <h5 class="fw-bolder mb-2 mx-1">Aktvitas Penting</h6>
                <div class="row mt-3">
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
                <div class="row">
                    <div class="col-sm-12 col-xl" id="canvas-js">
                        <h5 class="fw-bolder mb-3 mx-1 mt-5">Statistik Penjualan</h5>
                        <canvas id="myChart" width="600" height="250"></canvas>
                    </div>
                    <div class="col-sm-12 col-xl mt-5">
                        <h5 class="fw-bolder mb-3 mx-1">Riwayat Aktvitas</h5>
                    <div id="riwayat-log">
                      <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade show" data-bs-autohide="false">
                        <div class="toast-header">
                          <img src="/img/Logo-Sentra.png" class="img-fluid me-2" width="25" height="70" alt="">
                          <strong class="me-auto">Riwayat</strong>
                          <small>11 mins ago</small>
                        </div>
                        <div class="toast-body">
                          <img src="../img/assets/orangcuk.png" class="img-fluid icon-org" alt=""> <span class="pesan-notif">Kevin Allen telah masuk</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    </div>



















    
    <!-- Javascript -->
    <script src="../js/Chart.js"></script>
    <script src="../js/Sidebar.js"></script>

</body>
</html>