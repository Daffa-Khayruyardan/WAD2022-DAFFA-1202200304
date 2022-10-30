<html>
    <head>
        <title>My Booking</title>
    </head>
    <body>
        <!-- Import Navbar -->
        <?php require './Components/Navbar.php' ?>

        <!-- Some Header here -->
        <h3 class="text-center mt-2">Thank You <?php echo (!empty($_POST["Name"])) ? $_POST["Name"] : "NAMA_NIM"?> for Reserving</h3>
        <h5 class="text-center medium mt-3">Please double check your reservation details</h5>
        
        <!-- Create Invoice Table  -->
        <div class="container-fluid mt-4">
            <div class="container">
                <table class="table mx-auto" >
                    <!-- Table Header -->
                    <thead>
                        <tr style="border-bottom: 2px solid black;">
                            <th>Booking Number</th>
                            <th>Name</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Car Type</th>
                            <th>Phone Number</th>
                            <th>Service(s)</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>

                    <!-- Table Data -->
                    <tbody>
                        <tr class="bg-light">
                            <!-- Display Booking Number -->
                            <th>
                                <?php echo rand(); ?>
                            </th>

                            <!-- display username -->
                            <td>
                                <?php echo (isset($_POST["Name"])) ? $_POST["Name"] : "NAMA_NIM"?>
                            </td>

                            <!-- Display check in -->
                            <td>
                                <?php echo (isset($_POST["bookdate"]) && $_POST["bookdate"] != "") ? date("Y-m-d H:i:s", strtotime($_POST["bookdate"] . " " . $_POST["starttime"])) : ""?>
                            </td>

                            <!-- Display Check Out from user -->
                            <td>
                                <?php 
                                    // convert duration to format that can do addition with another date
                                    $durationDays = "+ " . $_POST["duration"] . " days";

                                    // make concanation or merging bookdate with durations
                                    $checkOutDate = date("Y-m-d", strtotime($_POST["bookdate"] . $durationDays));

                                    // display check out date 
                                    echo (isset($_POST["duration"]) && $_POST["duration"] != "") ? date('Y-m-d H:i:s', strtotime($checkOutDate . " " . $_POST["starttime"])) : "";
                                ?>
                            </td>

                            <!-- Car Types Result -->
                            <td>
                                <?php
                                    // Global variable for price summary
                                    global $Mazda2;
                                    global $HondaCity;
                                    global $HondaFreed;
                                    
                                    // display selected carTypes
                                    echo isset($_POST["carTypes"]) ? $_POST["carTypes"] : "";

                                    // set Car price 
                                    $Mazda2 = (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Mazda 2")  ? 420000 : 0;
                                    $HondaCity = (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Honda City")  ? 400000 : 0;
                                    $HondaFreed = (isset($_POST["carTypes"]) && $_POST["carTypes"] == "Honda Freed")  ? 600000 : 0;
                                ?>
                            </td>

                            <!-- Display Phone Number -->
                            <td>
                                <?php echo (isset($_POST["phonenumber"])) ? $_POST["phonenumber"] : ""?>
                            </td>

                            <!-- Services -->
                            <td>
                                <ul>
                                    <?php 
                                        // Global variable for services
                                        global $HealthCost;
                                        global $DriverCost;
                                        global $FuelCost;

                                        // set services price
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

                            <!-- Summary Price -->
                            <td>
                                <?php 
                                    // addition all price 
                                    $summary = $HealthCost + $DriverCost + $FuelCost + $Mazda2 + $HondaCity + $HondaFreed;

                                    // Display price in currency format
                                    echo "Rp. " . number_format($summary,0,'','.');
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Import Footer -->
        <?php require './Components/Footer.php' ?>
    </body>
</html>