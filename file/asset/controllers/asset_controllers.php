<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'no_asset' => $_POST['no_asset'],
        'nm_barang' => $_POST['nm_barang'],
        'spesifikasi' => $_POST['spesifikasi'],
        'jumlah' => $_POST['jumlah'],
        'harga' => $_POST['harga'],
        'id_instansi' => $_POST['id_instansi'],
        'id_asset' => $_POST['id_asset'],
        'id_pengadaan' => $_POST['id_pengadaan'],
        'tgl_terima' => $_POST['tgl_terima']
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
        'ID_INSTANSI' => $_POST['ID_INSTANSI'],
        'ID_ASSET' => $_POST['ID_ASSET'],
        'TGL_TERIMA' => $_POST['TGL_TERIMA']
    ];
    $where = [
        'no_asset' => $_POST['id']
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