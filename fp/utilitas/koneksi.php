<?php
    $namaserver = "localhost";
    $usernamedb = "kulp3765_5025211166";
    $passworddb = "san5025211166";
    $namadb = "kulp3765_5025211166";

    $konek = mysqli_connect($namaserver, $usernamedb, $passworddb, $namadb);

    if (!$konek) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>