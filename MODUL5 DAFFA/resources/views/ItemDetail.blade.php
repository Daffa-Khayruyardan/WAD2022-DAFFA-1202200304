<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>itemDetail</title>

        {{-- add cutom style --}}
        <style>
            .navbar-link-home {
                margin-left: 4rem;
                margin-right: 2rem;
                padding-top: 0.4rem;
                padding-bottom: 0.4rem
            }

            .item-detail-container {
                padding-left: 5rem;
                padding-right: 9rem;
            }

            .detail-form-container {
                margin-top: 3rem;
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

            .input-field {
                width: 100%;
            }

            .submit-button {
                margin-top: 2rem;
                margin-bottom: 2rem
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

        {{-- item detail container --}}
        <div class="container-fluid item-detail-container">
            {{-- title text in add car --}}
            <div class="pt-3">
                <h2>Nama Mobil</h2>
                <p>Detail Mobil Nama Mobil</p>
            </div>

            {{-- image and input form container --}}
            <div class="row detail-form-container">
                {{-- car image --}}
                <img src="images/home_car.png" alt="car_detail_image" width="300" height="420" class="col item-detail-image">

                {{-- form detail --}}
                <form class="col">
                    {{-- input field nama mobil --}}
                    <label class="form-label mt-2">Nama Mobil</label><br/>
                    <input class="form-control input-field" type="text" disabled>

                    {{-- input field nama pemilik --}}
                    <label class="form-label mt-2">Nama Pemilik</label><br/>
                    <input class="form-control input-field" type="text" disabled>

                    {{-- input field merk --}}
                    <label class="form-label mt-2">Merk</label><br/>
                    <input class="form-control input-field" type="text" disabled>

                    {{-- input field nama mobil --}}
                    <label class="form-label mt-2">Tanggal Beli</label><br/>
                    <input class="form-control input-field" type="text" disabled>

                    {{-- input field nama mobil --}}
                    <label class="form-label mt-2">Deskripsi</label><br/>
                    <textarea class="form-control input-field" id="" cols="1" rows="6" disabled></textarea> 

                    {{-- input field photo upload --}}
                    <label class="form-label mt-2">Foto</label><br/>
                    <input type="file" class="form-control input-field" disabled>

                    {{-- check status pembayaran --}}
                    <label class="form-label mt-3">Status Pembayaran</label><br/>

                    {{-- chosee one --}}
                    <input type="radio" disabled>
                    <label class="form-label">Lunas</label>

                    {{-- choose two --}}
                    <input type="radio" disabled>
                    <label class="form-label">Belum Lunas</label><br/>

                    {{-- submit button --}}
                    <input type="submit" value="Edit" class="btn btn-warning mt-3 submit-button">
                </form>
            </div>
        </div>
    </body>
</html>