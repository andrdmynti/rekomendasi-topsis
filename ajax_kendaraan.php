<?php

	include "action/connection.php";

    $jenis = $_GET["jenis"];
    
	$query = "SELECT * FROM kendaraan WHERE jenis_id = '$jenis'";
	$sql = mysqli_query($konek,$query)or die(mysqli_error($query));

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['id']; ?>"><?php echo $row["nama"]; ?></option>
	<?php
	}
	?>
?>