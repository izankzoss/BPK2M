<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_keadaan' => $_POST['id_keadaan'],
        'keadaan' => $_POST['keadaan'],
        'ket_keadaan' => $_POST['ket_keadaan']
    ];
    $simpan = __simpan($db, "keadaan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=keadaan';
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
        'id_keadaan' => $_GET['id']
    ];
    $delete = __delete($db, "keadaan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=keadaan';
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
        'KEADAAN' => $_POST['KEADAAN'],
        'KET_KEADAAN' => $_POST['KET_KEADAAN']
    ];
    $where = [
        'ID_KEADAAN' => $_POST['id']
    ];
    $update = __update($db, "keadaan", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=keadaan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end update
?>