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
    @include('partials.navbartop')
    <section class="loginpage">
        
        <div class='main-daftar'>
            <div class='split-screen'>
                <div class='left'>
                    <section class='copy'>
                        <img src='../img/Logo-Sentra.png' alt="Sentra Medan Jaya" class='img-fluid' width='200px' />
                        <p>PT Sentra Medan Jaya</p>
                    </section>
                </div>
                <div class='right'>
                    <form class="p-3 p-md-8 rounded-3" action="/register" method="post">
                        @csrf
                        <p class='judul-daftar'>Daftar</p>
                        
                        <input
                            type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Nama Lengkap"
                            required
                            value="{{ old('name') }}"
                        />
                        @error('name')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                        <label>Nama Lengkap</label>
        

                        <input
                            type="text"
                            name="email"
                            class="form-control form-control @error('email') is-invalid @enderror"
                            placeholder="name@example.com"
                            required
                            value="{{ old('email') }}"
                        />
                        @error('email')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                        <label>Email address</label>
            

                        <input
                            type="password"
                            name="password"
                            class="form-control form-control @error('password') is-invalid @enderror"
                            placeholder="Password"
                            required
                        />
                        @error('password')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                        <label>Password</label>
            
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                        <label class="akun">Sudah mempunyai akun? <strong>Login</strong></label>
                    </form>
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