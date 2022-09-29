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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
   @include('partials.navbaradmin')

    <div class="home_content">
        <section class="p-4" id="section-wrapper">
            <div class="container-fluid border p-4">
                <div class="row"> 
                    <div class="col">
                        <h4>Tambah Produk</h4>
                    </div>
                </div>
                <div class="row row-keranjang">
                    <h5>Informasi</h5>
                    <form>
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Kode Produk">
                            </div>
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                          <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Nama Produk">
                          </div>
                        </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kuantitas</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="number" class="form-control" id="inputEmail3" placeholder="Jumlah Produk">
                            </div>
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                          </div>
                        </div>
                      </form>
                </div>
                </div>
                        
            </div>

            </div>
         </section>
    </div>

















    <script src="/js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>