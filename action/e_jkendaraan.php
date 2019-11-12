<?php

    include 'connection.php';

    $id     = $_POST['id'];
    $jenis  = $_POST['jenis'];

    $query  = "UPDATE jenis_kendaraan SET jenis='$jenis' WHERE id='$id'";
    $update = mysqli_query($konek, $query)or die(mysqli_error($konek));

    if ($update)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/dashboard.php?halaman=jenis_kendaraan">';
    }
    else 
    {
        //echo "<strong><center>Data Gagal Diubah";
        //echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }
?>