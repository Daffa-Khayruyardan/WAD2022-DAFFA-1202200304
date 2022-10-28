<head>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css" />
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item pt-1 pb-1 text-xl">
                <a href="Home.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { 
                        echo "on";
                    }else  {
                        echo "off";
                    } ?>">Home</a>
            </li>
            <li class="nav-item pt-1 pb-1 text-xl">
                <a href="Booking.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'Home.php' ? "on" : "off"); ?>">Booking</a>
            </li>
        </ul>
    </div>
</nav>