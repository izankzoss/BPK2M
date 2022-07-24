<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_cara' => $_POST['id_cara'],
        'cara' => $_POST['cara'],
        'ket_cara' => $_POST['ket_cara']
    ];
    $simpan = __simpan($db, "cara_pemusnahan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=cara_pemusnahan';
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
        'id_cara' => $_GET['id']
    ];
    $delete = __delete($db, "cara_pemusnahan", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=cara_pemusnahan';
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
        'cara' => $_POST['cara'],
        'ket_cara' => $_POST['ket_cara']
    ];
    $where = [
        'ket_cara' => $_POST['id']
    ];
    $update = __update($db, "cara_pemusnahan", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=cara_pemusnahan';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end update
?>