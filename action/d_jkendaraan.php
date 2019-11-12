<?php

    include 'connection.php';

    $id     = $_GET['id'];

    $query  = "DELETE FROM jenis_kendaraan WHERE id='$id'";
    $delete = mysqli_query($konek, $query)or die(mysqli_error($konek));

    if ($delete)
    {
    	echo "<strong><center>Data Berhasil Dihapus";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/dashboard.php?halaman=jenis_kendaraan">';
    }
    else 
    {
        print"
            <script>
                alert(\"Data Gagal Dihapus!\");
                history.back(-1);
            </script>";
    }
?>