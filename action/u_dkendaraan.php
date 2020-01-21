<?php

    include 'connection.php';

    $id         = $_POST['id'];
    $nopol      = $_POST['nopol']; 
    $warna      = $_POST['warna']; 
    $thn        = $_POST['thn']; 
    $daya       = $_POST['daya']; 

    $update 	    = "UPDATE d_kendaraan SET nopol_kendaraan='$nopol', warna_kendaraan='$warna', tahun_pembuatan='$thn', daya_listrik='$daya' WHERE id='$id'";
    $updatekend	    = mysqli_query($konek, $update)or die(mysqli_error($konek));
    
    if ($updatekend)
    {
        echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/dashboard.php?halaman=det_kendaraan">';
    }
	else {
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }
?>