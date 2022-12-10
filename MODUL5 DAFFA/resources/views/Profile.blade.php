<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>

        <style>
            .navbar-link-home {
                margin-left: 4rem;
                margin-right: 2rem;
                padding-top: 0.4rem;
                padding-bottom: 0.4rem
            }

            .link-item-home {
                text-decoration: none
            }

            .link-left-side {
                width: 10%
            }

            .link-right-side {
                width: 16%
            }

            .update-profile-form {
                margin-left: 5rem;
                margin-right: 5rem;
            }

            .input-field-long {
                width: 83%
            }

            .input-field-short {
                width: 83%;
                margin-left: 7.6rem;
            }

            .logo-ead {
                width: 26%;
            }
        </style>
    </head>
    <body>
        {{-- navbar --}}
        <nav class="navbar navbar-light bg-primary">
            <div class="container-fluid navbar-link-home">
                {{-- link in left side --}}
                <div class="d-flex justify-content-between link-left-side">
                    <a class="navbar-link text-white link-item-home" href="#">Home</a>
                    <a class="navbar-link text-white link-item-home" href="#">MyCar</a>
                </div>
                
                {{-- link in right side --}}
                <div class="d-flex justify-content-between link-right-side">
                    {{-- add car button --}}
                    <button class="btn bg-white">Add Car</button>

                    {{-- name of rental car user --}}
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-white text-black" type="button" id="nama_pengguna" data-bs-toggle="dropdown">nama</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        {{-- profile edit container --}}
        <div class="container-fluid ">
            {{-- profile title text --}}
            <div class="d-flex justify-content-center mt-4">
                <h3>Profile</h3>
            </div>

            {{-- update profile form --}}
            <form action="" class=" update-profile-form">
                {{-- user email --}}
                <div class="d-flex justify-content-between">
                    <label class="form-label">Email</label>
                    <div class="container-fluid input-field mb-3">user@gmail.com</div>
                </div>

                {{-- username --}}
                <div class="d-flex justify-content-between">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control input-field-short mb-3">
                </div>

                {{-- no. handphone --}}
                <div class="d-flex justify-content-between">
                    <label class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control input-field-long mb-3">
                </div>

                {{-- line break --}}
                <hr class="text-black"/>

                {{-- kata sandi --}}
                <div class="d-flex justify-content-between">
                    <label class="form-label">Kata Sandi</label>
                    <input type="text" class="form-control input-field-long mb-3">
                </div>

                {{-- konfirmasi kata sandi --}}
                <div class="d-flex justify-content-between">
                    <label class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="text" class="form-control input-field-long mb-3">
                </div>

                {{-- warna navbar --}}
                <div class="d-flex justify-content-between">
                    <label class="form-label">Warna Navbar</label>
                    <input type="text" class="form-control input-field-long mb-3">
                </div>

                {{-- update button --}}
                <div class="d-flex justify-content-center mt-2">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>

                {{-- logo and user biodata --}}
                <div class="d-flex mt-4 justify-content-between logo-ead">
                    <img src="images/ead_logo.png" alt="ead_logo" width="105.43" height="30">
                    <p>Daffa_1202200304</p>
                </div>
            </form>
        </div>
    </body>
</html>