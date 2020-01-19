<?php

    include 'connection.php';

    $waktu = $_POST['waktu'];

    $insert			= "INSERT INTO waktu(lama_peminjaman) VALUES ('$waktu')";
    $simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));
    
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../admin/dashboard.php?halaman=waktu">