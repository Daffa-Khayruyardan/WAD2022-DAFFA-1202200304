<?php require '../config/connector.php' ?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? "" : "text-secondary" ?>">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="pages/Add-DAFFA.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'Add-DAFFA.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Add New Car Form -->
        <form action="../index.php" method="post" class="ml-2 w-50 row container-fluid form-input">
            <!-- Title -->
            <div class="container-fluid mt-2 title-add">
                <h4>Tambah Mobil</h4>
                <p class="title-desc">Tambah Mobil Baru Anda Ke List Show Room</p>
            </div>

            <!-- Nama Mobil -->
            <label class="mb-2"><b>Nama Mobil</b></label></br>
            <input class="mb-2 input-rounded" name="nama" type="text" required></br>

            <!-- Pemilik -->
            <label class="mb-2"><b>Nama Pemilik</b></label></br>
            <input class="mb-2 input-rounded" name="pemilik" type="text" required></br>

            <!-- Merk -->
            <label class="mb-2"><b>Merk</b></label></br>
            <input class="mb-2 input-rounded" name="merk" type="text" required></br>

            <!-- Tanggal Beli -->
            <label class="mb-2"><b>Tanggal Beli</b></label></br>
            <input class="mb-2 input-rounded" name="tanggal_beli" type="date" required></br>

            <!-- Deskripsi -->
            <label class="mb-2"><b>Deskripsi</b></label></br>
            <input class="mb-2 input-rounded" name="deskripsi" type="text" required></br>

            <!-- Foto -->
            <label class="mb-1"><b>Foto</b></label></br>
            <input class="mb-2 input-rounded" name="foto" type="file" name="Pilih File" class="foto" required></br>

            <!-- Status Pembayaran -->
            <label class="mb-1"><b>Status Pembayaran</b></label></br>

            <!-- Pilihan -->
            <span>
                <!-- Ya -->
                <input type="radio" name="status" required>
                <label>Lunas</label>

                <!-- Tidak -->
                <input type="radio" name="status" required>
                <label>Belum Lunas</label>
            </span>

            <!-- Submit -->
            <div class="container-fluid submit-container">
                <input type="button" class="p-1 btn btn-primary submit-btn" name="submit" value="Selesai">
            </div>
        </form>

    </body>
</html>