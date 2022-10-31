<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/keranjang.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Payment | PT Sentra Medan Jaya</title>
  </head>
  <body>
    @include('partials.navbarshop')

    <div class="container">
        <div class="row row-keranjang align-middle">
            <div><h4 class="fw-bold text-center p-4">Selesaikan pembayaran dalam</h4></div>              
            <div><h5 class="text-center">Batas Akhir Pembayaran</div></H4>
            <div><h4 class="fw-bold text-center">Selasa, 18 Oktober 2022 15:23</h4></div>   
               <div class="row">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-xl-4 col-12">
                        <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                            <h6 class="my-0">Nomor Rekening</h6>
                            @if ( $lockdata == "BCA")
                            <small class="fw-bold">
                             8000875016
                            </small>
                            @elseif ($lockdata == "Mandiri")
                            <small class="fw-bold">
                              1130015226164
                             </small>
                             @else
                            @endif
                            </div>
                            <div>
                                <h6 class="my-2" id="myInput">Salin</h6>
                            </div>
                    
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                            <h6 class="my-0">Total Pembayaran</h6>
                            <small class="text fw-bold">Rp {{ $total }},-</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <a href="/shop" class="btn btn-primary btn-md" type="button">Belanja Lagi</a>
                            </div>
                            <div>
                              <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Sudah Bayar</a>
                          </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-center lh-sm">
                          <div>
                            <small class="text my-0 fw-bold">Harap menyimpan bukti transaksi pembayaran</small>
                        </div>
                      </li>
                    </div>  
                </div> 
            </div>
             
            {{-- MODAL --}}

           <form action="{{ url ('/status-pesanan') }}" method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama :</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase()" class="form-control" id="recipient-name" placeholder="Sesuai dengan nama yang di rekening" name="nama_rek">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nominal :</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Sesuai dengan jumlah yang di transfer" name="nominal_transfer">
                        <input type="hidden" value="{{ $lockdata }}" name="nama_bank">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nomor Rekening :</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Nomor rekening pengirim" name="nomor_rek">
                      </div>
                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Bukti Transfer</label>
                        <img id="image_preview" class="col-sm-5 mb-3 d-block img-fluid"/>
                        <input class="form-control @error('gambar_produk') is-invalid @enderror" type="file" id="formFileMultiple" name="bukti_transfer" id="gambar_produk" onchange="previewImage(event)" multiple>
                      @error('gambar_produk')
                        <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                      </div>

                      @foreach ( $kirimcart as $kunciicart)

                
                        <input type="hidden" value="{{ $kunciicart->nama_produk }}" name="nama_produk[]">
                        <input type="hidden" value="{{ $kunciicart->harga_produk }}" name="harga_produk[]">
                        <input type="hidden" value="{{ $kunciicart->unit_produk }}" name="unit_produk[]">
                        <input type="hidden" value="{{ $kunciicart->image }}" name="gambar_produk[]">

                      @endforeach

                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Bayar</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </form>
            {{-- MODAL --}}

          {{-- CARA PENGGUNAAN BCA --}}
          @if ( $lockdata == "BCA")
           <div class="row">
                <div class="d-flex justify-content-center mt-1 mb-4">
                <div class="col-xl-4 col-12">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      ATM BCA
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <ol>
                            <li class="list-item mb-2">Masukkan Kartu ATM BCA & PIN</li>
                            <li class="list-item mb-2">Pilih menu Transaksi Lainnya > Transfer > ke Rekening BCA Virtual Account</li>
                            <li class="list-item mb-2">Masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777081274550819)</li>
                            <li class="list-item mb-2">Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan Masukkan Jumlah Transfer sesuai dengan Total Tagihan</li>
                            <li class="list-item mb-2">Ikuti instruksi untuk menyelesaikan transaksi Simpan struk transaksi sebagai bukti pembayaran</li>
                          </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        m-BCA ( BCA Mobile)
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <ol>
                            <li class="list-item mb-2">Lakukan log in pada aplikasi BCA Mobile</li>
                            <li class="list-item mb-2">Pilih menu m-BCA, kemudian masukkan kode akses m-BCA</li>
                            <li class="list-item mb-2">Pilih m-Transfer > BCA Virtual Account</li>
                            <li class="list-item mb-2">Pilih dari Daftar Transfer, atau masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777081274550819)</li>
                            <li class="list-item mb-2">Masukkan pin m-BCA</li>
                            <li class="list-item mb-2">Pembayaran selesai. Simpan notifikasi yang muncul sebagai bukti pembayaran</li>
                          </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      Internet Banking BCA
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ol>
                            <li class="list-item mb-2">Login pada alamat Internet Banking BCA (https://klikbca.com)</li>
                            <li class="list-item mb-2">Pilih menu Pembayaran Tagihan > Pembayaran > BCA Virtual Account</li>
                            <li class="list-item mb-2">Pada kolom kode bayar, masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777081274550819)</li>
                            <li class="list-item mb-2">Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti Nomor BCA Virtual Account, Nama Pelanggan dan Jumlah Pembayaran</li>
                            <li class="list-item mb-2">Masukkan password dan mToken</li>
                            <li class="list-item mb-2">Cetak/simpan struk pembayaran BCA Virtual Account sebagai bukti pembayaran</li>
                          </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Kantor BCA
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                      <div class="accordion-body">
                          <ol>
                              <li class="list-item mb-2">Ambil nomor antrian transaksi Teller dan isi slip setoran</li>
                              <li class="list-item mb-2">Serahkan slip dan jumlah setoran kepada Teller BCA</li>
                              <li class="list-item mb-2">Teller BCA akan melakukan validasi transaksi</li>
                              <li class="list-item mb-2">Simpan slip setoran hasil validasi sebagai bukti pembayaran</li>
                            </ol>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
         </div>
        </div>
        @elseif( $lockdata == "Mandiri")
        <div class="row">
          <div class="d-flex justify-content-center mt-1 mb-4">
          <div class="col-xl-4 col-12">
      <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                ATM MANDIRI
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                  <ol>
                      <li class="list-item mb-2">Masukkan Kartu ATM BCA & PIN</li>
                      <li class="list-item mb-2">Pilih menu Transaksi Lainnya > Transfer > ke Rekening BCA Virtual Account</li>
                      <li class="list-item mb-2">Masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777081274550819)</li>
                      <li class="list-item mb-2">Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan Masukkan Jumlah Transfer sesuai dengan Total Tagihan</li>
                      <li class="list-item mb-2">Ikuti instruksi untuk menyelesaikan transaksi Simpan struk transaksi sebagai bukti pembayaran</li>
                    </ol>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  m-BCA ( BCA Mobile)
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                  <ol>
                      <li class="list-item mb-2">Lakukan log in pada aplikasi BCA Mobile</li>
                      <li class="list-item mb-2">Pilih menu m-BCA, kemudian masukkan kode akses m-BCA</li>
                      <li class="list-item mb-2">Pilih m-Transfer > BCA Virtual Account</li>
                      <li class="list-item mb-2">Pilih dari Daftar Transfer, atau masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777081274550819)</li>
                      <li class="list-item mb-2">Masukkan pin m-BCA</li>
                      <li class="list-item mb-2">Pembayaran selesai. Simpan notifikasi yang muncul sebagai bukti pembayaran</li>
                    </ol>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Internet Banking BCA
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                  <ol>
                      <li class="list-item mb-2">Login pada alamat Internet Banking BCA (https://klikbca.com)</li>
                      <li class="list-item mb-2">Pilih menu Pembayaran Tagihan > Pembayaran > BCA Virtual Account</li>
                      <li class="list-item mb-2">Pada kolom kode bayar, masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777081274550819)</li>
                      <li class="list-item mb-2">Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti Nomor BCA Virtual Account, Nama Pelanggan dan Jumlah Pembayaran</li>
                      <li class="list-item mb-2">Masukkan password dan mToken</li>
                      <li class="list-item mb-2">Cetak/simpan struk pembayaran BCA Virtual Account sebagai bukti pembayaran</li>
                    </ol>
              </div>
            </div>
          </div>
          <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Kantor BCA
                </button>
              </h2>
              <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <ol>
                        <li class="list-item mb-2">Ambil nomor antrian transaksi Teller dan isi slip setoran</li>
                        <li class="list-item mb-2">Serahkan slip dan jumlah setoran kepada Teller BCA</li>
                        <li class="list-item mb-2">Teller BCA akan melakukan validasi transaksi</li>
                        <li class="list-item mb-2">Simpan slip setoran hasil validasi sebagai bukti pembayaran</li>
                      </ol>
                </div>
              </div>
            </div>
        </div>
      </div>
   </div>
  </div>
  @else
  @endif 
  {{-- CARA PENGGUNAAN --}}
           
        </div>
        
    </div>
    
  
        

    

      
    @include('partials.footer')
    @include('partials.navbarbot')
    <script src="../js/Imagepreview.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    <script src="https://kit.fontawesome.com/4f72237084.js" crossorigin="anonymous"></script>
    
   
  </body>
</html>