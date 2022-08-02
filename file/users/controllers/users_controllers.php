<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'nm_lengkap' => $_POST['nm_lengkap'],
        'jabatan' => $_POST['jabatan']
    ];
    $simpan = __simpan($db, "users", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=users';
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
        'USERNAME' => $_GET['id']
    ];
    $delete = __delete($db, "users", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=users';
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
            'password' => $_POST['password'],
            'nm_lengkap' => $_POST['nm_lengkap'],
            'jabatan' => $_POST['jabatan']
        ];
    $where = [
        'username' => $_POST['id']
    ];
    $update = __update($db, "users", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=users';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>