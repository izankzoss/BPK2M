<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_asset' => $_POST['id_asset'],
        'jenis_asset' => $_POST['jenis_asset'],
        'keterangan' => $_POST['keterangan']
    ];
    $simpan = __simpan($db, "jenis_asset", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=jenis_asset';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
// end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'id_asset' => $_GET['id']
    ];
    $delete = __delete($db, "jenis_asset", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=jenis_asset';
        </script>
    <?php
    } else {
        echo "gagal hapus " . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif ($opsi == "update") {
    $data = [
        'jenis_asset' => $_POST['jenis_asset'],
        'ket_asset' => $_POST['ket_asset']
    ];
    $where = [
        'id_asset' => $_POST['id']
    ];
    $update = __update($db, "jenis_asset", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=jenis_asset';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>