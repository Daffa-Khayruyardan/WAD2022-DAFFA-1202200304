<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>

        {{-- add cutom style --}}
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

            .welcome-text {
                width: 32%;
            }

            .home-body-container {
                margin-top: 7rem
            }

            .home-body {
                padding-left: 10rem;
                padding-right: 10rem;
            }

            .link-left-side {
                width: 10%
            }

            .link-right-side {
                width: 16%
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

        {{-- home body --}}
        <div class="home-body-container">
            {{-- welcome text container --}}
            <div class="home-body container-fluid align-items-center justify-content-between d-flex justify-center">
                <div class="welcome-text">
                    {{-- welcome text --}}
                    <h1>Selamat Datang Di Show Room</h1>
                    <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
                    
                    {{-- my car button --}}
                    <a href="" class="btn btn-primary pl-2 pr-2 mb-3">MyCar</a>

                    {{-- logo and user biodata --}}
                    <div class="d-flex mt-4 justify-content-between">
                        <img src="images/ead_logo.png" alt="ead_logo" width="105.43" height="30">
                        <p>Daffa_1202200304</p>
                    </div>
                </div>

                {{-- home car figure images --}}
                <img src="images/home_car.png" alt="home_car" width="400" height="305" >
            </div>
        </div>
    </body>
</html>