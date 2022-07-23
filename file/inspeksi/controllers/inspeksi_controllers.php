<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        
        'tgl_inspeksi' => $_POST['tgl_inspeksi'],
        'pengadaan' => $_POST['pengadaan']
    ];
    $simpan = __simpan($db, "inspeksi", $data);
    if ($simpan){
?>
        <script>
            window.location.href = 'admin.php?target=inspeksi';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
// end kondisi input
// start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'tgl_inspeksi' => $_GET['id']
    ];
    $delete = __delete($db, "inspeksi", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=inspeksi';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
// end kondisi delete
// start kondisi update
elseif ($opsi == "update") {
    $data = [
        'pengadaan' => $_POST['pengadaan']
    ];
    $where = [
        'tgl_inspeksi' => $_POST['id']
    ];
    $update = __update($db, "inspeksi", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=inspeksi';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
// end kondisi update
?>