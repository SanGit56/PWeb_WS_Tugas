<head>
   <meta content="en-us" http-equiv="Content-Language">
   <title>Edit Data</title>
</head>

<?php
	include("_functions.php");

    $id_exists = isset($_GET['id']) ? $_GET['id']: "";

    if ($id_exists) {
        $konek=dbconn();
        $sql_baca = "SELECT id, nrp, nama FROM pweb_mahasiswa WHERE id = " . $_GET["id"];
        $hasil = mysqli_query($konek, $sql_baca);

        if (mysqli_num_rows($hasil) > 0) {
            $baris = mysqli_fetch_assoc($hasil);
        }
    }

	$act = isset($_GET['a']) ? $_GET['a']: "";

	if ($act=="i") {
		$old_nrp = $_POST['in_NRP'];
		$new_nama = $_POST['in_Nama'];

		$sql="UPDATE pweb_mahasiswa SET nama = '$new_nama' WHERE nrp = '$old_nrp'";

      	$conn=dbconn();
      	$result=mysqli_query($conn, $sql);
      	mysqli_close($conn);

        header("Location: ./");
        exit;
	}
?>

<form method="post" action="?a=i">
    <table style="width: 100%">
        <tr>
            <td>NRP</td>
            <td>
                <input name="in_NRP" type="text" value="<?= isset($_GET['id']) ? $baris['nrp']: ""; ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input name="in_Nama" type="text" value="<?= isset($_GET['id']) ? $baris['nama']: ""; ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Edit</button></td>
        </tr>
    </table>
</form>

<a href="./">Kembali</a>