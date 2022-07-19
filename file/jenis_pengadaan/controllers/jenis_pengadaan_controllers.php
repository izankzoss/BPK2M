<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'nama_barang' => $_POST['nama_barang'],
        'tanggal_pengadaan' => $_POST['tanggal_pengadaan'],
        'jumlah_pengadaan' => $_POST['jumlah_pengadaan'],
        'sumber_pengadaan' => $_POST['sumber_pengadaan']
    ];
    $simpan = __simpan(Sdb, "pengadaan", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=pengadaan';
        </script>
    }
}