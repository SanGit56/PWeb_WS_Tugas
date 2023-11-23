<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWeb CRUD Mahasiswa</title>
</head>
<body>
    <a href="daftar_mahasiswa_db_tambahdata.php">Tambah</a>
    <?php
        include("_functions.php");

        $konek=dbconn();
        $sql_baca = "SELECT id, nrp, nama FROM pweb_mahasiswa";
        $hasil = mysqli_query($konek, $sql_baca);

        echo "<table border=1>
                <tr>
                    <th>id</th>
                    <th>nrp</th>
                    <th>nama</th>
                    <th>aksi</th>
                </tr>";

        if (mysqli_num_rows($hasil) > 0) {
            while ($baris = mysqli_fetch_assoc($hasil)) {
                echo "<tr>
                <td>" . $baris["id"] . "</td>
                <td>" . $baris["nrp"] . "</td>
                <td>" . $baris["nama"] . "</td>
                <td><a href='daftar_mahasiswa_db_editdata.php?id=" . $baris["id"] . "'>Edit</a>
                <a href='daftar_mahasiswa_db_hapusdata.php?id=" . $baris["id"] . "'>Hapus</a></td>
                </tr>";
            }
        } else {
            echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
        }
    ?>
</body>
</html>