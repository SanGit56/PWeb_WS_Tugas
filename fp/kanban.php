<?php
    include 'utilitas/cek_masuk.php';
    include 'utilitas/koneksi.php';
    include 'utilitas/cek_pengguna.php';
    include 'templat/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 pane">
            <h3>Pane 1</h3>
            <p>This is the content of Pane 1.</p>
        </div>

        <div class="col-md-3 pane">
            <h3>Pane 2</h3>
            <p>This is the content of Pane 2.</p>
        </div>

        <div class="col-md-3 pane">
            <h3>Pane 3</h3>
            <p>This is the content of Pane 3.</p>
        </div>

        <div class="col-md-3 pane">
            <h3>Pane 4</h3>
            <p>This is the content of Pane 4.</p>
        </div>

    </div>
</div>

<?php include 'templat/footer.php'; ?>