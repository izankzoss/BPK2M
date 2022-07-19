<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'nama_barang' => $_POST['nama_barang'],
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
//end input
//start delete
elseif ($opsi == "delete") {
    $where = [
        'nama_barang' => $_GET['id']
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