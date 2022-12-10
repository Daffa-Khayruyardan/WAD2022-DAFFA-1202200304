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
                margin-right: 4rem;
                padding-top: 0.7rem;
                padding-bottom: 0.7rem
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
        </style>
    </head>
    <body>
        {{-- navbar --}}
        <nav class="navbar navbar-light bg-primary">
            <div class="container-fluid navbar-link-home">
              <a class="navbar-link text-white link-item-home" href="#">Home</a>
              <a class="navbar-link text-white link-item-home" href="#">Login</a>
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
                    
                    {{-- logo and user biodata --}}
                    <div class="d-flex mt-4 justify-content-between">
                        <img src="images/ead_logo.png" alt="ead_logo" width="105.43" height="30">
                        <p>Daffa_1202200304</p>
                    </div>
                </div>
                <img src="images/home_car.png" alt="home_car" width="400" height="305" >
            </div>
        </div>
    </body>
</html>