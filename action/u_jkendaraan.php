<?php

    include 'connection.php';

    $id         = $_POST['id'];
    $jkendaraan = $_POST['jkendaraan']; 

    $update 	    = "UPDATE j_kendaraan SET jenis='$jkendaraan' WHERE id='$id'";
    $updatejenis	= mysqli_query($konek, $update)or die(mysqli_error($konek));
    
    if ($updatejenis)
    {
        echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/dashboard.php?halaman=j_kendaraan">';
    }
	else {
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }

?>