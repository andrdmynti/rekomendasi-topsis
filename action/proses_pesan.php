<?php

    include 'connection.php';

    $nama       = $_POST['nama'];
    $no_ktp     = $_POST['no_ktp'];
    $no_sim     = $_POST['no_sim'];
    $no_hp      = $_POST['no_hp'];
    $alamat     = $_POST['alamat'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];
    $jenis      = $_POST['jenis'];
    $kendaraan  = $_POST['kendaraan'];
    $waktu      = $_POST['waktu'];
    $lama       = $_POST['lama'];
    $total      = $_POST['total'];

    $target_dir = "../ktp/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "";

	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "";
	    }
    }
    
    $insert		= "INSERT INTO pemesanan(nama,alamat,nmr_tlp,ktp,foto_ktp,sim,tgl_awal,tgl_akhir,jenis_id,kendaraan_id,waktu_id,lama_sewa,total,status)
                    VALUES ('$nama','$alamat','$no_hp','$no_ktp','$target_file','$no_sim','$awal','$akhir','$jenis','$kendaraan','$waktu','$lama','$total',0)";
    $simpan		= mysqli_query($konek, $insert)or die(mysqli_error($konek));


    if($simpan)
    {
        echo 'Success';
    }

?>