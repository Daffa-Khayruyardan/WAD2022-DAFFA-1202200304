<html>
    <head>
        <title>Booking Car</title>
    </head>
    <body class="main-container">
        <!-- Navbar -->
        <?php require './Components/navbar.php' ?>
        
        <!-- Row Layout for Images and Form -->
        <div class="row booking-layout">
            <!-- Car Images -->
            <div class="col mt-3 mx-auto">
                <!-- Set Dynamic Images Based on Selected CarTypes -->
                <img src="<?php 
                    // change images from home booking
                    echo (isset($_POST["carTypes"]) && $_POST["carTypes"] == 'Mazda 2') ? "Images/mazda-two.png" : "";
                    echo (isset($_POST["carTypes"]) && $_POST["carTypes"] == 'Honda City') ? "Images/honda-city.jpeg" : "";
                    echo (isset($_POST["carTypes"]) && $_POST["carTypes"] == 'Honda Freed') ? "Images/honda-freed.jpeg" : "";
                ?>" 
                    alt="" width="520" height="520" class="<?php echo !isset($_POST["carTypes"]) ? "d-none" : ""?>">
            </div>
            
            <!-- Booking Form -->
            <form action="<?php echo (isset($_POST["carTypes"])) ? "./DAFFA_MyBooking.php" : ""?>" method="post" class="row col booking-form">
                <!-- Input Form title -->
                <h4 class="mt-2 mb-2">Rent your car now!</h4>
                
                <!-- Name Input -->
                <label class="mb-1 small">Name</label><br>
                <input class="mb-1" name="username" type="text" value="<?php echo (isset($_POST["Name"])) ? $_POST["Name"] : ""?>" <?php echo (isset($_POST["Name"])) ? "readonly" : ""?> ><br>
                
                <!-- Bookdate Input or CheckOut -->
                <label class="mb-1 small">Book Date</label><br>
                <input class="mb-1" name="bookdate" type="date"><br>
                
                <!-- Startime for Booking Input -->
                <label class="mb-1 small">Start Time</label><br>
                <input class="mb-1" name="starttime" type="time"><br>
                
                <!-- Duration of rental car -->
                <label class="mb-1 small">Duration (Days)</label><br>
                <input class="mb-1" name="duration" type="text"><br>
                
                <!-- Select Car that you want to rent -->
                <label class="mb-1 small">Car Type</label><br>
                <select onchange="this.form.submit()" id="carTypes" name="carTypes" class="mb-1">
                    <option selected disabled>Select Car Type</option>

                    <!-- Mazda 2 Option -->
                    <option value="Mazda 2" <?php echo (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Mazda 2") ? "selected" : ""?>>Mazda 2</option>
                    
                    <!-- Honda City Option -->
                    <option value="Honda City" <?php echo (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Honda City") ? "selected" : ""?>>Honda City</option>
                    
                    <!-- Honda Freed Option -->
                    <option value="Honda Freed" <?php echo (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Honda Freed") ? "selected" : ""?>>Honda Freed</option>
                </select><br>
                
                <!-- Input Phone Number Here -->
                <label class="mb-1 small">Phone Number</label><br>
                <input class="mb-1" name="phonenumber" type="text"><br>
                
                <!-- Addition Services that you want to add from rent EAD -->
                <label class="mb-1 small">Add Service(s)</label><br>
                <div class="checkbox-container">
                    <input class="mb-1" name="check[]" value="Health Protocol" type="checkbox">
                    <label class="small">Health Protocol/Rp25.000</label><br>
                    <input class="mb-1" name="check[]" value="Driver" type="checkbox">
                    <label class="small">Driver/Rp100.000</label><br>
                    <input class="mb-1" name="check[]" value="Fuel Filled" type="checkbox">
                    <label class="small">Fuel Filled/Rp250.000</label><br>
                </div>
                <input type="submit" value="Book" class="btn btn-success mt-2">
            </form>
        </div>

        <!-- Footer -->
        <?php require './Components/footer.php' ?>

        <!-- Include -->
        <script src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    </body>
</html>