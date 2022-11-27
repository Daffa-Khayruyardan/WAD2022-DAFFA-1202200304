<?php 
    require 'connector.php';
    
    if(!isset($_SESSION)) {
        session_start();
    }

    $user_name = $_POST["email"];
    $password = $_POST["password"];

    $get_user_name = "SELECT * FROM users WHERE nama='$user_name'";
    $query_run_user_name = mysqli_query($connection, $get_user_name);

    if(mysqli_num_rows($query_run_user_name)) {
        $result_data = mysqli_fetch_assoc($query_run_user_name);

        if(password_verify($password,$result_data['password'])) {
            $_SESSION['name'] = $result_data['name'];
            $_SESSION['message'] = "Login Sukses";
            header('location:/TUGAS_PRAKTIKUM_WAD/MODUL3%20DAFFA/pages/HomeAfterLogin-DAFFA.php');
            exit();
        }else {
            $_SESSION['message-error'] = 'Password yang dimasukkan salah';
            header('location:/TUGAS_PRAKTIKUM_WAD/MODUL3%20DAFFA/');
            exit();
        }
    }

    $_SESSION['message-error'] = 'Login Tidak Berhasil';
    header('location:/TUGAS_PRAKTIKUM_WAD/MODUL3%20DAFFA/');
    exit();
?>