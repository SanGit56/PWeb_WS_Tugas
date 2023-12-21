<?php
    $nama = mysqli_real_escape_string($konek, $_POST["nama"]);
    $nrp = mysqli_real_escape_string($konek, $_POST["nrp"]);

    $sql_cek_pgn = "SELECT id FROM pweb_mahasiswa WHERE nama = '$nama' AND nrp = '$nrp'";
    $hasil_cek_pgn = mysqli_query($konek, $sql_cek_pgn);

    $ada_pengguna = 0;
    $id_pgn_msk = "";

    if (mysqli_num_rows($hasil_cek_pgn) > 0) {
        $ada_pengguna = 1;
        $id_pgn_msk = mysqli_fetch_assoc($hasil_cek_pgn)["id"];
    } else {
        echo "Pengguna tidak ditemukan<br />";
        die();
    }
?>