<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_pengadaan' => $_POST['id_pengadaan'],
        'nmr_barang' => $_POST['nmr_barang'],
        'tgl_pengadaan' => $_POST['tgl_pengadaan'],
        'jml_pengadaan' => $_POST['jml_pengadaan'],
        'sumber_pengadaan' => $_POST['sumber_pengadaan'],
        'password' => sha1($_POST['password'])
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
        'npm' => $_GET['id']
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
    if (!empty($_POST['password'])) {
        $data = [
            'nmr_barang' => $_POST['nmr_barang'],
            'tgl_pengadaan' => $_POST['tgl_pengadaan'],
            'jml_pengadaan' => $_POST['jml_pengadaan'],
            'password' => sha1($_POST['password'])
        ];
    } else {
        $data = [
            'nmr_barang' => $_POST['nmr_barang'],
            'tgl_pengadaan' => $_POST['tgl_pengadaan'],
            'jml_pengadaan' => $_POST['jml_pengadaan']
        ];
    }
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