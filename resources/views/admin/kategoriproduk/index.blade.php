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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    

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

                    


                        {{-- TAMBAH MODAL --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <form action="{{ url('admin/kategoriproduk/') }}" method="POST">
                                  @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">Kode Kategori</label>
                                      <input type="text" required class="form-control @error('kode_kategori') is-invalid @enderror" id="kode_kategori" name="kode_kategori" value="{{old('kode_kategori')}}">
                                      @error('kode_kategori')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Jenis Kategori</label>
                                      <input type="text" required class="form-control" id="jenis_kategori" name="jenis_kategori" value="{{old('kode_kategori')}}">
                                      <input type="hidden" value="membuat kategori baru" name="pesan">
                                      <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
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
                        
                        {{-- TAMBAH MODAL --}}

                        {{-- UPDATE MODAL --}}
                        @foreach ($datas as $editkategori)
                        <div class="modal fade" id="editmodal--{{ $editkategori->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <form action="{{ url('admin/kategoriproduk/'.$editkategori->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">Kode Kategori</label>
                                      <input type="text" required class="form-control" id="edit_kodekategori" name="edit_kodekategori" value="{{ $editkategori->kode_kategori }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Jenis Kategori</label>
                                      <input type="text" class="form-control" id="edit_jeniskategori" name="edit_jeniskategori" value="{{ $editkategori->jenis_kategori }}">
                                      <input type="hidden" value="memperbaharui kategori dengan kode" name="pesan">
                                      <input type="hidden" value="{{ $editkategori->kode_kategori }}" name="objek">
                                      <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Update Kategori</button>
                                </div>
                            </form>   
                              </div>
                            </div>
                        
                         </div>
                         @endforeach
                        {{-- UPDATE MODAL --}}

                        {{-- DELETE MODAL --}}
                        @foreach ($datas as $deletekategori)
                        <div class="modal fade" id="deletemodal--{{ $deletekategori->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ url('admin/kategoriproduk/'.$deletekategori->id) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                <div class="modal-body">
                                  Apakah anda ingin menghapus produk "{{ $deletekategori->jenis_kategori }}"?
                                </div>
                                <input type="hidden" value="menghapus kategori" name="pesan">
                                <input type="hidden" value="{{ $deletekategori->jenis_kategori }}" name="objek">
                                <input type="hidden" value="{{ auth()->user()->name }}" name="nama_user">
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                  <button type="submit" class="btn btn-primary">Ya</button>
                                </div>
                              </div>
                               </form>
                            </div>
                          </div>
                        @endforeach
                        {{-- DELETE MODAL --}}
                    </div>  
                </div>

                {{-- ALERT --}}
              
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


                {{-- ALERT --}}

                {{-- ALERT KE 2 --}}

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

                

                {{-- ALERT KE 2 --}}
              
                    <div class="row row-keranjang">
                        <div class="col table-responsive">
                            <table class="table table-bordered text-center" id="myTable">
                                <thead class="table-secondary th-header">
                                  <tr>
                                    <th scope="col" class="th-header">Kode Kategori</th>
                                    <th scope="col" class="th-header">Jenis Kategori</th>
                                    <th scope="col" colspan="2" class="th-header">Action</th>
                                </thead>
                                <tbody class="align-middle">
                                  
                                    @foreach ($datas as $kunci)
                                        <tr>
                                            <th scope="row">{{ $kunci->kode_kategori }}</th>
                                            <td>{{ $kunci->jenis_kategori }}</td>
                                            <td><button type="button" class="btn btn-success" id="btn-edit-kodekategori" data-bs-toggle="modal" data-bs-target="#editmodal--{{ $kunci->id }}">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal--{{ $kunci->id }}">Delete</button></td>
                                        </tr>
                                    @endforeach
                                        
                                  
                                </tbody>
                              </table>
                              {{ $datas->links() }}
                        </div>
                    </div>
                </div>
                
            </div>
                        
            </div>

            </div>
            
         </section>
         
    </div>











 





 
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
      $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  </script>

</body>
</html>