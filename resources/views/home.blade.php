@extends('layouts.main')

@section('heroes')
  <div class="heroes">
          <div class="main">
            <div class="text-center">
              <img class="d-block mx-auto mb-4" src="img/Logo-Sentra.png" alt="" width="195" height="110" />
              <h1 class="display-5 fw-bold">PT SENTRA MEDAN JAYA</h1>
              <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                  <a href="#lanjut" id="button-font" class="button-hero btn-lg px-4 gap-3">Lebih
                    Lanjut</a>
                </div>
              </div>
            </div>
          </div>
      </div>
      </section>
      <section id="lanjut">
        <div class="container col-xxl-8 px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/banner1.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                height="500" loading="lazy" />
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-3">Lorem ipsum dolor sit amet</h1>
              <p class="lead1"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="#lanjut2" class="btn btn-primary btn-lg px-4 me-md-2">Lebih Lanjut</button>
                <a href="/shop" class="btn btn-outline-secondary btn-lg px-4">Shop</a>
              </div>
            </div>
          </div>
          <div class="skew-c"></div>
        </div>
      </section>
      <section class="warnabawah" id="lanjut2">
        <div class="container col-xxl-8 px-4 py-5 warna">
          <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/banner3.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                height="500" loading="lazy" />
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-3 warna">Lorem ipsum dolor sit amet</h1>
              <p class="lead2"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="/#kontak" class="btn btn-primary btn-lg px-4 me-md-2">Kontak</a>
                <a href="/shop" class="btn btn-outline-secondary btn-lg px-4">Shop</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="kontak" class="py-5">
        <center><h1 class="display-5 fw-bold lh-1">KONTAK</h1></center>
        <div class="container col-xxl-8 px-4">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <div class="container-frame">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.814990480657!2d106.80439751531965!3d-6.288032663298879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1f01ba55c2b%3A0x8f04db4d669dcb58!2sPT%20Sentra%20Niaga%20Bersama!5e0!3m2!1sen!2sid!4v1666870800073!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="responsive-iframe"></iframe>
            </div>
            </div>
            <div class="col-lg-6">
              <h1 class="display-6 fw-bold lh-1 mb-3">ALAMAT</h1>
              <p class="lead1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              </svg> Ruko Beverly, Jl. Pangeran Antasari No. 67A-B RT.4/RW.1 Cilandak Barat, Jakarta Selatan, DKI Jakarta 12410</p>
              <h1 class="display-6 fw-bold lh-1 mb-3">TELEPON</h1>
              <p class="lead1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg> (021) 7581 7901​</p>
            </div>
          </div>
          <div class="skew-c"></div>
        </div>
      </section>
      
@endsection
    
    