<?php

    include 'connection.php';

    $id         = $_POST['id'];
    $nama       = $_POST['nama']; 
    $merk       = $_POST['merk']; 
    $jenis      = $_POST['jenis']; 

    $update 	    = "UPDATE kendaraan SET jenis_id='$jenis', nama='$nama', merk='$merk' WHERE id='$id'";
    $updatekend	    = mysqli_query($konek, $update)or die(mysqli_error($konek));
    
    if ($updatekend)
    {
        echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/dashboard.php?halaman=kendaraan">';
    }
	else {
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }

?>