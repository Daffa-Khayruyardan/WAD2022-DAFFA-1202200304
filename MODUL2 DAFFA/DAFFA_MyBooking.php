<html>
    <head>
        <title>My Booking</title>
    </head>
    <body>
        <!-- Import Navbar -->
        <?php require './Components/Navbar.php' ?>

        <!-- Some Header here -->
        <h3 class="text-center mt-2">Thank You <?php echo (isset($_POST["username"])) ? $_POST["username"] : "NAMA_NIM"?> for Reserving</h3>
        <h5 class="text-center medium mt-3">Please double check your reservation details</h5>
        
        <!-- Create Invoice Table  -->
        <div class="container mt-4">
            <table class="table mx-auto" >
                <!-- Table Header -->
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>

                <!-- Table Data -->
                <tbody>
                    <tr class="bg-light">
                        <!-- Booking Number -->
                        <th>
                            <?php echo rand(); ?>
                        </th>

                        <!-- display username -->
                        <td>
                            <?php echo (isset($_POST["username"])) ? $_POST["username"] : "NAMA_NIM"?>
                        </td>

                        <!-- display check in -->
                        <td>
                            <?php echo (isset($_POST["bookdate"]) && $_POST["bookdate"] != "") ? date("Y-m-d H:i:s", strtotime($_POST["bookdate"] . " " . $_POST["starttime"])) : ""?>
                        </td>

                        <!-- Check Out from user -->
                        <td>
                            <?php 
                                // convert duration to format that can do addition with another date
                                $durationDays = "+ " . $_POST["duration"] . " days";

                                // make addition bookdate with durations
                                $checkOutDate = date("Y-m-d", strtotime($_POST["bookdate"] . $durationDays));

                                // display check out date 
                                echo (isset($_POST["duration"]) && $_POST["duration"] != "") ? date('Y-m-d H:i:s', strtotime($checkOutDate . " " . $_POST["starttime"])) : "";
                            ?>
                        </td>

                        <!-- Car Types Result -->
                        <td>
                            <?php
                                global $Mazda2;
                                global $HondaCity;
                                global $HondaFreed;
                                
                                echo isset($_POST["carTypes"]) ? $_POST["carTypes"] : "";

                                $Mazda2 = (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Mazda 2")  ? 420000 : 0;
                                $HondaCity = (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Honda City")  ? 400000 : 0;
                                $HondaFreed = (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Honda Freed")  ? 600000 : 0;
                            ?>
                        </td>
                        <td>
                            <?php echo (isset($_POST["phonenumber"])) ? $_POST["phonenumber"] : ""?>
                        </td>

                        <!-- Services -->
                        <td>
                            <ul>
                                <?php 
                                    global $HealthCost;
                                    global $DriverCost;
                                    global $FuelCost;

                                    if(isset($_POST["check"])) {
                                        foreach($_POST["check"] as $services) {
                                            echo "<li>" . $services . "</li>"; 

                                            if($services == "Health Protocol") {
                                                $HealthCost = 25000;
                                            }if($services == "Driver") {
                                                $DriverCost = 100000;
                                            }if($services == "Fuel Filled") {
                                                $FuelCost = 250000;
                                            }
                                        }
                                    }
                                ?>    
                            </ul>
                        </td>

                        <!-- Summary -->
                        <td>
                            <?php 
                                $summary = $HealthCost + $DriverCost + $FuelCost + $Mazda2 + $HondaCity + $HondaFreed;
                                echo $summary;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Import Footer -->
        <?php require './Components/Footer.php' ?>

        <!-- Include JS -->
        <script src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    </body>
</html>