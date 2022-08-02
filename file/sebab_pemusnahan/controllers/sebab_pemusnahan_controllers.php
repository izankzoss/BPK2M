<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_sebab' => $_POST['id_sebab'],
        'sebab' => $_POST['sebab'],
        'ket_sebab' => $_POST['ket_sebab'],
    ];
    $simpan = __simpan($db, "sebab_pemusnahan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=sebab_pemusnahan';
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
    $delete = __delete($db, "sebab_pemusnahan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=sebab_pemusnahan';
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
        'sebab' => $_POST['sebab'],
        'ket_sebab' => $_POST['ket_sebab']
    ];
    $where = [
        'id_sebab' => $_POST['id']
    ];
    $update = __update($db, "sebab_pemusnahan", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=sebab_pemusnahan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>