<?php
    include 'utilitas/cek_masuk.php';
    include 'utilitas/koneksi.php';
    include 'utilitas/cek_pengguna.php';
    include 'templat/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 pt-1">
            <form method="post" action="utilitas/tambah.php" id="penugasan">
                <legend>Buat Penugasan</legend>

                <div id="notif"></div>

                <div class="mb-3">
                    <select class="form-select" name="petugas" id="petugas">
                        <option selected>=== pilih petugas ===</option>
                        <?php
                            $sql = "SELECT id, nama FROM pweb_mahasiswa";
                            $hasil = $konek->query($sql);
                    
                            while ($row = $hasil->fetch_assoc()) {
                                echo "<option value=" . $row['id'] . ">" . $row['nama'] . "</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="masukkan judul" name="judul" id="judul">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" placeholder="masukkan deskripsi" name="deskripsi" id="deskripsi"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>

        <div class="col-md-3 pt-1">
            <h3>Belum Dikerjakan</h3>

            <?php
                $sql = "SELECT id, petugas, judul, deskripsi FROM pweb_kerjaan WHERE status = '2'";
                $hasil = $konek->query($sql);
        
                while ($row = $hasil->fetch_assoc()) {
                    echo '
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["judul"] . '</h5>
                            <p class="card-text">' . $row["deskripsi"] . '</p>
                            <small>' . $row["petugas"] . '</small>

                            <form method="post" action="utilitas/ubah.php" id="penugasan">
                                <input class="form-control" type="hidden" name="id" id="id" value="' . $row["id"] . '">
                                <input class="form-control" type="hidden" name="status" id="status" value="3">
                                <button type="submit" class="btn btn-primary">Ambil kerjaan</button>
                            </form>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>

        <div class="col-md-3 pt-1">
            <h3>Sedang Dikerjakan</h3>

            <?php
                $sql = "SELECT id, petugas, judul, deskripsi FROM pweb_kerjaan WHERE status = '3'";
                $hasil = $konek->query($sql);
        
                while ($row = $hasil->fetch_assoc()) {
                    echo '
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["judul"] . '</h5>
                            <p class="card-text">' . $row["deskripsi"] . '</p>
                            <small>' . $row["petugas"] . '</small>

                            <form method="post" action="utilitas/ubah.php" id="penugasan">
                                <input class="form-control" type="hidden" name="id" id="id" value="' . $row["id"] . '">
                                <input class="form-control" type="hidden" name="status" id="status" value="4">
                                <button type="submit" class="btn btn-primary">Tandai selesai</button>
                            </form>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>

        <div class="col-md-3 pt-1">
            <h3>Selesai</h3>

            <?php
                $sql = "SELECT id, petugas, judul, deskripsi FROM pweb_kerjaan WHERE status = '4'";
                $hasil = $konek->query($sql);
        
                while ($row = $hasil->fetch_assoc()) {
                    echo '
                    <div class="card mb-3">
                        <div class="card-body bg-success">
                            <h5 class="card-title">' . $row["judul"] . '</h5>
                            <p class="card-text">' . $row["deskripsi"] . '</p>
                            <small>' . $row["petugas"] . '</small>

                            <form method="post" action="utilitas/ubah.php" id="penugasan">
                                <input class="form-control" type="hidden" name="id" id="id" value="' . $row["id"] . '">
                            </form>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>

    </div>
</div>

<?php include 'templat/footer.php'; ?>