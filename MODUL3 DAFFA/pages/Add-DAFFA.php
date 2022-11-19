<html>
    <head>
        <link rel="stylesheet" href="asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? "" : "text-secondary" ?>">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="./Add-DAFFA.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'ListCar-DAFFA.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>  

        <!-- Add New Car Form -->
        <form action="" class="ml-2 w-50 row container-fluid form-input">
            <!-- Title -->
            <div class="container-fluid mt-4 title-add">
                <h3>Tambah Mobil</h3>
                <p class="title-desc">Tambah Mobil Baru Anda Ke List Show Room</p>
            </div>

            <!-- Nama Mobil -->
            <label class="mb-2"><b>Nama Mobil</b></label></br>
            <input class="mb-2" type="text"></br>

            <!-- Pemilik -->
            <label class="mb-2"><b>Nama Pemilik</b></label></br>
            <input class="mb-2" type="text"></br>

            <!-- Merk -->
            <label class="mb-2"><b>Merk</b></label></br>
            <input class="mb-2" type="text"></br>

            <!-- Tanggal Beli -->
            <label class="mb-2"><b>Tanggal Beli</b></label></br>
            <input class="mb-2" type="date"></br>

            <!-- Deskripsi -->
            <label class="mb-2"><b>Deskripsi</b></label></br>
            <input class="mb-2" type="text"></br>

            <!-- Foto -->
            <label class="mb-1"><b>Foto</b></label></br>
            <input class="mb-2" type="file" name="Pilih File" class="foto"></br>
        </form>

    </body>
</html>