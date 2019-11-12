<?php

    include 'connection.php';

    $nama  = $_POST['nama'];
    $merk  = $_POST['merk'];
    $jenis = $_POST['jenis'];

    // var_dump($jenis);

    $insert = "INSERT INTO kendaraan (nama,merk,jenis_id) values ('$nama','$merk','$jenis')";
    $simpan = mysqli_query($konek, $insert)or die(mysqli_error($konek));

    echo "<META HTTP-EQUIV='REFRESH' CONTENT = '0; URL=../admin/dashboard.php?halaman=kendaraan'>";

?>