<?php
	include "action/connection.php";

	$waktu     = $_GET["waktu"];
	$kendaraan = $_GET["kendaraan"];
	$lama      = $_GET["lama"];

	$query = "SELECT * FROM detail_harga WHERE waktu_id = '$waktu' AND kendaraan_id = '$kendaraan'";
	$sql = mysqli_query($konek,$query)or die(mysqli_error($konek));
	$row = mysqli_fetch_array($sql);

	$total = $row["harga"] * $lama;

	echo $total;
	
?>