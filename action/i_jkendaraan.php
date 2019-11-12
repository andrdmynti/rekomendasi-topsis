<?php

    include 'connection.php';

    $jenis  = $_POST['jenis'];

    // var_dump($jenis);

    $insert = "INSERT INTO jenis_kendaraan (jenis) values ('$jenis')";
    $simpan = mysqli_query($konek, $insert)or die(mysqli_error($konek));

    echo "<META HTTP-EQUIV='REFRESH' CONTENT = '0; URL=../admin/dashboard.php?halaman=jenis_kendaraan'>";

?>