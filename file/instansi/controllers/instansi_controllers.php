<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_instansi' => $_POST['id_instansi'],
        'nm_instansi' => $_POST['nm_instansi'],
        'ket_instansi' => $_POST['ket_instansi']
    ];
    $simpan = __simpan($db, "instansi", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=instansi';
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
        'id_instansi' => $_GET['id']
    ];
    $delete = __delete($db, "instansi", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=instansi';
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
            'nm_instansi' => $_POST['nm_instansi'],
            'ket_instansi' => $_POST['ket_instansi']
        ];
    $where = [
        'id_instansi' => $_POST['id']
    ];
    $update = __update($db, "instansi", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=instansi';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>