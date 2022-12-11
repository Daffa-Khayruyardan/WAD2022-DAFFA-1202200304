<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>

        <style>
            .side-image {
                height: 100vh;
            }

            .register-container {
                
            }

            .login-form-container {
                flex: 1 1 0%;
            }

            .form-container {
                margin-top: 5rem;
                margin-left: 5rem;
            }

            .input-field {
                width: 80%
            }

            .btn-daftar {
                background-color: #3593E9;
                margin-top: 1rem;
                margin-bottom: 0.5rem;
                color: white;
            }
        </style>
    </head>
    <body>
        {{-- register container --}}
        <div class="d-flex register-container">
            {{-- side image --}}
            <div class="">
                <img src="images/login_image_car.png" alt="login_image" class="side-image">
            </div>

            {{-- right side of login page container --}}
            <div class="login-form-container d-flex">
                {{-- form container --}}
                <form method="POST" action="{{ url('/register') }}" class="container form-container">
                    @csrf 
                    

                    {{-- text title --}}
                    <h2>Registrasi</h2>

                    {{-- input field container --}}
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" class="form-control input-field">
                    </div>

                    {{-- input field container --}}
                    <div class="mb-2">
                        <label class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control input-field">
                    </div>

                    {{-- input field container --}}
                    <div class="mb-2">
                        <label class="form-label">Nomor Handphone</label>
                        <input name="no_hp" type="text" class="form-control input-field">
                    </div>

                    {{-- input field container --}}
                    <div class="mb-2">
                        <label class="form-label">Kata Sandi</label>
                        <input name="kata_sandi" type="text" class="form-control input-field">
                    </div>

                    {{-- input field container --}}
                    <div class="mb-2">
                        <label class="form-label">Konfirmasi Kata Sandi</label>
                        <input name="konfirmasi" type="text" class="form-control input-field">
                    </div>

                    {{-- register button --}}
                    <input type="submit" value="Daftar" class="btn btn-daftar">

                    {{-- login reference --}}
                    <p>
                        Anda sudah punya akun?
                        <a href="#">Login</a>
                    </p>
                </form>
            </div>
            
        </div>
    </body>
</html>