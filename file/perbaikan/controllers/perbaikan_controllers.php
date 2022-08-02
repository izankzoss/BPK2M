<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_perbaikan' => $_POST['id_perbaikan'],
        'perbaikan' => $_POST['perbaikan'],
        'ket_perbaikan' => $_POST['ket_perbaikan'],
        'tgl_perbaikan' => $_POST['tgl_perbaikan'],
        'biaya' => $_POST['biaya']
    ];
    $simpan = __simpan($db, "perbaikan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=perbaikan';
        </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'id_perbaikan' => $_GET['id']
    ];
    $delete = __delete($db, "perbaikan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=perbaikan';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}

//end kondisi delete
//start update
elseif ($opsi == "update") {
    $data = [
        'PERBAIKAN' => $_POST['PERBAIKAN'],
        'KET_PERBAIKAN' => $_POST['KET_PERBAIKAN'],
        'TGL_PERBAIKAN' => $_POST['TGL_PERBAIKAN'],
        'BIAYA' => $_POST['BIAYA']
    ];
    $where = [
        'ID_PERBAIKAN' => $_POST['id']
    ];
    $update = __update($db, "perbaikan", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=perbaikan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end update
?>