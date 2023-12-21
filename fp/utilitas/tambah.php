<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $petugas = $_POST["petugas"];
        $judul = $_POST["judul"];
        $deskripsi = $_POST["deskripsi"];

        var_dump($petugas . "," . $judul . "," . $deskripsi);die();

        include 'koneksi.php';

        $escapedPetugas = $konek->real_escape_string($petugas);
        $escapedJudul = $konek->real_escape_string($judul);
        $escapedDeskripsi = $konek->real_escape_string($deskripsi);

        $sql = "INSERT INTO pweb_kerjaan (petugas, judul, deskripsi) VALUES ('$escapedPetugas', '$escapedJudul', '$escapedDeskripsi')";
        $hasil = $konek->query($sql);

        if ($hasil) {
            echo "Berhasil tambah data";
        } else {
            echo "Gagal tambah data: " . $konek->error;
        }

        $konek->close();
    } else {
        header("HTTP/1.1 400 Bad Request");
        echo "Metode request tidak valid";
      }
?>