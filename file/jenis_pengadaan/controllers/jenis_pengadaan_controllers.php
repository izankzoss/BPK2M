<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'ID_JENIS' => $_POST['id_jenis'],
        'jenis_pengadaan' => $_POST['jenis_pengadaan'],
        'ket_jenis' => $_POST['ket_jenis']
    ];
    $simpan = __simpan($db, "jenis_pengadaan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=jenis_pengadaan';
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
        'id_jenis' => $_GET['id']
    ];
    $delete = __delete($db, "jenis_pengadaan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=jenis_pengadaan';
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
            'jenis_pengadaan' => $_POST['jenis_pengadaan'],
            'ket_jenis' => $_POST['ket_jenis']
        ];
    $where = [
        'id_jenis' => $_POST['id']
    ];
    $update = __update($db, "jenis_pengadaan", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=jenis_pengadaan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>