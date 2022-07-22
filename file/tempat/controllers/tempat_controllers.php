<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_tempat' => $_POST['id_tempat'],
        'tmp_simpan' => $_POST['tmp_simpan'],
        'ket_tempat' => $_POST['ket_tempat'],
        'password' => sha1($_POST['password'])
    ];
    $simpan = __simpan($db, "tempat", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=tempat';
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
        'id_tempat' => $_GET['id']
    ];
    $delete = __delete($db, "tempat", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=tempat';
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
            'tmp_simpan' => $_POST['tmp_simpan'],
            'ket_tempat' => $_POST['ket_tempat'],
            'password' => sha1($_POST['password'])
        ];
    } else {
        $data = [
            'tmp_simpan' => $_POST['tmp_simpan'],
            'ket_tempat' => $_POST['ket_tempat']
        ];
    }
    $where = [
        'id_tempat' => $_POST['id']
    ];
    $update = __update($db, "tempat", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=tempat';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>