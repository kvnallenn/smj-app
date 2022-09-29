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

  @include('partials/navbaradmin')

    <div class="home_content">
        <section class="p-4" id="section-wrapper">
            <div class="container-fluid border p-4">
                <div class="row"> 
                    <div class="col">
                        <h4>Kategori Produk</h4>
                    </div>
                    
                    <div class="col-xl-2 pb-3" id="produk-action">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                            <div class="dropdown-menu">
                            <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Kategori Baru</a>
                            </div>
                        </div>

                        {{-- MODAL --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <form action="{{ url('admin/adminproduk/kategoriproduk/') }}" method="POST">
                                    @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">Kode Kategori</label>
                                      <input type="text" required class="form-control" id="kode_kategori" name="kode_kategori">
                                    </div>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Jenis Kategori</label>
                                      <input type="text" class="form-control" id="jenis_kategori" name="jenis_kategori">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>   
                              </div>
                            </div>
                        
                    </div>
                        
                        {{-- MODAL --}}

                    </div>  
                </div>
                    <div class="row row-keranjang">
                        <div class="col table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-secondary th-header">
                                  <tr>
                                    <th scope="col" class="th-header">Kode Kategori</th>
                                    <th scope="col" class="th-header">Jenis Kategori</th>
                                    <th scope="col" class="th-header">Action</th>
                                </thead>
                                <tbody class="align-middle">
                                  
                                    @foreach ($datas as $kunci)
                                        <tr>
                                            <th scope="row">{{ $kunci->kode_kategori }}</th>
                                            <td><a href="/admin/adminproduk/detailproduk">{{ $kunci->jenis_kategori }}</td>
                                            <td>Edit</td> 
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



















    
    <script src="/js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>