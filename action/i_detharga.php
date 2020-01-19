<?php

    include 'connection.php';

    $waktu         = $_POST['waktu'];
    $kendaraan     = $_POST['kendaraan'];
    $harga         = $_POST['harga'];

    $insert			= "INSERT INTO detail_harga(waktu_id,kendaraan_id,harga) VALUES ('$waktu','$kendaraan','$harga')";
    $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
    
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../admin/dashboard.php?halaman=det_harga">