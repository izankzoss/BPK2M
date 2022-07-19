<?php 
$db = __database();
$opsi = $_GET['action'];
if ($opsi == "input") {
  $data = [
    'id_inspeksi' => $_POST['inspeksi'],
    'id_keadaan' => $_POST['id_keadaan'],
    'no_asset' => $_POST['no_asset'],
    'tgl_inspeksi' => $_POST['tgl_inspeksi'],
    'pelaksana' => $_POST['pelaksana']
  ];
$simpan = __simpan($db, "inspeksi", $data);
if ($simpan) {
?>
<script>
  window.location.href = 'admin.php?terget=inspeksi';
</script>
<?php 
} else {
  echo "gagal simpan " .$db->error;
}
}
?>