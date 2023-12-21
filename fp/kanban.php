<?php
    include 'utilitas/cek_masuk.php';
    include 'utilitas/koneksi.php';
    include 'utilitas/cek_pengguna.php';
    include 'templat/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 pt-1 pane">
            <form id="penugasan">
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
                    
                            $konek->close();
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
                    <button type="submit" class="btn btn-primary" onclick="tambahData()">Kirim</button>
                </div>
            </form>
        </div>

        <div class="col-md-3 pt-1 pane">
            <h3>Belum Dikerjakan</h3>
        </div>

        <div class="col-md-3 pt-1 pane">
            <h3>Sedang Dikerjakan</h3>
        </div>

        <div class="col-md-3 pt-1 pane">
            <h3>Selesai</h3>
        </div>

    </div>
</div>

<script>
    function tambahData() {
        var dataForm = new FormData(document.getElementById("penugasan"));

        var xhr = new XMLHttpRequest();

        xhr.open("POST", "utilitas/tambah.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    console.log(xhr.responseText);
                } else {
                    var notif = document.getElementById("notif");
                    notif.setAttribute("class", "alert alert-warning");
                    notif.setAttribute("role", "alert");
                    notif.innerHTML = xhr.statusText;
                }
            }
        };

        xhr.send(dataForm);
    }
</script>

<?php include 'templat/footer.php'; ?>