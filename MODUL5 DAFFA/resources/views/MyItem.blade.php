<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Item</title>

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

        {{-- my item container --}}
        <div>
            {{-- my item title --}}
            <div>
                <h2>My Show Room</h2>
                <p>List Show Room - 1202200304</p>
            </div>
        </div>
    </body>
</html>