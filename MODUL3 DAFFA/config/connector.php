<?php 
    $server = "localhost";
    $user = "root";
    $passwd = "";
    $database = "tp_wad";
    
    // Create connection
    $connection = new mysqli($server, $user, $passwd, $database);

    // check if table exists
    global $tableExists;
    $tableExists = $connection->query("SELECT * FROM showroom_daffa_table WHERE id_mobil = 1");

?>