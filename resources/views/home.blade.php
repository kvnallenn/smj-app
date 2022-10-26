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
      
@endsection
    
    