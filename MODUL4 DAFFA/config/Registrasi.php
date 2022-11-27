<?php 
    require './connector.php';

    // get data from submit form
    $email_user = $_POST['email'];
    $nama_user = $_POST['nama_user'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['passwd'];
    $confirm_password = $_POST['confirm_passwd'];

    if(isset($_POST['daftar'])) {
        // get row number for id increment
        $query_get_all_user = "SELECT * FROM users";
        $query_user_run = mysqli_query($connection, $query_get_all_user);

        // make increment for id  
        $jumlah_users = mysqli_num_rows($query_user_run);
        $id_user = $jumlah_users + 1;

        // run query insert user to table
        $query_syntax = "INSERT INTO users(id,nama,email,pasword,no_hp) VALUES($id_user,$nama_user,$email_user,$password,$no_hp)";

        // run insert user query
        $query_syntax = mysqli_query($connection, $query_syntax);
    }
?>