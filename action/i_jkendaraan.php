<?php

    include 'connection.php';

    $jkendaraan = $_POST['jkendaraan'];

    $insert			= "INSERT INTO j_kendaraan(jenis) VALUES ('$jkendaraan')";
    $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
    
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../admin/dashboard.php?halaman=j_kendaraan">