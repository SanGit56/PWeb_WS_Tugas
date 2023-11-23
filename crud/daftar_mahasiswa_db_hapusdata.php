<head>
   <meta content="en-us" http-equiv="Content-Language">
   <title>Hapus Data</title>
</head>

<?php
	include("_functions.php");

	$id_exists = isset($_GET['id']) ? $_GET['id']: "";

	if ($id_exists) {
		$sql="DELETE FROM pweb_mahasiswa WHERE id = '$id_exists'";

      	$conn=dbconn();
      	$result=mysqli_query($conn, $sql);
      	mysqli_close($conn);

		header("Location: ./");
		exit;
	}
?>