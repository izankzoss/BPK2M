<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_pengadaan' => $_POST['id_pengadaan'],
        'tgl_pengadaan' => $_POST['tgl_pengadaan'],
        'jml_pengadaan' => $_POST['jml_pengadaan'],
        'sumber_pengadaan' => $_POST['sumber_pengadaan']
    ];
    $simpan = __simpan($db, "pengadaan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=pengadaan';
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
        'id_pengadaan' => $_GET['id']
    ];
    $delete = __delete($db, "pengadaan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=pengadaan';
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
            'tgl_pengadaan' => $_POST['tgl_pengadaan'],
            'jml_pengadaan' => $_POST['jml_pengadaan'],
            'sumber_pengadaan' => $_POST['sumber_pengadaan']
        ];
    $where = [
        'id_pengadaan' => $_POST['id']
    ];
    $update = __update($db, "pengadaan", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=pengadaan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>