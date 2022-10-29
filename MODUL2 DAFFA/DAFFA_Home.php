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

        <!-- Submit Card info if is set -->
        <?php (isset($_POST["submit"])) ? $_POST["carTypes"] : ""; ?>

        <!-- Make Row of Card -->
        <div class="row card-row mx-auto">
            <!-- Mazda Card -->
            <div class="card col card-car">
                    <img class="mazda-two" src="Images/mazda-two.png" alt="mazda-2" class="card-img-top" width="200" height="130">
                    <div class="card-body">
                        <h6>Mazda 2</h6>
                        <p>Rp. 420.000/Day</p>
                    </div>
                    <ul class="row list-group list-group-flush">
                            <li class="text-primary list-group-item text-center small"><b>4 Kursi</b> </li>
                            <li class="text-primary list-group-item text-center small"><b>1.000 CC</b></li>
                            <li class="text-primary list-group-item text-center small"><b>Manual</b></li>
                    </ul>

                    <!-- Card Body -->
                    <div class="row card-body button-area">
                        <form action="./DAFFA_Booking.php" method="post" class="card-container pb-3">
                            <input type="text" value="DAFFA_1202200304" name="Name" class="d-none" readonly>
                            <select name="carTypes" class="d-none">
                                <option value="Mazda 2">Mazda 2</option>
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm" value="Book Now">
                        </form>
                    </div>
            </div>

            <!-- Honda City Card -->
            <div class="card col card-car">
                    <img class="honda-city" src="Images/honda-city.jpeg" alt="mazda-2" class="card-img-top" width="200" height="130">
                    <div class="card-body">
                        <h6>Honda City</h6>
                        <p>Rp. 400.000/Day</p>
                    </div>
                    <ul class="row list-group list-group-flush">
                            <li class="text-primary list-group-item text-center small"><b>4 Kursi</b></li>
                            <li class="text-primary list-group-item text-center small"><b>1.500 CC</b></li>
                            <li class="text-primary list-group-item text-center small"><b>Manual</b></li>
                    </ul>

                    <!-- Card Body -->
                    <div class="row card-body button-area">
                        <form action="./DAFFA_Booking.php" method="post" class="card-container pb-3">
                            <input type="text" value="DAFFA_1202200304" name="Name" class="d-none" readonly>
                            <select name="carTypes" class="d-none">
                                <option value="Honda City">Honda City</option>
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm mx-auto" value="Book Now">
                        </form>
                    </div>
            </div>

            <!-- Honda Freed Card -->
            <div class="card col card-car">
                    <img class="honda-city" src="Images/honda-freed.jpeg" alt="mazda-2" class="card-img-top" width="200" height="130">
                    <div class="card-body">
                        <h6>Honda Freed</h6>
                        <p>Rp. 600.000/Day</p>
                    </div>
                    <ul class="row list-group list-group-flush">
                            <li class="text-primary list-group-item text-center small"><b>7 Kursi</b></li>
                            <li class="text-primary list-group-item text-center small"><b>1.500 CC</b></li>
                            <li class="text-primary list-group-item text-center small"><b>Automatic</b></li>
                    </ul>

                    <!-- Card Body -->
                    <div class="row card-body button-area"> 
                        <form action="./DAFFA_Booking.php" method="post" class="card-container pb-3">
                            <input type="text" value="DAFFA_1202200304" name="Name" class="d-none" readonly>
                            <select name="carTypes" class="d-none">
                                <option value="Honda Freed">Honda Freed</option>
                            </select>
                            <input type="submit" class="btn btn-primary btn-sm" value="Book Now">
                        </form>
                    </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php require './Components/Footer.php' ?>

        <!-- Include JS -->
        <script src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    </body>
    
</html>