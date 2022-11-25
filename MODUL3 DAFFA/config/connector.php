        <?php 
            $server = "localhost";
            $user = "root";
            $passwd = "";
            $database = "tp_wads";
            
            // Create connection
            $connection = new mysqli($server, $user, $passwd, $database);

            // get columm
            $get_all_table_row = mysqli_query($connection, "SELECT * FROM showroom_daffa_table");
            $jumlah_mobil = mysqli_num_rows($get_all_table_row);  

        ?>