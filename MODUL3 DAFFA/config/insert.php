<?php 
    require 'config/connector.php';

    // data yang akan dimasukkan
    $nama_mobil = $_POST["nama"];
    $nama_pemilik = $_POST["pemilik"];
    $merk = $_POST["merk"];
    $tanggal_beli = $_POST["tanggal_beli"];
    $deskripsi = $_POST["deskripsi"];
    $foto_mobil = $_POST["foto"];

    if(isset($_POST["submit"])) {
        // the location store image
        $target_loc = "asset/images" . basename($_FILES['image']['name']);
        
        // trying get submitted data from form
        $image = $_FILES(['image']['name']);
        
        // make sql query
        $sql_query = "INSERT INTO showroom_daffa_table(nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto) VALUES ('$nama_mobil','$nama_pemilik','$merk','$tanggal_beli','$deskripsi','$foto_mobil')";

        // insert data to database
        $insert_query = mysqli_query($connection, $sql_query);

        // now let's move the uploaded image into the folder asset/images
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "success";
        }else {
            echo "failed";
        }
    }
?>