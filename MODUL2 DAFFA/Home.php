<html>
    <head>
        <title>Homepage</title>
        
    </head>
    <body class="">
        <!-- Import Navbar -->
        <?php require './Components/Navbar.php' ?>

        <!-- Give Some Title Here -->
        <h2 class="text-center">WELCOME TO EAD RENT</h2>
        <p class="text-center mt-3">Find your best deal, here!</p>

        <?php 
            if(isset($_POST["submit"])) {
                $username = $_POST["Name"];

                if(isset($_POST["mazda"])) {
                    $carType = $_POST["mazda"];
                }if (isset($_POST["city"])) {
                    $carType = $_POST["city"];
                }if (isset($_POST["freed"])) {
                    $carType = $_POST["freed"];
                }
            }
        ?>

        <!-- Make Row of Card -->
        <div class="row card-row mx-auto">
            <div class="card col card-car">
                    <img class="mazda-two" src="Images/mazda-two.png" alt="mazda-2" class="card-img-top" width="200" height="130">
                    <div class="card-body">
                        <h6>Mazda 2</h6>
                        <p>Rp. 420.000/Day</p>
                    </div>
                    <ul class="row list-group list-group-flush">
                            <li class=" list-group-item text-center small"><b>4 Kursi</b> </li>
                            <li class=" list-group-item text-center small"><b>1.000 CC</b></li>
                            <li class=" list-group-item text-center small"><b>Manual</b></li>
                    </ul>
                    <div class="row card-body button-area">
                        <form action="Booking.php" method="post" class="card-container pb-3">
                            <input type="text" value="DAFFA_1202200304" name="Name" class="d-none" readonly>
                            <select name="mazda" class="d-none">
                                <option>Mazda 2</option>
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm" value="Book Now">
                        </form>
                    </div>
            </div>
            <div class="card col card-car">
                    <img class="honda-city" src="Images/honda-city.jpeg" alt="mazda-2" class="card-img-top" width="200" height="130">
                    <div class="card-body">
                        <h6>Honda City</h6>
                        <p>Rp. 400.000/Day</p>
                    </div>
                    <ul class="row list-group list-group-flush">
                            <li class="list-group-item text-center small"><b>4 Kursi</b></li>
                            <li class="list-group-item text-center small"><b>1.500 CC</b></li>
                            <li class="list-group-item text-center small"><b>Manual</b></li>
                    </ul>
                    <div class="row card-body button-area">
                        <form action="Booking.php" method="post" class="card-container pb-3">
                            <input type="text" value="DAFFA_1202200304" name="Name" class="d-none" readonly>
                            <select name="city" class="d-none">
                                <option>Honda City</option>
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm" value="Book Now">
                        </form>
                    </div>
            </div>
            <div class="card col card-car">
                    <img class="honda-city" src="Images/honda-freed.jpeg" alt="mazda-2" class="card-img-top" width="200" height="130">
                    <div class="card-body">
                        <h6>Honda Freed</h6>
                        <p>Rp. 600.000/Day</p>
                    </div>
                    <ul class="row list-group list-group-flush">
                            <li class="list-group-item text-center small"><b>7 Kursi</b></li>
                            <li class="list-group-item text-center small"><b>1.500 CC</b></li>
                            <li class="list-group-item text-center small"><b>Automatic</b></li>
                    </ul>
                    <div class="row card-body button-area"> 
                        <form action="Booking.php" method="post" class="card-container pb-3">
                            <input type="text" value="DAFFA_1202200304" name="Name" class="d-none" readonly>
                            <select name="freed" class="d-none">
                                <option>Honda Freed</option>
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm" value="Book Now">
                        </form>
                    </div>
            </div>
        </div>
        
    
        <?php require './Components/Footer.php' ?>
    </body>
    
</html>