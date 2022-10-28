<?php
    $host = "localhost";
    $user = "EAD";
    $pass = "EAD@123";

    $connection = new mysqli($host,$user,$pass);

    if($connection->connect_error) {

    }else {
        echo "Connection Successfully";
    }
?>