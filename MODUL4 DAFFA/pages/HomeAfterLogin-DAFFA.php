<head>
    <link rel="stylesheet" href="../asset/style/index.css" />
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-primary">
        <div class="container-fluid">
            <!-- Home and Car List Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item pt-3 pb-3 text-xl">
                    <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'HomeAfterLogin-DAFFA.php' ? "" : "text-secondary" ?>">Home</a>
                </li>
                <li class="nav-item pt-3 pb-3 text-xl">
                    <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == '' ? "" : "text-secondary" ?>">Mycar</a>
                </li>

                <!-- Add car button -->
                <button class="btn bg-white text-primary">Add Car</button>

                <!-- User Name List -->
                <div class="dropdown">
                    <button class="btn bg-white text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Name</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
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
                <img src="../asset/images/EAD_Logo.png" class="ead-logo" alt="EADLogo">

                <!-- Nama -->
                <p class="nama">Daffa_1202200304</p>
            </div>
        </div>

        <!-- Right Body -->
        <div class="col HomeCar">
            <img src="../asset/images/HomeCar.png" alt="HomeCar" width="510" height="400">
        </div>
    </div>
</body>