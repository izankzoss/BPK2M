<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_pemusnahan' => $_POST['id_pemusnahan'],
        'tgl_pemusnahan' => $_POST['tgl_pemusnahan'],
        'ket_pemusnahan' => $_POST['ket_pemusnahan']
    ];
    $simpan = __simpan($db, "pemusnahan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=pemusnahan';
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
        'id_pemusnahan' => $_GET['id']
    ];
    $delete = __delete($db, "pemusnahan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=pemusnahan';
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
            'tgl_pemusnahan' => $_POST['tgl_pemusnahan'],
            'ket_jenis' => $_POST['ket_jenis']
        ];
    $where = [
        'id_pemusnahan' => $_POST['id']
    ];
    $update = __update($db, "pemusnahan", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=pemusnahan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>