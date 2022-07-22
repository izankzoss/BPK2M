<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_sebab' => $_POST['id_sebab'],
        'id_pemusnahan' => $_POST['id_pemusnahan'],
        'sebab' => $_POST['sebab'],
        'ket_sebab' => $_POST['ket_sebab'],
        'password' => sha1($_POST['password'])
    ];
    $simpan = __simpan($db, "sebab", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=sebab';
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
        'id_sebab' => $_GET['id']
    ];
    $delete = __delete($db, "sebab", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=sebab';
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
            'id_pemusnahan' => $_POST['id_pemusnahan'],
            'sebab' => $_POST['sebab'],
            'password' => sha1($_POST['password'])
        ];
    } else {
        $data = [
            'id_pemusnahan' => $_POST['id_pemusnahan'],
            'sebab' => $_POST['sebab'],
            'ket_sebab' => $_POST['ket_sebab']
        ];
    }
    $where = [
        'id_sebab' => $_POST['id']
    ];
    $update = __update($db, "sebab", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=sebab';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>