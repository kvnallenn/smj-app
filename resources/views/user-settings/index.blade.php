<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/keranjang.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>PT Sentra Medan Jaya |</title>
  </head>
  <body>
    @include('partials.navbarshop')

    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="/shop">Home</a></li>
          <li class="breadcrumb-item"><a href="/keranjang">Keranjang</a></li>
        </ol>
      </nav>
    </div>
    @if(session()->has('notifikasi'))
<div class="container">
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
</div>  
    @endif
    <div class="container">
        <div class="row row-keranjang">
            <div class="wrapper bg-white p-3">
                <h4 class="pb-4 border-bottom">Account settings</h4>
                <div class="py-2">
                    <div class="row py-2">
                        <form action="{{ url('/user-settings/edit/'.$userprofile->id) }}" method="POST">
                            @csrf
                            @method('POST')
                        <div class="col-md-6">
                            <label for="firstname">Nama</label>
                            <input type="text" class="bg-light form-control" placeholder="{{ $userprofile->name }}" value="{{ $userprofile->name }}" readonly>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="email">Email Address</label>
                            <input type="text" class="bg-light form-control" placeholder="{{ $userprofile->email }}" value="{{ $userprofile->email }}" readonly>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="email">Alamat</label>
                            <input type="text" class="bg-light form-control" placeholder="Jln. xxxx" name="jalan" value="{{ $userprofile->jalan }}">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="email">Nomor Telepon</label>
                            <input type="text" class="bg-light form-control" placeholder="08-xx-xx" name="nomor_telepon" value="{{ $userprofile->nomor_telepon }}">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="country">Kota</label>
                            <select id="country" class="bg-light" name="kota" value="{{ $userprofile->kota }}">
                                <option value="Medan">Medan</option>
                            </select>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3" id="lang">
                            <label for="language">Kecamatan</label>
                            <div class="arrow">
                                <select id="language" class="bg-light" name="kecamatan" value="{{ $userprofile->kecamatan }}">
                                    <option value="{{ $userprofile->kecamatan }}">{{ $userprofile->kecamatan }}</option>
                                    <option value="Medan Amplas">Medan Amplas</option>
                                    <option value="Medan Area">Medan Area</option>
                                    <option value="Medan Barat">Medan Barat</option>
                                    <option value="Medan Baru">Medan Baru</option>
                                    <option value="Medan Belawan">Medan Belawan</option>
                                    <option value="Medan Deli">Medan Deli</option>
                                    <option value="Medan Denai">Medan Denai</option>
                                    <option value="Medan Helvetia">Medan Helvetia</option>
                                    <option value="Medan Johor">Medan Johor</option>
                                    <option value="Medan Kota">Medan Kota</option>
                                    <option value="Medan Labuhan">Medan Labuhan</option>
                                    <option value="Medan Maimun">Medan Maimun</option>
                                    <option value="Medan Marelan">Medan Marelan</option>
                                    <option value="Medan Perjuangan">Medan Perjuangan</option>
                                    <option value="Medan Petisah">Medan Petisah</option>
                                    <option value="Medan Polonia">Medan Polonia</option>
                                    <option value="Medan Sunggal">Medan Sunggal</option>
                                    <option value="Medan Selayang">Medan Selayang</option>
                                    <option value="Medan Tembung">Medan Tembung</option>
                                    <option value="Medan Tuntungan">Medan Tuntungan</option>
                                    <option value="Medan Timur">Medan Timur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        <button class="btn btn-primary mr-3" type="submit">Save Changes</button>
                        <button class="btn border button">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

      
    @include('partials.footer')
    @include('partials.navbarbot')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Scroll.js"></script>
    
   
  </body>
</html>