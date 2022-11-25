<?php require 'config/connector.php' ?>

<head>
    <link rel="stylesheet" href="asset/style/index.css" />
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-primary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item pt-3 pb-3 text-xl">
                    <a href="pages/Login-DAFFA.php" style="text-decoration: none;" class="link-light">Home</a>
                </li>
                <li class="nav-item pt-3 pb-3 text-xl">
                    <a href="pages/Login-DAFFA.php" style="text-decoration: none;" class="link-light">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Content -->
    <div class="container-fluid row" id="home">
        <!-- Left Body -->
        <div class="col">
            <h1 class="welcome">Selamat Datang Di Show Room Daffa</h1>
            <p class="lacus">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>

            <!-- MyCar -->
            <a href="<?php echo $jumlah_mobil == 0 ? "pages/Add-DAFFA.php" : "pages/ListCar-DAFFA.php"?>" class="mt-4 p-2 border rounded btn btn-primary text-white Mycar">MyCar</a>

            <!-- EAD Logo Container -->
            <div class="logo ead-container">
                <!-- Logo Image -->
                <img src="asset/images/EAD_Logo.png" class="ead-logo" alt="EADLogo">

                <!-- Nama -->
                <p class="nama">Daffa_1202200304</p>
            </div>
        </div>

        <!-- Right Body -->
        <div class="col HomeCar">
            <img src="asset/images/HomeCar.png" alt="HomeCar" width="510" height="400">
        </div>
    </div>
</body>