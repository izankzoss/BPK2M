<?php 
$db = __database();
$opsi = $_GET['action'];
// star input
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
// end kondisi input
// start kondisi delete
elseif ($opsi == "delete") {
  $where = [
    'id_inspeksi' => $_GET['id']
  ];
 $delete = __delete($db, "inspeksi", $where);
 if ($delete) {
?>
<script>
  window.location.href = 'admin.php?terget=inspeksi';
</script>
<?php 
 } else {
  echo "gagal hapus " . $db->error;

 }

} 
// end kondisi delete
// start kondisi update

elseif ($opsi == "update") { 
    $data = [
       'id_keadaan' => $_POST['id_keadaan'],
      'no_asset' => $_POST['no_asset'],
      'tgl_inspeksi' => $_POST['tgl_inspeksi'],
    'pelaksana' => $_POST['pelaksana']

    ];
      $where = [
        'id_inspeksi' => $_POST['id']
      ];
      $update = __update($db, "inspeksi", $data, $where); 
      if ($update) {
        ?>
        <script>
        window.location.href ='admin.php?target=inspeksi';
      </script>
      <?php
  } else {
    echo "gagal update" . $db -> error;
  }
}
// end kondisi update 
?>
