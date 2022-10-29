<head>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css" />
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item pt-1 pb-1 text-xl">
                <a href="DAFFA_Home.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'DAFFA_Home.php' ? "" : "text-secondary" ?>">Home</a>
            </li>
            <li class="nav-item pt-1 pb-1 text-xl">
                <a href="DAFFA_Booking.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'DAFFA_Booking.php' ? "" : "text-secondary"; ?>">Booking</a>
            </li>
        </ul>
    </div>
</nav>