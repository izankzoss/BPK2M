<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'no_barang' => $_POST['no_barang'],
        'tgl_pengadaan' => $_POST['tgl_pengadaan'],
        'jml_pengadaan' => $_POST['jml_pengadaan'],
        'sumber_pengadaan' => sha1($_POST['sumber_pengadaan'])
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
//end input
//start delete
elseif ($opsi == "delete") {
    $where = [
        'no_barang' => $_GET['id']
    ];
    $delete = __delete($db, "pengadaan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=pengadaan';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
//end delete
//start update
elseif ($opsi == "update") {
    if (!empty($_POST['sumber_pengadaan'])) {
        $data = [
        'no_barang' => $_POST['no_barang'],
        'tgl_pengadaan' => $_POST['tgl_pengadaan'],
        'jml_pengadaan' => $_POST['jml_pengadaan'],
        'sumber_pengadaan' => sha1($_POST['sumber_pengadaan'])
        ];
    } else {
        $data = [
            'no_barang' => $_POST['no_barang'],
            'tgl_pengadaan' => $_POST['tgl_pengadaan'],
            'jml_pengadaan' => $_POST['jml_pengadaan']
        ];
    }
    $where = [
        'no_barang' => $_POST['id']
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
//end update
?>