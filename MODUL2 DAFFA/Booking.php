<html>
    <head>
        <title>Booking Car</title>
    
    </head>
    <body class="main-container">
        <!-- Navbar -->
        <?php require './Components/navbar.php' ?>
        <!-- Row Layout for Images and Form -->
        <div class="row booking-layout">
            <div class="col">
                
            </div>
            <div class="col">
                <h4 class="mt-2 mb-2">Rent your car now!</h4>
                <!-- Booking Form -->
                <form action="" class="row booking-form">
                    <label class="mb-1 small">Name</label><br>
                    <input class="mb-1" type="text" value="<?php echo (isset($_POST["Name"])) ? $_POST["Name"] : ""?>" <?php echo (isset($_POST["Name"])) ? "readonly" : ""?> ><br>
                    <label class="mb-1 small">Book Date</label><br>
                    <input class="mb-1" type="date"><br>
                    <label class="mb-1 small">Start Time</label><br>
                    <input class="mb-1" type="time"><br>
                    <label class="mb-1 small">Duration (Days)</label><br>
                    <input class="mb-1" type="text"><br>
                    <label class="mb-1 small">Car Type</label><br>
                    <select name="" class="mb-1" name="" id="" <?php echo (isset($_POST["mazda"]) || isset($_POST["city"]) || isset($_POST["freed"])) ? "disabled" : ""?>>
                        <option>Select Car Type</option>
                        <option name="" value="" <?php echo (isset($_POST["mazda"])) ? "selected" : ""?>>Mazda 2</option>
                        <option name="" value="" <?php echo (isset($_POST["city"])) ? "selected" : ""?>>Honda City</option>
                        <option name="" value="" <?php echo (isset($_POST["freed"])) ? "selected" : ""?>>Honda Freed</option>
                    </select><br>
                    <label class="mb-1 small">Phone Number</label><br>
                    <input class="mb-1" type="text"><br>
                    <label class="mb-1 small">Add Service(s)</label><br>
                    <div class="checkbox-container">
                        <input class="mb-1" type="checkbox">
                        <label class="small">Health Protocol/Rp25.000</label><br>
                        <input class="mb-1" type="checkbox">
                        <label class="small">Driver/Rp100.000</label><br>
                        <input class="mb-1" type="checkbox">
                        <label class="small">Fuel Filled/Rp250.000</label><br>
                    </div>
                    <input type="button" value="Book" class="btn btn-success mt-2">
                </form>
            </div>
        </div>
        <!-- Footer -->
        <?php require './Components/footer.php' ?>
    </body>
</html>