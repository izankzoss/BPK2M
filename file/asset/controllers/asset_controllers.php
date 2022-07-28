<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'NO_ASSET' => $_POST['NO_ASSET'],
        'NM_BARANG' => $_POST['NM_BARANG'],
        'SPESIFIKASI' => $_POST['SPESIFIKASI'],
        'JUMLAH' => $_POST['JUMLAH'],
        'HARGA' => $_POST['HARGA'],
        'TGL_TERIMA' => $_POST['TGL_TERIMA']
    ];
    $simpan = __simpan($db, "asset", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=asset';
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
        'NO_ASSET' => $_GET['id']
    ];
    $delete = __delete($db, "asset", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=asset';
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
        'NM_BARANG' => $_POST['NM_BARANG'],
        'SPESIFIKASI' => $_POST['SPESIFIKASI'],
        'JUMLAH' => $_POST['JUMLAH'],
        'HARGA' => $_POST['HARGA'],
        'TGL_TERIMA' => $_POST['TGL_TERIMA']
    ];
    $where = [
        'NO_ASSET' => $_POST['id']
    ];
    $update = __update($db, "asset", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=asset';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end update
?>