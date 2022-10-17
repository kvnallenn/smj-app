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
    <title>PT Sentra Medan Jaya |</title>
  </head>
  <body>
    @include('partials.navbarshop')

    <div class="container">
        <div class="row row-keranjang align-middle">
            <div><h4 class="fw-bold text-center p-4">Selesaikan pembayaran dalam</h4></div>              
            <div><h5 class="text-center">Batas Akhir Pembayaran</div></H4>
            <div><h4 class="fw-bold text-center">Selesaikan pembayaran dalam</h4></div>   
               <div class="row">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-xl-4 col-12">
                        <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                            <h6 class="my-0">Nomor Rekening</h6>
                            <small class="fw-bold">8000875016</small>
                            </div>
                            <div>
                                <h6 class="my-2" id="myInput">Salin</h6>
                            </div>
                    
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                            <h6 class="my-0">Total Pembayaran</h6>
                            <small class="text fw-bold">Rp 5.000.000</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <a href="/shop" class="btn btn-primary btn-md" type="button">Belanja Lagi</a>
                            </div>
                        </li>
                    </div>  
                </div> 
            </div>
            {{-- CARA PENGGUNAAN --}}
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



            
            {{-- CARA PENGGUNAAN --}}
           
        </div>
        
    </div>
    
  
        

    

      
    @include('partials.footer')
    @include('partials.navbarbot')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    
   
  </body>
</html>