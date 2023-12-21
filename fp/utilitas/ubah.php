<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $status = $_POST["status"];

        include 'koneksi.php';

        $escapedId = $konek->real_escape_string($id);
        $escapedStatus = $konek->real_escape_string($status);

        $sql = "UPDATE pweb_kerjaan SET status = '$escapedStatus' WHERE id = '$escapedId'";
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