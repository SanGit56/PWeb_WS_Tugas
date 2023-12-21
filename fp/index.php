<?php include 'templat/header.php'; ?>

    <div class="container">
        <form method="post" action="kanban.php">
            <legend>Masuk</legend>

            <div class="mb-3">
                <input class="form-control" type="text" placeholder="masukkan nama" name="nama">
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" placeholder="masukkan nrp" name="nrp">
            </div>

            <div class="mb-5">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>

        <hr>

        <?php
            include 'utilitas/koneksi.php';
            
            $sql = "SELECT id, nrp, nama FROM pweb_mahasiswa";
            $hasil = mysqli_query($konek, $sql);

            echo "<table class='table table-bordered mt-5'>
                <caption>gunakan akun yang tersedia di atas</caption>
                <tr>
                    <th>id</th>
                    <th>nrp</th>
                    <th>nama</th>
                </tr>";

            if (mysqli_num_rows($hasil) > 0) {
                while ($baris = mysqli_fetch_assoc($hasil)) {
                    echo "<tr>
                        <td>" . $baris["id"] . "</td>
                        <td>" . $baris["nrp"] . "</td>
                        <td>" . $baris["nama"] . "</td>
                    </tr>";
                }
            } else {
                echo "<tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>";
            }

            echo "</table>";

            mysqli_close($konek);
        ?>
    </div>

<?php include 'templat/footer.php'; ?>