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

  @include('partials/navbaradmin')

    <div class="home_content">
        <section class="p-4" id="section-wrapper">
            <div class="container-fluid border p-4">
                <div class="row"> 
                    <div class="col">
                        <h4>Daftar Transaksi</h4>
                    </div>
                    <div class="row row-keranjang">
                        <div class="col table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-secondary th-header">
                                  <tr>
                                    <th scope="col" class="th-header">Invoice</th>
                                    <th scope="col" class="th-header">Nama User</th>
                                    <th scope="col" class="th-header">Nama Rekening</th>
                                    <th scope="col" class="th-header">Nomor Rekening</th>
                                    <th scope="col" class="th-header">Waktu Transfer</th>
                                    <th scope="col" class="th-header">Bukti Transaksi</th>
                                    <th scope="col" colspan="2" class="th-header">Action</th>
                                </thead>
                                <tbody class="align-middle">
                                  @foreach ($datapay as $item)
                                  <tr>
                                    <td><a href="{{ url('/invoices/'.$item->invoice_produk) }}">SMJ-{{ $item->invoice_produk }}</a></td>
                                    <td>{{ $item->nama_user }}</td>
                                    <td>{{ $item->nama_rek }}</td>
                                    <td>{{ $item->nomor_rek }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><img src="{{ asset('storage/'.$item->bukti_transfer)}}" alt="" class="img-fluid" id="bukti-transfer"></td>
                                    @if ( $item->status_transaksi == null)
                                    <td>
                                    <form action="{{ url('/admin/daftartransfer/'.$item->id) }}" method="post">
                                     @csrf
                                     @method('POST')
                                    <input type="hidden" value="Tolak" name="status-payment"> 
                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                    </form>
                                    </td>
                                    <td>
                                     <form action="{{ url('/admin/daftartransfer/'.$item->id) }}" method="post">
                                      @csrf
                                      @method('POST')
                                     <input type="hidden" value="Sukses" name="status-payment">
                                     <button type="submit" class="btn btn-success">Setujui</button>
                                     </form>
                                    </td>
                                    @elseif($item->status_transaksi == "Sukses")
                                    <td><span class="badge bg-success">Disetujui</span></td>
                                    @elseif($item->status_transaksi == "Tolak")
                                    <td><span class="badge bg-danger">Ditolak</span></td>
                                    @endif
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



















    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/js/Sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>