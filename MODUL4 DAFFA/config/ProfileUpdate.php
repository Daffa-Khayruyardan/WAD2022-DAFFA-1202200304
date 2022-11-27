<?php 
    require './connector.php';

    if(isset($_POST['profile_update'])) {
        $email = $_POST['email_update'];
        $name = $_POST['name_update'];
        $no_hp = $_POST['no_hp_update'];
        $passwd = $_POST['passwd_update'];
        $confirm_passwd = $_POST['confirm_passwd_update'];
        $navbar_color = $_POST['navbar_color'];

        $query_syntax = "UPDATE users SET nama='$name', ";
        $query_run = mysqli_query($connection, $query_syntax);
    }
?>