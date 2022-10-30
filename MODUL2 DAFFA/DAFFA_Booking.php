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
            <div class="col mx-auto">
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
            <form action="" method="post" class="row col booking-form">
                <!-- Input Form title -->
                <h4 class="mt-2 mb-2">Rent your car now!</h4>
                
                <!-- Name Input -->
                <label class="mb-1 small">Name</label><br>
                <input class="mb-1" name="Name" type="text" value="<?php echo (isset($_POST["Name"])) ? $_POST["Name"] : ""?>" <?php echo (isset($_POST["Name"]) && $_POST["Name"] == "DAFFA_1202200304") ? "readonly" : ""?> ><br>
                
                <!-- Bookdate Input or CheckOut -->
                <label class="mb-1 small">Book Date</label><br>
                <input class="mb-1" name="bookdate" type="date" value="<?php echo (isset($_POST["bookdate"])) ? date('Y/m/d', strtotime($_POST["bookdate"])) : ""?>"><br>
                
                <!-- Startime for Booking Input -->
                <label class="mb-1 small">Start Time</label><br>
                <input class="mb-1" name="starttime" type="time" value="<?php echo (isset($_POST["starttime"])) ? $_POST["starttime"] : ""?>"><br>
                
                <!-- Duration of rental car -->
                <label class="mb-1 small">Duration (Days)</label><br>
                <input class="mb-1" name="duration" type="text" value="<?php echo (isset($_POST["duration"])) ? $_POST["duration"] : ""?>"><br>
                
                <!-- Select Car that you want to rent -->
                <label class="mb-1 small">Car Type</label><br>
                <select id="selectCar" onchange="this.form.submit()" name="carTypes" class="mb-1">
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
                <input class="mb-1" name="phonenumber" type="text" value="<?php echo (isset($_POST["phonenumber"])) ? $_POST["phonenumber"] : ""?>"><br>
                
                <!-- Addition Services that you want to add from rent EAD -->
                <label class="mb-1 small">Add Service(s)</label><br>
                <div class="checkbox-container">
                    <!-- Health Protocol -->
                    <input class="mb-1" name="check[]" type="checkbox" value="Health Protocol">
                    <label class="small">Health Protocol/Rp25.000</label><br>

                    <!-- Driver -->
                    <input class="mb-1" name="check[]" type="checkbox" value="Driver">
                    <label class="small">Driver/Rp100.000</label><br>

                    <!-- Fuel Filled -->
                    <input class="mb-1" name="check[]" type="checkbox" value="Fuel Filled">
                    <label class="small">Fuel Filled/Rp250.000</label><br>
                </div>

                <!-- Submit Button -->
                <input type="submit" formaction="./DAFFA_MyBooking.php" value="Book" class="btn btn-success mt-2">
            </form>
        </div>

        <!-- Footer -->
        <?php require './Components/footer.php' ?>
    </body>
</html>