<?php 
    require './connector.php';

    if(isset($_POST['edit_car'])) {
        // edit data for update
        $nama_mobil = $_POST["nama"];
        $nama_pemilik = $_POST["pemilik"];
        $merk = $_POST["merk"];
        $tanggal_beli = $_POST["tanggal_beli"];
        $deskripsi = $_POST["deskripsi"];
        $status_mobil = $_POST["status"];

        // query for update
        $query_syntax = "UPDATE showroom_daffa_table SET nama_mobil='$nama_mobil', nama_pemilik='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi'";
        $edit_query = mysqli_query($connection, $query_syntax);

    }
?>