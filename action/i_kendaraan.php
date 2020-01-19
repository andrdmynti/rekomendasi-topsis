<?php

    include 'connection.php';

    $nama      = $_POST['nama'];
    $jenis_id  = $_POST['jenis_id'];
    $merk      = $_POST['merk'];

    $insert			= "INSERT INTO kendaraan(nama,jenis_id,merk) VALUES ('$nama','$jenis_id','$merk')";
    $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
    
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../admin/dashboard.php?halaman=kendaraan">