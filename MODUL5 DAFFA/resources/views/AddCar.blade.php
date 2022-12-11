<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>addCar</title>

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

            .input-form-container {
                padding-left: 5rem;
            }

            .input-field {
                width: 75%;
                margin-bottom: 0.7rem;
            }

            .submit-button {
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

        {{-- input form container --}}
        <div class="container-fluid input-form-container">
            {{-- title text in add car --}}
            <div class="pt-3">
                <h2>Tambah Mobil</h2>
                <p>Tambah Mobil baru anda ke list show room</p>
            </div>

            {{-- input form add car --}}
            <form action="{{ route('') }}" method="POST" enctype="multipart/form-data" class="">
                @csrf 
                {{-- input field nama mobil --}}
                <label class="form-label">Nama Mobil</label><br/>
                <input name="name" class="form-control input-field" type="text">

                {{-- input field nama pemilik --}}
                <label class="form-label">Nama Pemilik</label><br/>
                <input name="owner" class="form-control input-field"  type="text">

                {{-- input field merk --}}
                <label class="form-label">Merk</label><br/>
                <input name="brand" class="form-control input-field" type="text">

                {{-- input field nama mobil --}}
                <label class="form-label">Tanggal Beli</label><br/>
                <input name="car" class="form-control input-field" type="text">

                {{-- input field nama mobil --}}
                <label class="form-label">Deskripsi</label><br/>
                <textarea name="description" class="form-control input-field" name="" id="" cols="1" rows="4"></textarea> 

                {{-- input field photo upload --}}
                <label class="form-label">Foto</label><br/>
                <input name="photo" type="file" class="form-control input-field">

                {{-- check status pembayaran --}}
                <label class="form-label">Status Pembayaran</label><br/>

                {{-- chosee one --}}
                <input name="status" type="radio">
                <label class="form-label">Lunas</label>

                {{-- choose two --}}
                <input name="status" type="radio">
                <label class="form-label">Belum Lunas</label><br/>

                {{-- submit button --}}
                <input type="submit" name="selesai" value="Selesai" class="btn btn-primary mt-3 submit-button">
            </form>
        </div>
    </body>
</html>