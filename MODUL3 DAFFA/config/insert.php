<?php 
    require 'connector.php';

    if(isset($_POST["submit"])) {
         // data yang akan dimasukkan
        $nama_mobil = $_POST["nama"];
        $nama_pemilik = $_POST["pemilik"];
        $merk = $_POST["merk"];
        $tanggal_beli = $_POST["tanggal_beli"];
        $deskripsi = $_POST["deskripsi"];
        $status_mobil = $_POST["status"];

        // // get filename 
        // $filename = $_FILES["upload"]["name"];
        // $tmp_name = $_FILES["upload"]["tmp_name"];

        // // folder for upload
        // $folder_target = "asset/images/";

        // move_uploaded_file($tmp_name,$folder_target); 
        
        // current car id
        $id_mobil_sekarang = $jumlah_mobil + 1;
    
        $query = mysqli_query($connection, "INSERT INTO `showroom_daffa_table` (id_mobil,nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,status_pembayaran) VALUES('$id_mobil_sekarang','$nama_mobil','$nama_pemilik','$merk','$tanggal_beli','$deskripsi','$status_mobil')");

        header("Location:/TUGAS_PRAKTIKUM_WAD/MODUL3%20DAFFA/pages/ListCar-DAFFA.php");
    }
?>