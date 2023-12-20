<?php
	include("../crud/_functions.php");
	$conn=dbconn();
	$newvalue=$_POST['p_newvalue'];
	$col = $_POST['p_col'];
	$pkval = $_POST['p_pkval'];
	$sql="UPDATE pweb_mahasiswa SET $col='$newvalue' WHERE nrp = '$pkval'";
	if(mysqli_query($conn, $sql)) {
		echo "update sukses";
	} else {
		echo "update gagal";
	}
	mysqli_close($conn);
?>