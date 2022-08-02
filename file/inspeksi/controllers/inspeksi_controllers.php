<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'ID_INSPEKSI' => $_POST['ID_INSPEKSI'],
        'TGL_INSPEKSI' => $_POST['TGL_INSPEKSI'],
        'PELAKSANA' => $_POST['PELAKSANA']
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
        'ID_INSPEKSI' => $_GET['id']
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
        'TGL_INSPEKSI' => $_POST['TGL_INSPEKSI'],
        'PELAKSANA' => $_POST['PELAKSANA']
    ];
    $where = [
        'ID_INSPEKSI' => $_POST['id']
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