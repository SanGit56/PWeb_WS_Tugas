<?php
    include("../crud/_functions.php");
    $conn = dbconn();
    $del = isset($_GET['del']) ? $del = $_GET['del'] : "";
    if ($del != "") {
        $sql = "DELETE FROM pweb_mahasiswa where nrp='$del'";
        $result = mysqli_query($conn, $sql);
    }
    $sql = "SELECT * from pweb_mahasiswa order by nama";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $nrp[$i] = $row['nrp'];
        $nama[$i] = $row['nama'];
        $i++;
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <meta content="en-us" http-equiv="Content-Language" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>DB Mahasiswa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".updateable").focusout(function() {
                in_newvalue = $(this).val();
                in_oldvalue = $(this).attr("data-oldvalue");
                if (in_newvalue != in_oldvalue) {
                    in_colname = $(this).attr("data-col");
                    in_pkval = $(this).attr("data-pkval");
                    $.post("updates.php", {
                            p_col: in_colname,
                            p_newvalue: in_newvalue,
                            p_pkval: in_pkval
                        },
                        function(data, status) {
                            alert("Data: " + data + "\nStatus: " + status);
                        });
                }
            });
        });
    </script>
</head>

<body>
    <table style="width: auto" border="1">
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>&nbsp;</th>
        </tr>
        <?php for ($i = 0; $i < sizeof($nrp); $i++) { ?>
            <tr>
                <td><?php echo $i + 1 ?></td>
                <td>
                    <input class="updateable" data-oldvalue="<?php echo $nrp[$i]; ?>" data-col="nrp" data-pkval="<?php echo $nrp[$i]; ?>" type="text" value="<?php echo $nrp[$i]; ?>">
                </td>
                <td>
                    <input class="updateable" data-oldvalue="<?php echo $nama[$i]; ?>" data-col="nama" data-pkval="<?php echo $nrp[$i]; ?>" type="text" value="<?php echo $nama[$i]; ?>">
                </td>
                <td><a href="daftar_mahasiswa_db_editdata.php?nrp=<?php echo $nrp[$i]; ?>">edit</a>
                    <a href="?del=<?php echo $nrp[$i]; ?>">del</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>