<?php

    include 'connection.php';

    $nopol         = $_POST['nopol'];
    $kendaraan_id  = $_POST['kendaraan_id'];
    $warna         = $_POST['warna'];
    $tahun         = $_POST['thn'];
    $daya          = $_POST['daya'];

    $insert			= "INSERT INTO d_kendaraan(kendaraan_id,nopol_kendaraan,warna_kendaraan,tahun_pembuatan,daya_listrik) VALUES ('$kendaraan_id','$nopol','$warna','$tahun','$daya')";
    $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
    
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../admin/dashboard.php?halaman=det_kendaraan">