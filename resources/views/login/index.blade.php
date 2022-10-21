<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/Logo-Sentra.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Sentra Medan Jaya | {{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script language="JavaScript" type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
    @include('../partials.navbartop')

    <section class="loginpage">
        <div class='main-login'>
        <div class="container col-xl-12 col-xxl-8 p-4">
            <div class="align-items-center">
                <div>
                    <div class="col-md-10 mx-auto col-lg-5 p-4">

                        @if(session()->has('pesan'))
                            <div class="alert alert-warning alert-dismissible fade show" role='alert'>
                                {{ session('pesan') }}
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label="Tutup"></button>
                            </div>
                        @endif

                        @if(session()->has('gagal'))
                            <div class="alert alert-danger alert-dismissible fade show" role='alert'>
                                {{ session('gagal') }}
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label="Tutup"></button>
                            </div>
                        @endif

                        <div class='container card-banner mt-3'><img src='../img/Logo-Sentra.png' alt="Sentra Medan Jaya" class='img-fluid' width='150px'></div>
                        <form class="p-md-4 rounded-3" action="/login" method="post">
                            @csrf
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required autofocus value="{{ old ('email') }}" />
                                <label>Email address</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required />
                                <label>Password</label>
                            </div>
                            
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                            <label class="akun">Belum mempunyai akun?</label> <a href="/register" class="akun">Daftar</a>
                        </form>
                    </div>
                    </div>
                
            </div>
        </div>
        </div>
    </section>
    @include('partials.navbarbot')
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/Scroll.js"></script>

</body>
</html>